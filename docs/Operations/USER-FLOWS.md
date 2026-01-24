# User Flows Documentation

This document maps all user journeys through the GoQuoteRocket platform, covering both the subdomain funnel system and organic SEO pages.

---

## Traffic Sources & Entry Points

```
                         ┌─────────────────────────────────────────┐
                         │            TRAFFIC SOURCES              │
                         └─────────────────────────────────────────┘
                                           │
         ┌─────────────────────────────────┼─────────────────────────────────┐
         │                                 │                                 │
         ▼                                 ▼                                 ▼
┌─────────────────┐              ┌─────────────────┐              ┌─────────────────┐
│   PAID TRAFFIC  │              │ ORGANIC TRAFFIC │              │  DIRECT/REFER   │
│   (Affiliates)  │              │    (Google)     │              │    (Type-in)    │
└────────┬────────┘              └────────┬────────┘              └────────┬────────┘
         │                                 │                                 │
         ▼                                 ▼                                 ▼
┌─────────────────┐              ┌─────────────────┐              ┌─────────────────┐
│ FUNNEL SYSTEM   │              │  ORGANIC PAGES  │              │    HOMEPAGE     │
│ Subdomain flow  │              │  Root PHP files │              │   index.php     │
└─────────────────┘              └─────────────────┘              └─────────────────┘
```

---

## Flow 1: Subdomain Funnel (Paid/Affiliate Traffic)

**Entry Point:** `{vertical}.goquoterocket.com`

**Target:** High-conversion step-by-step wizard for qualified traffic

### Journey Map

```
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 1: LANDING PAGE                                                        │
│ URL: auto.goquoterocket.com/                                                │
│ File: views/templates/landing.php                                           │
├─────────────────────────────────────────────────────────────────────────────┤
│ • Hero with headline & value proposition                                    │
│ • Trust badges (reviews, secure form)                                       │
│ • Benefits list                                                             │
│ • Testimonials carousel                                                     │
│ • "Get Your Free Quote" CTA button                                          │
│ • ZIP code input (optional pre-qualifier)                                   │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Click CTA
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 2: QUESTIONNAIRE FLOW                                                  │
│ URL: auto.goquoterocket.com/flow                                            │
│ File: views/templates/flow.php + cdn/js/FunnelEngine.js                     │
├─────────────────────────────────────────────────────────────────────────────┤
│ FunnelEngine.js renders step-by-step questions:                             │
│                                                                             │
│ Q1: ZIP Code              → [Text input, 5 digits]                          │
│         ↓ (auto-advance on valid)                                           │
│ Q2: Currently Insured?    → [Yes / No buttons]                              │
│         ↓                                                                   │
│ Q3: Home Ownership?       → [Own / Rent buttons]                            │
│         ↓                                                                   │
│ Q4: Age Range             → [Dropdown: 18-24, 25-34, etc.]                  │
│         ↓                                                                   │
│ Q5: Vehicle Year          → [Number input]                                  │
│         ↓                                                                   │
│ Q6: First Name            → [Text input]                                    │
│         ↓                                                                   │
│ Q7: Email Address         → [Email input]                                   │
│                                                                             │
│ Features:                                                                   │
│ • Progress bar at top                                                       │
│ • Back button to revise                                                     │
│ • Progress saved to localStorage                                            │
│ • Auto-advance on valid input                                               │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Submit final step
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 3: FORM SUBMISSION                                                     │
│ Endpoint: /api/submit.php                                                   │
│ File: api/submit.php + app/Services/LeadService.php                         │
├─────────────────────────────────────────────────────────────────────────────┤
│ • Loading modal appears with rotating messages:                             │
│   - "Finding best rates in your area..."                                    │
│   - "Comparing quotes from top carriers..."                                 │
│   - "Almost done..."                                                        │
│                                                                             │
│ Backend process:                                                            │
│ 1. Validate vertical                                                        │
│ 2. Load vertical config                                                     │
│ 3. Apply field mapping                                                      │
│ 4. POST to StealthLabz webhook (JSON)                                       │
│ 5. POST to Waypoint endpoint (form-encoded)                                 │
│ 6. Return JSON response with redirect URL                                   │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Success response
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 4: OFFER WALL                                                          │
│ URL: auto.goquoterocket.com/owl                                             │
│ File: views/templates/offer-wall.php                                        │
├─────────────────────────────────────────────────────────────────────────────┤
│ • Multiple carrier cards displayed                                          │
│ • Carriers filtered by user eligibility:                                    │
│   - Age requirements                                                        │
│   - Homeowner status                                                        │
│   - Location (ZIP code)                                                     │
│ • Each card shows:                                                          │
│   - Carrier logo                                                            │
│   - Star rating                                                             │
│   - Key highlights                                                          │
│   - "Get Quote" CTA button                                                  │
│ • Cards sorted by priority (config-defined)                                 │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Click carrier CTA
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 5: CONVERSION                                                          │
│ Destination: Carrier/affiliate landing page                                 │
├─────────────────────────────────────────────────────────────────────────────┤
│ • User redirected to carrier site                                           │
│ • Affiliate parameters passed for attribution                               │
│ • Lead data already sent to buyers                                          │
│ • Tracking pixels fire for conversion                                       │
└─────────────────────────────────────────────────────────────────────────────┘
```

