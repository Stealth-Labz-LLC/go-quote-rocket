# Organic SEO Pages Documentation

This document describes the **organic/SEO landing page system** - the standalone PHP pages in the root directory designed to capture Google organic traffic.

> **Note:** This is separate from the subdomain funnel system documented in `docs/`. These are the content-rich pages at `goquoterocket.com/*.php`.

---

## Overview

The organic pages are **SEO-optimized landing pages** with:

- Rich educational content
- Schema.org structured data (FAQPage)
- Inline lead capture forms
- Internal cross-linking
- Provider logo carousels
- Customer testimonials

**Purpose:** Capture organic search traffic and convert visitors into leads.

---

## Page Inventory

### Homepage

| File | URL | Purpose |
|------|-----|---------|
| `index.php` | `goquoterocket.com/` | Vertical selector hub |

**Features:**
- Hero with vertical tabs (Car, Medical, Life, Debt)
- Provider logo carousel
- How-it-works section
- Trust indicators (reviews, ratings)
- FAQ section with Schema.org markup

### Insurance Product Pages

| File | URL | Funnel ID | API Endpoint |
|------|-----|-----------|--------------|
| `car-insurance.php` | `/car-insurance.php` | `Car` | `leads-api/auto-api-call.php` |
| `life-insurance.php` | `/life-insurance.php` | `Life` | `leads-api/life-api-call.php` |
| `medical-insurance.php` | `/medical-insurance.php` | `Medical` | TBD |
| `pet-insurance.php` | `/pet-insurance.php` | `Pet` | TBD |
| `funeral-cover.php` | `/funeral-cover.php` | `Funeral` | TBD |
| `business-insurance.php` | `/business-insurance.php` | `Business` | TBD |

### Financial Product Pages

| File | URL | Funnel ID | API Endpoint |
|------|-----|-----------|--------------|
| `debt-relief.php` | `/debt-relief.php` | `Debt` | TBD |
| `personal-loans.php` | `/personal-loans.php` | `Loans` | TBD |

### Vehicle Services Pages

| File | URL | Funnel ID | API Endpoint |
|------|-----|-----------|--------------|
| `vehicle-tracker.php` | `/vehicle-tracker.php` | `Tracker` | TBD |
| `motor-warranty.php` | `/motor-warranty.php` | `Warranty` | TBD |

### Legal & Utility Pages

| File | URL | Purpose |
|------|-----|---------|
| `about.php` | `/about.php` | Company information |
| `contact.php` | `/contact.php` | Contact form/info |
| `privacy.php` | `/privacy.php` | Privacy policy |
| `terms.php` | `/terms.php` | Terms of service |
| `thank-you.php` | `/thank-you.php` | Post-submission page |

---

## Page Architecture

### Standard Page Structure

Every organic product page follows this structure:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags (title, description) -->
    <!-- Preload assets -->
    <!-- CSS files -->
    <!-- Google Fonts -->
    <!-- Schema.org JSON-LD -->
    <!-- GTM script -->
</head>
<body class="inner_pg {product}_insurance">
    <!-- GTM noscript -->

    <?php include 'header.php'; ?>

    <!-- Hero Section with Form -->
    <div class="inner_sec1" id="choosePack">
        <!-- Rating badge -->
        <!-- Headline -->
        <!-- Subheadline -->
        <!-- Lead capture form -->
    </div>

    <!-- Provider Logos -->
    <div class="as-seen">...</div>

    <!-- How It Works -->
    <div class="inner_sec2">...</div>

    <!-- Product Types/Tabs -->
    <div class="inner_sec3">...</div>

    <!-- Why Choose Us -->
    <div class="why_choose">...</div>

    <!-- Benefits Grid -->
    <div class="inner_sec4">...</div>

    <!-- Testimonials -->
    <div class="sec3">...</div>

    <!-- FAQ Section -->
    <div class="sec7">...</div>

    <!-- CTA Strip -->
    <div class="blue_strip">...</div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
