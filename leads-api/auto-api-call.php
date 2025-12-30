<?php
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';

$triggerTrackApi = 0;
$triggerWarrantyApi = 0;

// Get the current date and time
$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

if (!empty($requestData['insuranceApi']) && $requestData['insuranceApi'] === 'Yes') {
    $_SESSION['prevFormData'] = $requestData;
    $_SESSION['delaySetForTrack'] = 1;
}
$data = !empty($_SESSION['prevFormData']) ? $_SESSION['prevFormData'] : $requestData;

if (!empty($requestData['trackApi']) && $requestData['trackApi'] === 'Yes') {
    $triggerTrackApi = 1;
    $_SESSION['delaySetForWarrant'] = 1;
    if (isset($_SESSION['delaySetForTrack']) && $_SESSION['delaySetForTrack'] == 1) {
        $trackPreferredtimeofcall = $currentDateTime->modify('+45 minutes')->format('Y-m-d H:i:s');
    } else {
        $trackPreferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');
    }
}
if (!empty($requestData['warrantApi']) && $requestData['warrantApi'] === 'Yes') {
    $triggerWarrantyApi = 1;
    if (isset($_SESSION['delaySetForWarrant']) && $_SESSION['delaySetForWarrant'] == 1) {
        $warrantyPreferredtimeofcall = $currentDateTime->modify('+90 minutes')->format('Y-m-d H:i:s');
    } else {
        $warrantyPreferredtimeofcall = $currentDateTime->modify('+45 minutes')->format('Y-m-d H:i:s');
    }
}

$data['otherMakeYear'] = !empty($data['otherYears']) ? $data['otherYears'] : '0000';
$base_url = $_SERVER['HTTP_REFERER'];

if (!empty($requestData['insuranceApi']) && $requestData['insuranceApi'] === 'Yes') {
    $insuranceApiResult = insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall);
}
if (!empty($requestData['trackApi']) && $requestData['trackApi'] === 'Yes') {
    trackApiCall($data, $base_url, $updateTime, $triggerTrackApi, $trackPreferredtimeofcall);
}
if (!empty($requestData['warrantApi']) && $requestData['warrantApi'] === 'Yes') {
    warrantyApiCall($data, $base_url, $updateTime, $triggerWarrantyApi, $warrantyPreferredtimeofcall);
}

function insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall)
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
    $income = !empty($data['monthly_income']) ? $data['monthly_income'] : '';
    $employment = !empty($data['employment']) ? $data['employment'] : '';

    if ($income != 'R8000+' || $employment != 'true') {
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
        'vehicle_make' => !empty($data['make']) ? $data['make'] : (!empty($data['otherMake']) ? $data['otherMake'] : ''),
        'vehicle_model' => $data['vehicle-model'] ?? '',
        'vehicle_year' => !empty($data['year']) ? $data['year'] : ($data['otherMakeYear'] ?? ''),
        'mileage' => $data['mileage'] ?? '',
        'current_carrier' => $data['current_carrier'] ?? '',
        'vehicle_used_as' => $data['vehicle_used_as'] ?? '',
        'currently_insured' => $data['currentlyinsured'] ?? '',
        'employment_status' => $employment,
        'income' => $income,
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'car-insurance', $productFields);

    if ($webhookResult['success']) {
        // Log successful submission
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'CAR-INSURANCE',
            'funnel_id' => !empty($data['funnelId']) ? $data['funnelId'] : 'N/A',
            'sid' => !empty($data['aff_id']) ? $data['aff_id'] : '25335',
            'api_payload' => json_encode($webhookResult['payload'], JSON_UNESCAPED_UNICODE),
            'api_response' => $webhookResult['response'],
            'city' => !empty($data['shippingCity']) ? $data['shippingCity'] : 'N/A',
            'firstname' => trim($data['given-name']),
            'lastname' => trim($data['family-name']),
            'phone1' => $data['phone'],
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'optinurl' => $base_url,
            'optindate' => $updateTime,
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : 'N/A',
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => !empty($data['offer_id']) ? $data['offer_id'] : '2918',
            'preferredtimeofcall' => $preferredtimeofcall,
            'triggerTrackapi' => $triggerTrackApi
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

function trackApiCall($data, $base_url, $updateTime, $triggerTrackApi, $trackPreferredtimeofcall)
{
    // Product-specific fields for notes
    $productFields = [
        'vehicle_make' => !empty($data['make']) ? $data['make'] : (!empty($data['otherMake']) ? $data['otherMake'] : ''),
        'vehicle_model' => $data['vehicle-model'] ?? '',
        'vehicle_year' => !empty($data['year']) ? $data['year'] : ($data['otherMakeYear'] ?? ''),
        'current_carrier' => $data['current_carrier'] ?? '',
        'currently_insured' => $data['currentlyinsured'] ?? '',
        'employment_status' => $data['employment-status'] ?? '',
        'city' => $data['shippingCity'] ?? '',
    ];

    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'vehicle-tracking', $productFields);

    // Log to internal system
    $leadUpdateData = [
        'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
        'phone1' => $data['phone'],
        'track_payload' => json_encode($webhookResult['payload']),
        'track_response' => $webhookResult['response'],
        'track_preferredtimeofcall' => $trackPreferredtimeofcall,
        'triggerTrackapi' => $triggerTrackApi
    ];

    $leadUpdateCurl = curl_init();
    curl_setopt_array($leadUpdateCurl, [
        CURLOPT_URL => 'https://quoterocket.co.za/leads-import/main/updateData',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($leadUpdateData),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
            'Access-Control-Allow-Origin: *',
        ],
    ]);
    $LeadUpdateResponse = curl_exec($leadUpdateCurl);
    curl_close($leadUpdateCurl);

    if ($webhookResult['success']) {
        $successResponse = [
            "response" => "OK",
            "code" => 0,
            "status_message" => "Track lead submitted successfully"
        ];
        echo json_encode($successResponse);
    } else {
        echo json_encode(["status" => "Error", "code" => -1]);
    }
    die();
}

function warrantyApiCall($data, $base_url, $updateTime, $triggerWarrantyApi, $warrantyPreferredtimeofcall)
{
    // Product-specific fields for notes
    $productFields = [
        'vehicle_make' => !empty($data['make']) ? $data['make'] : (!empty($data['otherMake']) ? $data['otherMake'] : ''),
        'vehicle_model' => $data['vehicle-model'] ?? '',
        'vehicle_year' => !empty($data['year']) ? $data['year'] : ($data['otherMakeYear'] ?? ''),
        'current_carrier' => $data['current_carrier'] ?? '',
        'currently_insured' => $data['currentlyinsured'] ?? '',
        'employment_status' => $data['employment-status'] ?? '',
        'city' => $data['shippingCity'] ?? '',
    ];

    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'motor-warranty', $productFields);

    // Log to internal system
    $leadUpdateData = [
        'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
        'phone1' => $data['phone'],
        'warranty_payload' => json_encode($webhookResult['payload'], JSON_UNESCAPED_UNICODE),
        'warranty_response' => $webhookResult['response'],
        'warranty_preferredtimeofcall' => $warrantyPreferredtimeofcall,
        'triggerWarrantyapi' => $triggerWarrantyApi
    ];

    $leadUpdateCurl = curl_init();
    curl_setopt_array($leadUpdateCurl, [
        CURLOPT_URL => 'https://quoterocket.co.za/leads-import/main/updateData',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($leadUpdateData),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
            'Access-Control-Allow-Origin: *',
        ],
    ]);
    $LeadUpdateResponse = curl_exec($leadUpdateCurl);
    curl_close($leadUpdateCurl);

    if ($webhookResult['success']) {
        $successResponse = [
            "response" => "OK",
            "code" => 0,
            "status_message" => "Warranty lead submitted successfully"
        ];
        echo json_encode($successResponse);
    } else {
        echo json_encode(["status" => "Error", "code" => -1]);
    }
    die();
}

