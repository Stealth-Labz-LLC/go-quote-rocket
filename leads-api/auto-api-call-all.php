<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET POST");
session_start();
require_once __DIR__ . '/webhook-helper.php';

$requestData = !empty($_REQUEST) ? $_REQUEST : '';
$triggerTrackApi = 0;
$triggerWarrantyApi = 0;

// Get the current date and time
$currentDateTime = new DateTime();
$updateTime = $currentDateTime->format('Y-m-d H:i:s');
$preferredtimeofcall = $currentDateTime->format('Y-m-d H:i:s');

// new code
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

$affilates_params = array(
    'aff_id' => !empty($data['aff_id']) ? $data['aff_id'] : 'N/A',
    'offer_id' => !empty($data['offer_id']) ? $data['offer_id'] : 'N/A',
    'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
    'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : 'N/A',
    'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A'
);
$data['otherMakeYear'] = !empty($data['otherYears']) ? $data['otherYears'] : '0000';

$base_url = $_SERVER['HTTP_REFERER'] . dirname($_SERVER['REQUEST_URI']) . '/?aff_id=' . $affilates_params['aff_id'] . '&offer_id=' . $affilates_params['offer_id'] . '&aff_sub=' . $affilates_params['aff_sub'] . '&aff_sub2=' . $affilates_params['aff_sub2'] . '&aff_sub3=' . $affilates_params['aff_sub3'];

if (!empty($requestData) && $requestData['insuranceApi'] === 'Yes' && $requestData['trackApi'] === 'Yes' && $requestData['warrantApi'] === 'Yes') {
    $insuranceApiResult = insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall);
    $trackApiResult = trackApiCall($data, $base_url, $updateTime, $triggerTrackApi, $trackPreferredtimeofcall);
    $warrantApiResult = warrantyApiCall($data, $base_url, $updateTime, $triggerWarrantyApi, $warrantyPreferredtimeofcall);
} else if (!empty($requestData) && $requestData['insuranceApi'] === 'Yes' && $requestData['trackApi'] === 'Yes') {
    $insuranceApiResult = insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall);
    $trackApiResult = trackApiCall($data, $base_url, $updateTime, $triggerTrackApi, $trackPreferredtimeofcall);
} else if (!empty($requestData) && $requestData['insuranceApi'] === 'Yes' && $requestData['warrantApi'] === 'Yes') {
    $insuranceApiResult = insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall);
    $warrantApiResult = warrantyApiCall($data, $base_url, $updateTime, $triggerWarrantyApi, $warrantyPreferredtimeofcall);
} else if (!empty($requestData) && $requestData['trackApi'] === 'Yes') {
    $trackApiResult = trackApiCall($data, $base_url, $updateTime, $triggerTrackApi, $trackPreferredtimeofcall);
} else if (!empty($requestData) && $requestData['warrantApi'] === 'Yes') {
    $warrantApiResult = warrantyApiCall($data, $base_url, $updateTime, $triggerWarrantyApi, $warrantyPreferredtimeofcall);
} else {
    $insuranceApiResult = insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall);
}

function insuranceApiCall($data, $base_url, $updateTime, $triggerTrackApi, $preferredtimeofcall)
{
    // Product-specific fields for notes
    $productFields = [
        'vehicle_make' => !empty($data['make']) ? $data['make'] : (!empty($data['otherMake']) ? $data['otherMake'] : ''),
        'vehicle_model' => $data['vehicle-model'] ?? '',
        'vehicle_year' => !empty($data['year']) ? $data['year'] : ($data['otherMakeYear'] ?? ''),
        'mileage' => $data['mileage'] ?? '',
        'current_carrier' => $data['current_carrier'] ?? '',
        'vehicle_used_as' => $data['vehicle_used_as'] ?? '',
        'currently_insured' => $data['currentlyinsured'] ?? '',
        'employment_status' => $data['employment-status'] ?? '',
        'income' => $data['income'] ?? '',
    ];

    // Add base_url to data for webhook
    $data['optinurl'] = $base_url;

    // Send to webhook
    $webhookResult = sendToWebhook($data, 'car-insurance', $productFields);

    if ($webhookResult['success']) {
        $leadPayload = [
            'token' => 'm-f7fd694964k8b165ffeb3afc65eb27a4',
            'campid' => 'CAR-INSURANCE',
            'funnel_id' => !empty($data['funnelId']) ? $data['funnelId'] : 'N/A',
            'sid' => !empty($data['aff_id']) ? $data['aff_id'] : 'N/A',
            'api_payload' => json_encode($webhookResult['payload']),
            'api_response' => $webhookResult['response'],
            'city' => !empty($data['shippingCity']) ? $data['shippingCity'] : 'N/A',
            'firstname' => $data['given-name'],
            'lastname' => $data['family-name'],
            'phone1' => $data['phone'],
            'optinurl' => $base_url,
            'optindate' => $updateTime,
            'currentinsurer' => "Auto and General",
            'vehiclemake' => !empty($data['make']) ? $data['make'] : ($data['otherMake'] ?? ''),
            'vehiclemodel' => !empty($data['vehicle-model']) ? $data['vehicle-model'] : 'N/A',
            'vehicleyear' => !empty($data['year']) ? $data['year'] : ($data['otherMakeYear'] ?? ''),
            'mileage' => !empty($data['mileage']) ? $data['mileage'] : 'null',
            'currentcarrier' => !empty($data['current_carrier']) ? $data['current_carrier'] : 'N/A',
            'currentlyinsured' => !empty($data['currentlyinsured']) ? $data['currentlyinsured'] : 'N/A',
            'employmentstatus' => !empty($data['employment-status']) ? $data['employment-status'] : 'N/A',
            'income' => !empty($data['income']) ? $data['income'] : 'null',
            'acceptterms' => 'true',
            'aff_sub' => !empty($data['aff_sub']) ? $data['aff_sub'] : 'N/A',
            'aff_sub2' => !empty($data['aff_sub2']) ? $data['aff_sub2'] : 'N/A',
            'aff_sub3' => !empty($data['aff_sub3']) ? $data['aff_sub3'] : 'N/A',
            'offer_id' => !empty($data['offer_id']) ? $data['offer_id'] : 'N/A',
            'ins_preferredtimeofcall' => $preferredtimeofcall,
            'triggerTrackapi' => $triggerTrackApi
        ];

        $leadCurl = curl_init();
        curl_setopt_array($leadCurl, [
            CURLOPT_URL => 'https://quoterocket.co.za/leads-import/addData',
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
            "status_message" => "Failed to submit lead"
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
        CURLOPT_URL => 'https://quoterocket.co.za/leads-import/updateData',
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

    return $webhookResult['success'];
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
        'warranty_payload' => json_encode($webhookResult['payload']),
        'warranty_response' => $webhookResult['response'],
        'warranty_preferredtimeofcall' => $warrantyPreferredtimeofcall,
        'triggerWarrantyapi' => $triggerWarrantyApi
    ];

    $leadUpdateCurl = curl_init();
    curl_setopt_array($leadUpdateCurl, [
        CURLOPT_URL => 'https://quoterocket.co.za/leads-import/updateData',
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

    return $webhookResult['success'];
}
