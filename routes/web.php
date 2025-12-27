<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Product Pages - Insurance
Route::get('/car-insurance', [PageController::class, 'carInsurance'])->name('car-insurance');
Route::get('/life-insurance', [PageController::class, 'lifeInsurance'])->name('life-insurance');
Route::get('/legal-insurance', [PageController::class, 'legalInsurance'])->name('legal-insurance');
Route::get('/pet-insurance', [PageController::class, 'petInsurance'])->name('pet-insurance');
Route::get('/business-insurance', [PageController::class, 'businessInsurance'])->name('business-insurance');

// Product Pages - Medical
Route::get('/medical-insurance', [PageController::class, 'medicalInsurance'])->name('medical-insurance');
Route::get('/funeral-cover', [PageController::class, 'funeralCover'])->name('funeral-cover');

// Product Pages - Finance
Route::get('/personal-loans', [PageController::class, 'personalLoans'])->name('personal-loans');
Route::get('/debt-relief', [PageController::class, 'debtRelief'])->name('debt-relief');

// Product Pages - Automotive
Route::get('/motor-warranty', [PageController::class, 'motorWarranty'])->name('motor-warranty');
Route::get('/vehicle-tracker', [PageController::class, 'vehicleTracker'])->name('vehicle-tracker');

// Static Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/thank-you', [PageController::class, 'thankYou'])->name('thank-you');

// Lead Submission API
Route::post('/api/leads/submit', [LeadController::class, 'submit'])->name('leads.submit');
Route::post('/contact/send', [PageController::class, 'sendContact'])->name('contact.send');