### Alternate Path: Single Offer

```
... (same steps 1-3) ...
                                    │
                                    │ Config routes to single offer
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 4B: SINGLE OFFER PAGE                                                  │
│ URL: auto.goquoterocket.com/sow                                             │
│ File: views/templates/single-offer.php                                      │
├─────────────────────────────────────────────────────────────────────────────┤
│ • One featured carrier prominently displayed                                │
│ • Used for specific campaigns/tests                                         │
│ • Simplified decision (no comparison)                                       │
└─────────────────────────────────────────────────────────────────────────────┘
```

---

## Flow 2: Organic SEO Pages (Google Traffic)

**Entry Point:** `goquoterocket.com/{product}.php`

**Target:** Educate and convert organic search visitors

### Journey Map

```
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 1: ORGANIC LANDING PAGE                                                │
│ URL: goquoterocket.com/car-insurance.php                                    │
│ File: car-insurance.php (root directory)                                    │
├─────────────────────────────────────────────────────────────────────────────┤
│ Page sections (scrollable):                                                 │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ HERO SECTION                                                            │ │
│ │ • Rating badge (4.8 stars, 2000+ reviews)                               │ │
│ │ • Main headline                                                         │ │
│ │ • Value proposition                                                     │ │
│ │ • INLINE FORM (all fields visible)                                      │ │
│ │   - First Name, Surname                                                 │ │
│ │   - Phone, Email                                                        │ │
│ │   - Employment, Income                                                  │ │
│ │   - Vehicle Make, Insurance Status                                      │ │
│ │   - Terms checkbox                                                      │ │
│ │   - "Get Started Today!" button                                         │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ PROVIDER LOGOS                                                          │ │
│ │ • Auto-scrolling carousel                                               │ │
│ │ • First for Women, Budget, King Price, etc.                             │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ HOW IT WORKS                                                            │ │
│ │ • Step 1: One Quick Form                                                │ │
│ │ • Step 2: Tailored Options                                              │ │
│ │ • Step 3: Trusted Experts                                               │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ PRODUCT TYPES (Tabbed content)                                          │ │
│ │ • Tab 1: Comprehensive Insurance                                        │ │
│ │ • Tab 2: Third Party Fire & Theft                                       │ │
│ │ • Tab 3: Third Party Only                                               │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ WHY CHOOSE US                                                           │ │
│ │ • Save Time, Save Money, Save Stress, Save Smart                        │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ COST EXAMPLES                                                           │ │
│ │ • VW Polo: R1,437/month                                                 │ │
│ │ • Toyota Corolla: R1,321/month                                          │ │
│ │ • etc.                                                                  │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ TESTIMONIALS                                                            │ │
│ │ • Carousel of customer reviews                                          │ │
│ │ • Photos, names, locations                                              │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ FAQ SECTION                                                             │ │
│ │ • Accordion-style Q&A                                                   │ │
│ │ • Schema.org FAQPage markup                                             │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ CTA STRIP                                                               │ │
│ │ • "Ready to get started?"                                               │ │
│ │ • "Get Quote Now" button                                                │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Fill form + click "Get Started Today!"
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 2: FORM VALIDATION                                                     │
│ (Client-side JavaScript)                                                    │
├─────────────────────────────────────────────────────────────────────────────┤
│ Validation checks:                                                          │
│ • Required fields not empty                                                 │
│ • Phone number format (0xx xxx xxxx)                                        │
│ • Phone number not starting with 086, 085, 080, 09, 27                      │
│ • Email format valid                                                        │
│ • Terms checkbox checked                                                    │
│                                                                             │
│ If errors:                                                                  │
│ • Show inline error messages                                                │
│ • Prevent submission                                                        │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Validation passes
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 3: FORM SUBMISSION                                                     │
│ Endpoint: leads-api/auto-api-call.php                                       │
├─────────────────────────────────────────────────────────────────────────────┤
│ • Loading indicator shows                                                   │
│ • AJAX POST to leads-api endpoint                                           │
│ • Lead sent to StealthLabz                                                  │
│ • Lead logged to logger/logger.php                                          │
│                                                                             │
│ Response handling:                                                          │
│ • code: 1 → Success, proceed to redirect                                    │
│ • code: 0 → Error, show error overlay                                       │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Success (code: 1)
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ STEP 4: THANK YOU PAGE                                                      │
│ URL: goquoterocket.com/thank-you.php                                        │
│ File: thank-you.php                                                         │
├─────────────────────────────────────────────────────────────────────────────┤
│ • Confirmation message                                                      │
│ • Next steps explanation                                                    │
│ • Additional offers (optional)                                              │
│ • Tracking pixels fire                                                      │
└─────────────────────────────────────────────────────────────────────────────┘
```

