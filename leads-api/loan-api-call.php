<?php
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';

// Get the current date and time
$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

if (!empty($requestData['loanApi']) && $requestData['loanApi'] === 'Yes') {
    $_SESSION['prevFormData'] = $requestData;
}

$data = !empty($_SESSION['prevFormData']) ? $_SESSION['prevFormData'] : $requestData;
$base_url = $_SERVER['HTTP_REFERER'];

if (!empty($requestData['loanApi']) && $requestData['loanApi'] === 'Yes') {
    $loanApiResult = loanApiCall($data, $base_url, $updateTime, $preferredtimeofcall);
}

function loanApiCall($data, $base_url, $updateTime, $preferredtimeofcall)
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
    $age = !empty($data['age']) ? $data['age'] : '';
    $income = !empty($data['income']) ? $data['income'] : '';

    if ($age !== '18-60' || $income === 'R0 - R5,000') {
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
        'id_number' => $data['idnumber'] ?? '',
        'income' => $income,
        'loan_amount' => $data['loanamount'] ?? '',
        'age' => $age,
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'personal-loan', $productFields);

    if ($webhookResult['success']) {
        // Log successful submission
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'KONGA',
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
            'underdebtreview' => !empty($data['underdebtreview']) ? $data['underdebtreview'] : 'N/A',
            'idnumber' => !empty($data['idnumber']) ? $data['idnumber'] : 'N/A',
            'income' => $income,
            'loanamount' => !empty($data['loanamount']) ? $data['loanamount'] : 'null',
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : 'N/A',
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => '2937',
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