</body>
</html>
```

---

## Form Implementation

### Form Structure

Each page has an inline lead capture form:

```html
<form method="POST" name="insurance_api1">
    <!-- Hidden fields for tracking -->
    <input type="hidden" name="insuranceApi" value="Yes">
    <input type="hidden" name="aff_id" value="<?= $aff_id; ?>">
    <input type="hidden" name="offer_id" value="<?= $offer_id; ?>">
    <input type="hidden" name="aff_sub" value="<?= $aff_sub; ?>">
    <input type="hidden" name="aff_sub2" value="<?= $aff_sub2; ?>">
    <input type="hidden" name="aff_sub3" value="<?= $aff_sub3; ?>">
    <input type="hidden" name="funnelId" value="<?= $funnelId; ?>">

    <!-- Visible fields -->
    <input type="text" name="given-name" placeholder="First Name" class="required">
    <input type="text" name="family-name" placeholder="Surname" class="required">
    <input type="tel" name="phone" placeholder="Phone Number" class="required">
    <input type="email" name="email" placeholder="Email" class="required">

    <!-- Product-specific fields -->
    <select name="employment">...</select>
    <select name="monthly_income">...</select>
    <select name="make">...</select>

    <!-- Consent -->
    <input type="checkbox" name="consent" id="checkbox_terms" checked>
    <input type="hidden" name="consent_text" value="...">

    <button type="button" class="apiBtn">Get Started Today!</button>
</form>
```

### Form Fields by Page

#### Car Insurance (`car-insurance.php`)

| Field | Name | Type | Required |
|-------|------|------|----------|
| First Name | `given-name` | text | Yes |
| Surname | `family-name` | text | Yes |
| Phone | `phone` | tel | Yes |
| Email | `email` | email | Yes |
| Employment | `employment` | select | Yes |
| Monthly Income | `monthly_income` | select | Yes |
| Vehicle Make | `make` | select | Yes |
| Currently Insured | `currentlyinsured` | select | Yes |

#### Life Insurance (`life-insurance.php`)

| Field | Name | Type | Required |
|-------|------|------|----------|
| First Name | `given-name` | text | Yes |
| Surname | `family-name` | text | Yes |
| Phone | `phone` | tel | Yes |
| Email | `email` | email | Yes |
| Age | `age` | select | Yes |
| Employment | `employed` | select | Yes |
| Monthly Income | `income` | select | Yes |

---

## API Integration

### Form Submission Flow

```
User fills form
       ↓
Click "Get Started Today!"
       ↓
JavaScript validation
       ↓
