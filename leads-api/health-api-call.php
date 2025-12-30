<?php
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';

// Get the current date and time
$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

if (!empty($requestData['healthApi']) && $requestData['healthApi'] === 'Yes') {
    $_SESSION['prevFormData'] = $requestData;
}

$data = !empty($_SESSION['prevFormData']) ? $_SESSION['prevFormData'] : $requestData;
$base_url = $_SERVER['HTTP_REFERER'];

if (!empty($requestData['healthApi']) && $requestData['healthApi'] === 'Yes') {
    $healthApiResult = healthApiCall($data, $base_url, $updateTime, $preferredtimeofcall);
}

function healthApiCall($data, $base_url, $updateTime, $preferredtimeofcall)
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
    $income = !empty($data['income']) ? $data['income'] : '';
    $age = !empty($data['age']) ? $data['age'] : '';
    $employmentStatus = !empty($data['employmentStatus']) ? $data['employmentStatus'] : '';

    $ageBar = ['25-34', '35-44', '45-55'];
    if ($income == 'R0 - R5,000' || !in_array($age, $ageBar) || $employmentStatus != 'Employed') {
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
        'employment_status' => $employmentStatus,
        'income' => $income,
        'age' => $age,
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'medical-insurance', $productFields);

    if ($webhookResult['success']) {
        // Log successful submission
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'MEDICAL-WHITE-LABEL',
            'funnel_id' => !empty($data['funnelId']) ? $data['funnelId'] : 'N/A',
            'sid' => '25335',
            'api_payload' => json_encode($webhookResult['payload']),
            'api_response' => $webhookResult['response'],
            'city' => !empty($data['shippingCity']) ? $data['shippingCity'] : '',
            'firstname' => $data['given-name'],
            'lastname' => $data['family-name'],
            'phone1' => $data['phone'],
            'email' => !empty($data['email']) ? $data['email'] : 'N/A',
            'optinurl' => $base_url,
            'optindate' => $updateTime,
            'employmentstatus' => $employmentStatus,
            'income' => $income,
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : '',
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => '2926',
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
