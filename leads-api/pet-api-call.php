<?php
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';

$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

if (!empty($requestData['petApi']) && $requestData['petApi'] === 'Yes') {
    $_SESSION['prevFormData'] = $requestData;
}

$data = !empty($_SESSION['prevFormData']) ? $_SESSION['prevFormData'] : $requestData;
$base_url = $_SERVER['HTTP_REFERER'];

if (!empty($requestData['petApi']) && $requestData['petApi'] === 'Yes') {
    $petApiResult = petApiCall($data, $base_url, $updateTime, $preferredtimeofcall);
}

function petApiCall($data, $base_url, $updateTime, $preferredtimeofcall)
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

    // Product-specific fields for notes
    $productFields = [
        'pet_age' => $data['pet_age'] ?? '',
        'number_of_pets' => $data['number_of_pets'] ?? '',
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'pet-insurance', $productFields);

    if ($webhookResult['success']) {
        // Log successful submission
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'PET-WL-WEB-API',
            'sid' => '25335',
            'funnel_id' => !empty($data['funnelId']) ? $data['funnelId'] : 'N/A',
            'email' => !empty($data['email']) ? trim($data['email']) : 'N/A',
            'firstname' => trim($data['given-name']),
            'lastname' => trim($data['family-name']),
            'phone1' => $data['phone'],
            'optinurl' => $base_url,
            'optindate' => $updateTime,
            'api_payload' => json_encode($webhookResult['payload']),
            'api_response' => $webhookResult['response'],
            'product' => 'JMpeter',
            'pet_age' => !empty($data['pet_age']) ? $data['pet_age'] : 'N/A',
            'number_of_pets' => !empty($data['number_of_pets']) ? $data['number_of_pets'] : 'N/A',
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : uniqid('qr'),
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => '2947',
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
