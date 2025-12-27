<?php

namespace App\Http\Controllers;

use App\Services\LeadService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    protected LeadService $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    /**
     * Submit a lead to the central endpoint.
     */
    public function submit(Request $request): JsonResponse
    {
        // Base validation rules (required for all products)
        $baseRules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'product_type' => 'required|string',
            'consent' => 'required|accepted',
        ];

        // Optional fields
        $optionalRules = [
            'state' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:20',
            'utm_campaign' => 'nullable|string|max:255',
            'aff_sub' => 'nullable|string|max:255',
            'aff_sub2' => 'nullable|string|max:255',
            'aff_sub3' => 'nullable|string|max:255',
            'funnel_id' => 'nullable|string|max:100',
        ];

        // Product-specific metadata rules
        $metadataRules = [
            // Car Insurance
            'vehicle_make' => 'nullable|string|max:100',
            'vehicle_model' => 'nullable|string|max:100',
            'vehicle_year' => 'nullable|string|max:10',
            'currently_insured' => 'nullable|string|max:10',
            'employment_status' => 'nullable|string|max:50',
            'income_bracket' => 'nullable|string|max:50',

            // Life/Medical Insurance
            'age' => 'nullable|string|max:20',
            'age_range' => 'nullable|string|max:50',

            // Pet Insurance
            'pet_type' => 'nullable|string|max:50',
            'pet_age' => 'nullable|string|max:20',
            'number_of_pets' => 'nullable|string|max:10',

            // Business Insurance
            'business_type' => 'nullable|string|max:100',
            'number_of_employees' => 'nullable|string|max:50',

            // Loans/Debt
            'loan_amount' => 'nullable|string|max:50',
            'debt_amount' => 'nullable|string|max:50',
            'loan_purpose' => 'nullable|string|max:100',
        ];

        $validator = Validator::make(
            $request->all(),
            array_merge($baseRules, $optionalRules, $metadataRules)
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'code' => -1,
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $productType = $validated['product_type'];

        // Build base data
        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'url' => $request->headers->get('referer') ?? url()->current(),
            'state' => $validated['state'] ?? null,
            'city' => $validated['city'] ?? null,
            'zip_code' => $validated['zip_code'] ?? null,
            'utm_campaign' => $validated['utm_campaign'] ?? null,
            'lead_source' => 'goquoterocket.com',
        ];

        // Build metadata based on product type
        $metadata = $this->buildMetadata($productType, $validated);

        // Submit to lead service
        $result = $this->leadService->submit($data, $productType, $metadata);

        if ($result['success']) {
            return response()->json([
                'success' => true,
                'code' => 1,
                'message' => 'Lead submitted successfully',
                'response' => $result['response'],
            ]);
        }

        return response()->json([
            'success' => false,
            'code' => -2,
            'message' => 'Failed to submit lead',
            'response' => $result['response'],
        ], 500);
    }

    /**
     * Build metadata array based on product type.
     */
    protected function buildMetadata(string $productType, array $data): array
    {
        $metadata = [
            'funnel_id' => $data['funnel_id'] ?? null,
            'aff_sub' => $data['aff_sub'] ?? null,
            'aff_sub2' => $data['aff_sub2'] ?? null,
            'aff_sub3' => $data['aff_sub3'] ?? null,
        ];

        switch ($productType) {
            case 'car_insurance':
                $metadata = array_merge($metadata, [
                    'vehicle_make' => $data['vehicle_make'] ?? null,
                    'vehicle_model' => $data['vehicle_model'] ?? null,
                    'vehicle_year' => $data['vehicle_year'] ?? null,
                    'currently_insured' => $data['currently_insured'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;

            case 'life_insurance':
                $metadata = array_merge($metadata, [
                    'age' => $data['age'] ?? null,
                    'age_range' => $data['age_range'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;

            case 'medical_insurance':
                $metadata = array_merge($metadata, [
                    'age' => $data['age'] ?? null,
                    'age_range' => $data['age_range'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;

            case 'pet_insurance':
                $metadata = array_merge($metadata, [
                    'pet_type' => $data['pet_type'] ?? null,
                    'pet_age' => $data['pet_age'] ?? null,
                    'number_of_pets' => $data['number_of_pets'] ?? null,
                ]);
                break;

            case 'business_insurance':
                $metadata = array_merge($metadata, [
                    'business_type' => $data['business_type'] ?? null,
                    'number_of_employees' => $data['number_of_employees'] ?? null,
                ]);
                break;

            case 'personal_loans':
                $metadata = array_merge($metadata, [
                    'loan_amount' => $data['loan_amount'] ?? null,
                    'loan_purpose' => $data['loan_purpose'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;

            case 'debt_relief':
                $metadata = array_merge($metadata, [
                    'debt_amount' => $data['debt_amount'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;

            case 'motor_warranty':
            case 'vehicle_tracker':
                $metadata = array_merge($metadata, [
                    'vehicle_make' => $data['vehicle_make'] ?? null,
                    'vehicle_model' => $data['vehicle_model'] ?? null,
                    'vehicle_year' => $data['vehicle_year'] ?? null,
                ]);
                break;

            case 'legal_insurance':
            case 'funeral_cover':
                $metadata = array_merge($metadata, [
                    'age' => $data['age'] ?? null,
                    'employment_status' => $data['employment_status'] ?? null,
                    'income_bracket' => $data['income_bracket'] ?? null,
                ]);
                break;
        }

        // Remove null values
        return array_filter($metadata, fn($value) => $value !== null);
    }
}