AJAX POST to leads-api/*.php
       ↓
Lead sent to StealthLabz
       ↓
Lead logged to logger/logger.php
       ↓
Redirect to thank-you.php
```

### API Endpoints

| Page | API Endpoint | Method |
|------|--------------|--------|
| Car Insurance | `https://goquoterocket.com/leads-api/auto-api-call.php` | POST |
| Life Insurance | `https://goquoterocket.com/leads-api/life-api-call.php` | POST |
| Vehicle Tracker | `https://goquoterocket.com/leads-api/auto-api-call.php?trackApi=Yes` | POST |

### Logger Integration

All forms also send data to the logger for backup:

```javascript
$.ajax({
    url: 'https://goquoterocket.com/logger/logger.php',
    method: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(formDataObj),
    success: function(response) { ... },
    error: function(error) { ... }
});
```

---

## JavaScript Implementation

### Validation Functions

```javascript
// Phone validation (U.S. format)
function validateUSPhone(PhoneNumber) {
    const promptText = `Please enter a valid 10-digit U.S. phone number.`;

    // Length check
    if (PhoneNumber.length !== 10) {
        // Show error
    }
}

// Terms checkbox validation
function validateCheckbox() {
    const checkbox = document.getElementById('checkbox_terms');
    if (!checkbox.checked) {
        // Show error
    }
}
```

### API Call Function

```javascript
function insuranceApiCall(formData) {
    $('#loading-indicator').show();
    let queryStringValue = window.location.search;

    $.ajax({
        url: 'https://goquoterocket.com/leads-api/auto-api-call.php?' + formData,
        type: 'post',
        success: function(data) {
            let resultData = JSON.parse(data);

            if (resultData.code === 1) {
                // Success - redirect
                window.location.href = "https://goquoterocket.com/thank-you.php" + queryStringValue;
            } else {
                // Error - show overlay
                $('#error_handler_overlay').show();
                $('#error_handler_overlay p').text("Error message...");
            }
        },
        error: function(error) {
            $('#loading-indicator').hide();
            console.log(`Error ${error}`);
        }
    });
}
```

---

## SEO Implementation

### Schema.org FAQPage

Each product page includes FAQPage structured data:

```html
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What's the most affordable car insurance in the USA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Third-party insurance is generally the least expensive..."
            }
        },
        // More questions...
    ]
}
</script>
```

### Meta Tags

```html
<title>Affordable Car Insurance Quotes in the USA | Go Quote Rocket</title>
<meta name="description" content="Get competitive car insurance quotes in the USA with Go Quote Rocket. Compare options and save on affordable coverage for your vehicle today.">
```

### Internal Linking

FAQs and content link to related pages:

```html
<p>If you have a <a href="vehicle-tracker.php">GPS vehicle tracking device</a>
or an extended <a href="motor-warranty.php">motor warranty</a>,
these items can also impact your premium.</p>
```

---

## Tracking Implementation

### GTM Installation

Every page includes GTM in head:

```html
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WJCXPHPK');
</script>
```

And noscript in body:

```html
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJCXPHPK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
```

### Affiliate Parameters

Pages capture and pass affiliate parameters:

```php
$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Car";
```

These are passed to the API and preserved in query string redirects.

---

## Upsell Flow (Car Insurance)

The car insurance page includes a vehicle tracker upsell:

### Slide Flow

1. **Slide 1:** Main form (visible by default)
2. **Slide 2:** "Would you like a quote for a vehicle tracking device?" (Yes/No)
3. **Slide 3:** "Do you currently have a tracker installed?" (Yes/No)

### Upsell Logic

```javascript
$('#slide_2_no_btn, #slide_2_yes_btn').click(function() {
    isTrackApiRequired = $(this).text();
    $('#ban_slide_2').css('display', 'none');
    $('#ban_slide_3').css('display', 'block');
});

$('#slide_3_no_btn').click(function() {
    if (isTrackApiRequired === 'Yes') {
        trackApiCall(isTrackApiRequired);  // Submit tracker lead
    } else {
        window.location.href = "https://goquoterocket.com/thank-you.php";
    }
});
```

---

## CSS Classes

### Page-Specific Classes

Each page has a body class for styling:

```html
<body class="inner_pg car_insurance">
<body class="inner_pg life_insurance">
<body class="inner_pg medical_insurance">
```

### Common Section Classes

| Class | Purpose |
|-------|---------|
| `.inner_sec1` | Hero section with form |
| `.as-seen` | Provider logos carousel |
| `.inner_sec2` | How it works |
| `.inner_sec3` | Product type tabs |
| `.why_choose` | Why choose us section |
| `.inner_sec4` | Benefits grid |
| `.sec3` | Testimonials |
| `.sec7` | FAQ section |
| `.blue_strip` | CTA strip |

---

## Adding a New Organic Page

### Step 1: Copy Template

```bash
cp car-insurance.php new-product.php
```

### Step 2: Update Content

1. Change `<title>` and `<meta description>`
2. Update `$funnelId` variable
3. Modify form fields as needed
4. Update hero headline and subheadline
5. Update "How it works" section
6. Update product type tabs
7. Update benefits grid
8. Update FAQ content and Schema.org JSON-LD

### Step 3: Create API Endpoint (if needed)

```bash
cp leads-api/auto-api-call.php leads-api/newproduct-api-call.php
```

### Step 4: Update Form Action

```javascript
function newproductApiCall(formData) {
    $.ajax({
        url: 'https://goquoterocket.com/leads-api/newproduct-api-call.php?' + formData,
        // ...
    });
}
```

### Step 5: Test

1. Load page in browser
2. Fill form with test data
3. Verify submission succeeds
4. Check redirect to thank-you.php
5. Verify lead in StealthLabz dashboard

---

## Differences from Funnel System

| Aspect | Organic Pages | Funnel System |
|--------|---------------|---------------|
| **Location** | Root `*.php` files | `views/templates/` |
| **Routing** | Direct file access | Subdomain + Router |
| **Form Type** | Inline on page | Multi-step wizard |
| **JavaScript** | Page-specific inline | FunnelEngine.js |
| **API Endpoint** | `leads-api/*.php` | `/api/submit.php` |
| **Post-Submit** | `thank-you.php` | `/owl` or `/sow` |
| **Content** | SEO-rich | Conversion-focused |
| **Configuration** | Hardcoded in file | `config/verticals/*.php` |

---

## Maintenance Notes

### Common Updates

1. **Update FAQs** - Edit JSON-LD and accordion content
2. **Update providers** - Modify logo carousel
3. **Update testimonials** - Edit reviews section
4. **Update form fields** - Modify form HTML and validation JS
5. **Update pricing** - Edit benefits/pricing sections

### Files to Update Together

When updating a page, ensure consistency:

- Main page file (`car-insurance.php`)
- API endpoint (`leads-api/auto-api-call.php`)
- Thank you page (`thank-you.php`) if needed
- Header/footer if shared elements change

---

*Documentation version: 1.0 | January 2026*