### Car Insurance Upsell Flow

```
... (after initial form submission) ...
                                    │
                                    │ Form submitted successfully
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ UPSELL SLIDE 2: Vehicle Tracker Interest                                    │
│ (Hidden by default, shown after main form)                                  │
├─────────────────────────────────────────────────────────────────────────────┤
│ "Would you like a free quote to install a vehicle tracking device?"         │
│                                                                             │
│ • "Instantly lower your monthly premium by installing a tracker"            │
│                                                                             │
│ [No]                              [Yes]                                     │
└─────────────────────────────────────────────────────────────────────────────┘
                    │                                   │
                    │ No                                │ Yes
                    ▼                                   ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│ UPSELL SLIDE 3: Current Tracker Status                                      │
├─────────────────────────────────────────────────────────────────────────────┤
│ "Do you currently have a vehicle tracker installed?"                        │
│                                                                             │
│ • "1 car is stolen every 9 minutes in the USA. Your vehicle is at risk!"    │
│                                                                             │
│ [No]                              [Yes]                                     │
└─────────────────────────────────────────────────────────────────────────────┘
         │                                              │
         │ No + wanted tracker                          │ Yes (already has)
         ▼                                              ▼
┌─────────────────────┐                    ┌─────────────────────┐
│ Submit tracker lead │                    │ Skip to thank-you   │
│ to track API        │                    │                     │
└──────────┬──────────┘                    └──────────┬──────────┘
           │                                          │
           └────────────────────┬─────────────────────┘
                                ▼
                    ┌─────────────────────┐
                    │   thank-you.php     │
                    └─────────────────────┘
```

---

## Flow 3: Homepage Journey

**Entry Point:** `goquoterocket.com/`

**Target:** Help visitors find the right product

### Journey Map

```
┌─────────────────────────────────────────────────────────────────────────────┐
│ HOMEPAGE                                                                    │
│ URL: goquoterocket.com/                                                     │
│ File: index.php                                                             │
├─────────────────────────────────────────────────────────────────────────────┤
│                                                                             │
│ ┌─────────────────────────────────────────────────────────────────────────┐ │
│ │ VERTICAL SELECTOR                                                       │ │
│ │                                                                         │ │
│ │ "Compare Car Insurance Quotes In 1 Minute and Save!"                    │ │
│ │                                                                         │ │
│ │  ┌─────┐  ┌─────────┐  ┌──────┐  ┌──────┐                               │ │
│ │  │ Car │  │ Medical │  │ Life │  │ Debt │                               │ │
│ │  └──┬──┘  └────┬────┘  └──┬───┘  └──┬───┘                               │ │
│ │     │          │          │         │                                   │ │
│ │     ▼          ▼          ▼         ▼                                   │ │
│ │  Changes headline & CTA link dynamically                                │ │
│ │                                                                         │ │
│ │  [Compare Quotes Now] ←── Links to selected product page                │ │
│ │                                                                         │ │
│ └─────────────────────────────────────────────────────────────────────────┘ │
│                                                                             │
│ • Provider logos carousel                                                   │
│ • "Why Go Quote Rocket Is The Best Choice"                                  │
│ • Testimonials                                                              │
│ • "How To Use Go Quote Rocket" (3 steps)                                    │
│ • Partner logos section                                                     │
│ • Product grid (11 products)                                                │
│ • FAQ section                                                               │
│ • CTA strip                                                                 │
│                                                                             │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    │ Click product or CTA
                                    ▼
                    ┌───────────────────────────────────┐
                    │ Redirects to appropriate page:    │
                    │ • car-insurance.php               │
                    │ • life-insurance.php              │
                    │ • medical-insurance.php           │
                    │ • debt-relief.php                 │
                    │ • (etc.)                          │
                    └───────────────────────────────────┘
```

---

## Data Flow Diagram

### Lead Data Journey

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                           USER INPUT                                        │
│   Form fields: name, phone, email, product-specific fields                  │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│                        CLIENT-SIDE VALIDATION                               │
│   JavaScript validates: required fields, phone format, email format         │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│                           FORM SERIALIZATION                                │
│   $('[name=form_name]').serialize() → query string                          │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                    ┌───────────────┴───────────────┐
                    │                               │
                    ▼                               ▼
