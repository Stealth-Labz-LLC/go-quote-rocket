<?php
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';

// Get the current date and time
$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

if (!empty($requestData['debtApi']) && $requestData['debtApi'] === 'Yes') {
    $_SESSION['prevFormData'] = $requestData;
}

$data = !empty($_SESSION['prevFormData']) ? $_SESSION['prevFormData'] : $requestData;
$base_url = $_SERVER['HTTP_REFERER'];

if (!empty($requestData['debtApi']) && $requestData['debtApi'] === 'Yes') {
    $debtApiResult = debtApiCall($data, $base_url, $updateTime, $preferredtimeofcall);
}

function debtApiCall($data, $base_url, $updateTime, $preferredtimeofcall)
{
    // Validate required fields
    $validation = validateRequiredFields($data);
    if (!$validation['valid']) {
        $errorResponse = [
            "status" => "Validation Error",
            "code" => 2,
            "status_message" => implode(', ', $validation['errors']),
        ];
        echo json_encode($errorResponse);
        return false;
    }

    // Check business validation rules
    $debtGreaterThan40k = !empty($data['debt_greater_than_40_000']) ? $data['debt_greater_than_40_000'] : 'false';
    $incomeGreaterThan15k = !empty($data['monthly_income']) ? $data['monthly_income'] : 'false';
    $employment = !empty($data['employment']) ? $data['employment'] : 'false';
    $age = !empty($data['age']) ? $data['age'] : '';

    if ($debtGreaterThan40k !== 'true' || $incomeGreaterThan15k !== 'true' || $employment !== 'true' || $age !== '25-64') {
        $errorResponse = [
            "status" => "Validation Error",
            "code" => 2,
            "status_message" => 'Validation criteria did not match.',
        ];
        echo json_encode($errorResponse);
        return false;
    }

    // Product-specific fields for notes
    $productFields = [
        'under_debt_review' => $data['underdebtreview'] ?? '',
        'employment' => $employment,
        'age' => $age,
        'debt_greater_than_40k' => $debtGreaterThan40k,
        'income_greater_than_15k' => $incomeGreaterThan15k,
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'debt-relief', $productFields);

    if ($webhookResult['success']) {
        // Log successful submission
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'DEBT-WHITE-LABEL',
            'funnel_id' => !empty($data['funnelId']) ? $data['funnelId'] : 'N/A',
            'sid' => '25335',
            'api_payload' => json_encode($webhookResult['payload']),
            'api_response' => $webhookResult['response'],
            'city' => !empty($data['shippingCity']) ? $data['shippingCity'] : 'N/A',
            'firstname' => $data['given-name'],
            'lastname' => $data['family-name'],
            'phone1' => $data['phone'],
            'email' => !empty($data['email']) ? $data['email'] : 'N/A',
            'optinurl' => $base_url,
            'optindate' => $updateTime,
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : 'N/A',
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => '2940',
            'preferredtimeofcall' => $preferredtimeofcall,
        ];

        // Lead import API
        $leadCurl = curl_init();
        curl_setopt_array($leadCurl, [
            CURLOPT_URL => 'https://quoterocket.co.za/leads-import/main/addData',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($leadPayload),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
                'Access-Control-Allow-Origin: *',
            ],
        ]);
        $LeadResponse = curl_exec($leadCurl);
        curl_close($leadCurl);

        $successResponse = [
            "response" => "OK",
            "code" => 0,
            "status_message" => "Lead submitted successfully"
        ];
        echo json_encode($successResponse);
        return true;
    } else {
        $errorResponse = [
            "status" => "Error",
            "code" => -1,
            "status_message" => "Failed to submit lead: " . ($webhookResult['error'] ?? 'Unknown error'),
        ];
        echo json_encode($errorResponse);
        return false;
    }
}
