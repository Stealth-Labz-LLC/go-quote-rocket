<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Get common data for all views (UTM params, etc.)
     */
    protected function getCommonData(Request $request): array
    {
        return [
            'utm_source' => $request->get('utm_source'),
            'utm_medium' => $request->get('utm_medium'),
            'utm_campaign' => $request->get('utm_campaign'),
            'aff_sub' => $request->get('aff_sub', '0022'),
            'aff_sub2' => $request->get('aff_sub2'),
            'aff_sub3' => $request->get('aff_sub3', 'organic'),
        ];
    }

    // Homepage
    public function home(Request $request)
    {
        return view('pages.home', $this->getCommonData($request));
    }

    // Product Pages - Insurance
    public function carInsurance(Request $request)
    {
        return view('pages.products.car-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Car', 'product_type' => 'car_insurance']
        ));
    }

    public function lifeInsurance(Request $request)
    {
        return view('pages.products.life-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Life', 'product_type' => 'life_insurance']
        ));
    }

    public function legalInsurance(Request $request)
    {
        return view('pages.products.legal-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Legal', 'product_type' => 'legal_insurance']
        ));
    }

    public function petInsurance(Request $request)
    {
        return view('pages.products.pet-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Pet', 'product_type' => 'pet_insurance']
        ));
    }

    public function businessInsurance(Request $request)
    {
        return view('pages.products.business-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Business', 'product_type' => 'business_insurance']
        ));
    }

    // Product Pages - Medical
    public function medicalInsurance(Request $request)
    {
        return view('pages.products.medical-insurance', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Medical', 'product_type' => 'medical_insurance']
        ));
    }

    public function funeralCover(Request $request)
    {
        return view('pages.products.funeral-cover', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Funeral', 'product_type' => 'funeral_cover']
        ));
    }

    // Product Pages - Finance
    public function personalLoans(Request $request)
    {
        return view('pages.products.personal-loans', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Loan', 'product_type' => 'personal_loans']
        ));
    }

    public function debtRelief(Request $request)
    {
        return view('pages.products.debt-relief', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Debt', 'product_type' => 'debt_relief']
        ));
    }

    // Product Pages - Automotive
    public function motorWarranty(Request $request)
    {
        return view('pages.products.motor-warranty', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Motor', 'product_type' => 'motor_warranty']
        ));
    }

    public function vehicleTracker(Request $request)
    {
        return view('pages.products.vehicle-tracker', array_merge(
            $this->getCommonData($request),
            ['funnel_id' => 'Tracker', 'product_type' => 'vehicle_tracker']
        ));
    }

    // Static Pages
    public function about(Request $request)
    {
        return view('pages.about', $this->getCommonData($request));
    }

    public function contact(Request $request)
    {
        return view('pages.contact', $this->getCommonData($request));
    }

    public function privacy(Request $request)
    {
        return view('pages.privacy', $this->getCommonData($request));
    }

    public function terms(Request $request)
    {
        return view('pages.terms', $this->getCommonData($request));
    }

    public function thankYou(Request $request)
    {
        return view('pages.thank-you', $this->getCommonData($request));
    }

    // Contact Form Handler
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Implement email sending or lead submission
        // For now, just redirect with success

        return redirect()->route('contact')->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