┌─────────────────────────────┐     ┌─────────────────────────────┐
│      LEADS API ENDPOINT     │     │       LOGGER SERVICE        │
│  leads-api/*-api-call.php   │     │   logger/logger.php         │
│  (or api/submit.php)        │     │                             │
│                             │     │   Stores backup of lead     │
│  • Validates vertical       │     │   with timestamp            │
│  • Applies field mapping    │     │                             │
└──────────────┬──────────────┘     └─────────────────────────────┘
               │
               ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│                          LEAD DISTRIBUTION                                  │
├─────────────────────────────────┬───────────────────────────────────────────┤
│         STEALTHLABZ             │              WAYPOINT                     │
│                                 │                                           │
│  JSON POST to webhook URL       │  Form-encoded POST                        │
│  with webhook_id                │  to waypointleadflow.com                  │
│                                 │                                           │
│  Field mapping applied:         │  Field mapping applied:                   │
│  form_field → buyer_field       │  form_field → buyer_field                 │
└─────────────────────────────────┴───────────────────────────────────────────┘
                                    │
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│                           JSON RESPONSE                                     │
│   { success: true, redirect: "/owl" } or { success: true }                  │
└─────────────────────────────────────────────────────────────────────────────┘
                                    │
                                    ▼
┌─────────────────────────────────────────────────────────────────────────────┐
│                         CLIENT-SIDE REDIRECT                                │
│   window.location.href = redirect_url                                       │
│   (Funnel: /owl  |  Organic: thank-you.php)                                 │
└─────────────────────────────────────────────────────────────────────────────┘
```

---

## URL Mapping Reference

### Funnel System URLs

| Path | Controller | Template | Purpose |
|------|------------|----------|---------|
| `/` | LandingController | landing.php | Vertical landing |
| `/flow` | FlowController | flow.php | Questionnaire |
| `/owl` | OfferWallController | offer-wall.php | Multi-offer results |
| `/sow` | OfferWallController | single-offer.php | Single offer |

**Note:** These are relative to subdomain, e.g., `auto.goquoterocket.com/flow`

### Organic Page URLs

| URL | File | Purpose |
|-----|------|---------|
| `/` | index.php | Homepage |
| `/car-insurance.php` | car-insurance.php | Car insurance SEO page |
| `/life-insurance.php` | life-insurance.php | Life insurance SEO page |
| `/medical-insurance.php` | medical-insurance.php | Medical insurance SEO page |
| `/pet-insurance.php` | pet-insurance.php | Pet insurance SEO page |
| `/funeral-cover.php` | funeral-cover.php | Funeral cover SEO page |
| `/debt-relief.php` | debt-relief.php | Debt relief SEO page |
| `/business-insurance.php` | business-insurance.php | Business insurance SEO page |
| `/vehicle-tracker.php` | vehicle-tracker.php | Vehicle tracker SEO page |
| `/motor-warranty.php` | motor-warranty.php | Motor warranty SEO page |
| `/personal-loans.php` | personal-loans.php | Personal loans SEO page |
| `/about.php` | about.php | About page |
| `/contact.php` | contact.php | Contact page |
| `/privacy.php` | privacy.php | Privacy policy |
| `/terms.php` | terms.php | Terms of service |
| `/thank-you.php` | thank-you.php | Post-submission |

### API Endpoints

| Endpoint | Method | Purpose |
|----------|--------|---------|
| `/api/submit.php` | POST | Funnel form submission |
| `/leads-api/auto-api-call.php` | POST | Car insurance organic form |
| `/leads-api/life-api-call.php` | POST | Life insurance organic form |
| `/logger/logger.php` | POST | Lead backup logging |

---

## Session & State Management

### FunnelEngine.js (Funnel System)

```javascript
// Progress saved to localStorage
localStorage.setItem('funnel_progress', JSON.stringify({
    vertical: 'auto',
    currentStep: 3,
    answers: {
        zip_code: '12345',
        currently_insured: 'yes',
        home_ownership: 'own'
    }
}));

// Retrieved on page load to restore progress
const progress = JSON.parse(localStorage.getItem('funnel_progress'));
```

### Organic Pages

```javascript
// No persistent state
// Form data only exists during session
// Affiliate params passed via query string
```

---

## Error Handling Flows

### Validation Error (Client-Side)

```
User submits form
       ↓
Validation fails
       ↓
Show inline error message
       ↓
User corrects input
       ↓
Re-validate on change/blur
       ↓
Error clears when valid
```

### API Error (Server-Side)

```
Form submitted
       ↓
API returns error (code: 0)
       ↓
Error overlay appears:
"Unfortunately, we're unable to submit your information at this time.
Please check the information you provided..."
       ↓
User clicks X to close
       ↓
Form remains visible for correction
```

### Network Error

```
Form submitted
       ↓
AJAX request fails
       ↓
Loading indicator hidden
       ↓
Console logs error
       ↓
(User may retry)
```

---

*Documentation version: 1.0 | January 2026*
