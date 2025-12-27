<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LeadService
{
    protected string $endpoint;

    public function __construct()
    {
        $this->endpoint = config('services.lead_api.url');
    }

    /**
     * Submit a lead to the central routing endpoint.
     *
     * @param array $data The lead data
     * @param string $productType The product type (e.g., 'car_insurance', 'life_insurance')
     * @param array $metadata Additional product-specific data
     * @return array Response from the API
     */
    public function submit(array $data, string $productType, array $metadata = []): array
    {
        $payload = $this->buildPayload($data, $productType, $metadata);

        try {
            $response = Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->post($this->endpoint, $payload);

            $result = [
                'success' => $response->successful(),
                'status_code' => $response->status(),
                'response' => $response->json(),
            ];

            if ($response->successful()) {
                Log::info('Lead submitted successfully', [
                    'product_type' => $productType,
                    'response' => $response->json(),
                ]);
            } else {
                Log::error('Lead submission failed', [
                    'product_type' => $productType,
                    'status_code' => $response->status(),
                    'response' => $response->body(),
                ]);
            }

            return $result;
        } catch (\Exception $e) {
            Log::error('Lead submission exception', [
                'product_type' => $productType,
                'error' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'status_code' => 500,
                'response' => ['error' => $e->getMessage()],
            ];
        }
    }

    /**
     * Build the payload for the lead API.
     */
    protected function buildPayload(array $data, string $productType, array $metadata): array
    {
        $payload = [
            // Required fields
            'url' => $data['url'] ?? url()->current(),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $this->formatPhoneE164($data['phone']),
            'email' => $data['email'],
            'country' => 'US',
            'consent' => true,

            // Recommended optional fields
            'state' => $data['state'] ?? null,
            'city' => $data['city'] ?? null,
            'zip_code' => $data['zip_code'] ?? null,
            'lead_source' => $data['lead_source'] ?? 'goquoterocket.com',
            'interest_tags' => [$productType],
            'preferred_contact' => $data['preferred_contact'] ?? 'both',
            'language' => 'en',
            'timezone' => $data['timezone'] ?? 'America/New_York',
            'signup_date' => now()->toIso8601String(),
            'utm_campaign' => $data['utm_campaign'] ?? null,

            // Compliance fields
            'consent_timestamp' => now()->toIso8601String(),
            'consent_source' => 'signup_form',
            'ip_address' => request()->ip(),
            'referrer' => request()->headers->get('referer'),

            // Product-specific metadata
            'metadata' => array_merge(['product_type' => $productType], $metadata),
        ];

        // Remove null values
        return array_filter($payload, fn($value) => $value !== null);
    }

    /**
     * Format phone number to E.164 format for US numbers.
     * Input: (555) 123-4567 or 555-123-4567 or 5551234567
     * Output: +15551234567
     */
    protected function formatPhoneE164(string $phone): string
    {
        // Remove all non-numeric characters
        $digits = preg_replace('/[^0-9]/', '', $phone);

        // If already has country code (11 digits starting with 1)
        if (strlen($digits) === 11 && str_starts_with($digits, '1')) {
            return '+' . $digits;
        }

        // If 10 digits, add US country code
        if (strlen($digits) === 10) {
            return '+1' . $digits;
        }

        // Return as-is with + prefix if already formatted
        if (str_starts_with($phone, '+')) {
            return $phone;
        }

        // Default: assume US and prepend +1
        return '+1' . $digits;
    }
}
