# Post-Launch Checklist

**Run this checklist after every funnel or organic page goes live.** This is the standard process for auditing, hardening, and packaging GoQuoteRocket as a sellable asset.

> **When to use:** After initial development is complete and pages are live. Every vertical and organic page should go through this before being considered "done."

---

## Phase 1: Functional Audit

### 1.1 Test Funnel System (Subdomain Flow)

**For each vertical (auto, life, medicare, creditcard):**

- [ ] Load landing page at `{vertical}.goquoterocket.com/`
- [ ] Verify hero, benefits, testimonials render
- [ ] Click CTA → redirects to `/flow`
- [ ] Complete FunnelEngine.js questionnaire end-to-end
- [ ] Verify form submission works (check network tab for POST)
- [ ] Confirm redirect to `/owl` (offer wall)
- [ ] Verify carrier cards display with correct eligibility filtering
- [ ] Test on mobile viewport (320px, 768px breakpoints)

### 1.2 Test Organic Pages (Root PHP Files)

**For each organic page:**

| Page | URL | Form Type |
|------|-----|-----------|
| Homepage | `goquoterocket.com/` | Vertical selector |
| Car Insurance | `goquoterocket.com/car-insurance.php` | Inline form |
| Life Insurance | `goquoterocket.com/life-insurance.php` | Inline form |
| Medical Insurance | `goquoterocket.com/medical-insurance.php` | Inline form |
| Pet Insurance | `goquoterocket.com/pet-insurance.php` | Inline form |
| Funeral Cover | `goquoterocket.com/funeral-cover.php` | Inline form |
| Debt Relief | `goquoterocket.com/debt-relief.php` | Inline form |
| Business Insurance | `goquoterocket.com/business-insurance.php` | Inline form |
| Vehicle Tracker | `goquoterocket.com/vehicle-tracker.php` | Inline form |
| Motor Warranty | `goquoterocket.com/motor-warranty.php` | Inline form |
| Personal Loans | `goquoterocket.com/personal-loans.php` | Inline form |

**For each page:**
- [ ] Page loads without PHP errors
- [ ] All sections render (hero, how-it-works, FAQ, testimonials)
- [ ] Form validation works (required fields)
- [ ] Form submission succeeds (AJAX to `leads-api/*.php`)
- [ ] Redirect to `thank-you.php` on success
- [ ] Schema.org JSON-LD is present and valid

### 1.3 Debug Submission Errors

- [ ] Check browser console for JS errors
- [ ] Verify API endpoint returns 200
- [ ] Check server logs for PHP errors (`/logs/` directory)
- [ ] Validate webhook receives payload (StealthLabz dashboard)
- [ ] Confirm all required fields are captured

### 1.4 Verify Tracking

- [ ] GTM container installed in `<head>` AND `<body>` (noscript)
- [ ] GTM ID matches config: `GTM-WJCXPHPK`
- [ ] DataLayer events firing:
  - `funnel_start` - user begins questionnaire
  - `funnel_step` - each step progression
  - `generate_lead` - successful submission
  - `form_error` - validation failures
- [ ] Affiliate params captured:
  - `aff_id` - affiliate ID
  - `aff_sub` - sub-affiliate (default: `0022`)
  - `aff_sub2` - secondary sub
  - `aff_sub3` - source (default: `organic`)
  - `funnelId` - vertical identifier

---

## Phase 2: UI/UX Cleanup

### 2.1 Header

- [ ] Logo links to homepage
- [ ] Navigation shows relevant insurance types
- [ ] Mobile hamburger menu works
- [ ] Dropdown menus function on hover/click
- [ ] "Get Quote" CTA button prominent
- [ ] Sticky header on scroll (desktop)

### 2.2 Footer

- [ ] Legal links present (Privacy, Terms, About, Contact)
- [ ] Links open in new tab (`target="_blank"`)
- [ ] Logo and company info correct
- [ ] Social media links work (if present)
- [ ] Partner logos displayed
- [ ] Newsletter signup works (if present)

### 2.3 Trust Elements

- [ ] Star ratings visible (4.8/5, 2000+ reviews)
- [ ] Feefo logo displayed
- [ ] Provider logos scroll/display
- [ ] Testimonials carousel works
- [ ] "100% Secure Form" badge on forms
- [ ] "No Commitment Required" messaging

### 2.4 Legal Pages

| Page | File | Status |
|------|------|--------|
| About | `about.php` / `views/legal/about.php` | - [ ] Renders |
| Contact | `contact.php` / `views/legal/contact.php` | - [ ] Renders |
| Privacy | `privacy.php` / `views/legal/privacy.php` | - [ ] Renders |
| Terms | `terms.php` / `views/legal/terms.php` | - [ ] Renders |
| Thank You | `thank-you.php` | - [ ] Renders |

---

## Phase 3: Code Organization

### 3.1 Configuration Audit

**Files to verify:**

| File | Purpose | Status |
|------|---------|--------|
| `config/environment.php` | Environment detection | - [ ] Correct |
| `config/integrations.php` | Webhook IDs | - [ ] No placeholders |
| `config/tracking.php` | GTM IDs | - [ ] Configured |
| `config/brands/goquoterocket.php` | Brand config | - [ ] Complete |
| `config/verticals/*.php` | Vertical configs | - [ ] All complete |

**Checklist:**
- [ ] All hardcoded values moved to config files
- [ ] No placeholder webhook IDs (search for `WEBHOOK-ID-HERE`)
- [ ] Environment detection working (local/staging/prod)
- [ ] Brand config complete (logo, colors, contact, legal)
- [ ] HTTPS enforced in production

### 3.2 Security Check

- [ ] Input sanitization on all POST data
- [ ] Phone validation blocks invalid formats
- [ ] Email validation present
- [ ] Terms checkbox required before submission
- [ ] No secrets in git history (check `config/secrets.php`)
- [ ] `.htaccess` security headers present
- [ ] Error display disabled in production (`DEBUG_MODE = false`)

### 3.3 File Structure Audit

```
goquoterocket/
├── .claude/docs/           # Claude Code documentation (you are here)
├── .github/workflows/      # CI/CD pipelines
├── api/                    # Funnel API endpoints
│   └── submit.php
├── app/                    # MVC application code
│   ├── Controllers/
│   ├── Core/
│   ├── Models/
│   └── Services/
├── cdn/                    # Static assets
│   ├── css/
│   ├── js/
│   └── images/
├── config/                 # All configuration
│   ├── brands/
│   ├── verticals/
│   ├── environment.php
│   ├── integrations.php
│   └── tracking.php
├── docs/                   # Technical documentation
├── leads-api/              # Organic page API endpoints
├── logger/                 # Lead logging service
├── storage/                # Runtime data (gitignored)
│   ├── leads/
│   └── logs/
├── views/                  # Templates and components
├── *.php                   # Root organic pages
└── public/                 # Entry points
    ├── index.php
    └── funnel.php
```

### 3.4 CSS Audit

- [ ] All used classes are defined
- [ ] No conflicting styles between organic and funnel pages
- [ ] Design tokens in use (`css/core/tokens.css`)
- [ ] Mobile responsive (test 320px, 768px, 1024px)
- [ ] No broken image references

---

## Phase 4: Production Hardening

### 4.1 Lead Safety Net

Ensure leads are backed up before webhook transmission:

**Current Implementation:**
```php
// Logger service captures all leads
$.ajax({
    url: 'https://goquoterocket.com/logger/logger.php',
    method: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(formDataObj),
    ...
});
```

**Verify:**
- [ ] Logger endpoint accessible
- [ ] Leads stored with timestamp
- [ ] Webhook status tracked
- [ ] Failed leads retrievable

### 4.2 Error Handling

- [ ] Graceful failure on webhook errors (user sees success)
- [ ] Error overlay displays user-friendly message
- [ ] Errors logged for debugging
- [ ] Lead data preserved regardless of webhook status

### 4.3 Logging

- [ ] Info logs for successful operations
- [ ] Error logs with full context
- [ ] Log files gitignored
- [ ] Log rotation configured (if applicable)

### 4.4 Update .gitignore

Verify these entries exist:
```gitignore
# Storage (leads and logs)
storage/leads/*
storage/logs/*
!storage/leads/.gitkeep
!storage/logs/.gitkeep

# Environment
.env
config/secrets.php

# IDE
.vscode/
.idea/

# Dependencies
vendor/
node_modules/
```

---

## Phase 5: Documentation Package

### 5.1 Create/Update PRODUCT.md

Executive summary for investors/buyers:
- [ ] What it does (1 paragraph)
- [ ] Two systems explained (funnel + organic)
- [ ] Tech stack & dependencies
- [ ] Current status (MVP, beta, production)
- [ ] Feature checklist (done vs. planned)
- [ ] Revenue model
- [ ] Quick start guide
- [ ] Key metrics

### 5.2 Create/Update Technical Docs

| Document | Location | Status |
|----------|----------|--------|
| Architecture | `docs/ARCHITECTURE.md` | - [ ] Current |
| Configuration | `docs/CONFIGURATION.md` | - [ ] Current |
| Verticals | `docs/VERTICALS.md` | - [ ] Current |
| API | `docs/API.md` | - [ ] Current |
| Frontend | `docs/FRONTEND.md` | - [ ] Current |
| Deployment | `docs/DEPLOYMENT.md` | - [ ] Current |
| Development | `docs/DEVELOPMENT.md` | - [ ] Current |
| Audit | `docs/AUDIT.md` | - [ ] Current |
| **Organic Pages** | `.claude/docs/ORGANIC-PAGES.md` | - [ ] Created |
| **User Flows** | `.claude/docs/USER-FLOWS.md` | - [ ] Created |
| **Post-Launch** | `.claude/docs/POST-LAUNCH-CHECKLIST.md` | - [ ] Created |
| **Product** | `.claude/docs/PRODUCT.md` | - [ ] Created |

### 5.3 Handoff Checklist

Document for new owner/developer:
- [ ] Configuration steps documented
- [ ] Brand customization guide complete
- [ ] Deployment process documented
- [ ] Monitoring locations listed
- [ ] Support contacts available
- [ ] Webhook setup instructions

---

## Phase 6: Lead Routing Verification

### 6.1 StealthLabz Integration

**Webhook IDs by Vertical:**

| Vertical | Webhook ID | Status |
|----------|------------|--------|
| Auto | `c10ebcce-f22e-4e48-a633-e7de9529f46c` | - [ ] Verified |
| Life | `{REAL-ID}` | - [ ] Configured |
| Medicare | `{REAL-ID}` | - [ ] Configured |
| Credit Card | `{REAL-ID}` | - [ ] Configured |

**Test each:**
- [ ] Submit test lead
- [ ] Verify appears in StealthLabz dashboard
- [ ] Check field mapping is correct

### 6.2 Waypoint Integration

- [ ] Endpoint configured: `https://www.waypointleadflow.com/api/go_auto`
- [ ] Field mapping verified
- [ ] Test submission successful

### 6.3 Organic Page APIs

| API Endpoint | Used By | Status |
|--------------|---------|--------|
| `leads-api/auto-api-call.php` | car-insurance.php | - [ ] Working |
| `leads-api/life-api-call.php` | life-insurance.php | - [ ] Working |
| `leads-api/track-api-call.php` | vehicle tracker upsell | - [ ] Working |

---

## Phase 7: SEO Verification

### 7.1 Schema.org Markup

Each organic page should have FAQPage JSON-LD:

```html
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [...]
}
</script>
```

**Verify:**
- [ ] car-insurance.php - FAQPage schema
- [ ] life-insurance.php - FAQPage schema
- [ ] medical-insurance.php - FAQPage schema
- [ ] All other organic pages

### 7.2 Meta Tags

Each page should have:
- [ ] Unique `<title>` tag
- [ ] Unique `<meta name="description">`
- [ ] Canonical URL (if applicable)
- [ ] Open Graph tags (if social sharing needed)

### 7.3 Internal Linking

- [ ] Cross-links between related pages (life → funeral, car → tracker)
- [ ] FAQ answers link to relevant pages
- [ ] All internal links work (no 404s)

---

## Phase 8: Git Hygiene

### 8.1 Commit Structure

```bash
# Feature work
feat: Add lead backup storage system

# Bug fixes
fix: Resolve form submission error on mobile

# Cleanup
refactor: Simplify header navigation

# Documentation
docs: Add investor-ready product documentation

# Configuration
config: Add life insurance webhook ID
```

### 8.2 Branch Strategy

| Branch | Purpose | Deploys To |
|--------|---------|------------|
| `main` | Production | `goquoterocket.com/` |
| `orchid_dev` | Staging/Development | `goquoterocket.com/staging/` |

### 8.3 Pre-Push Checklist

```bash
git status                    # Check for uncommitted changes
git diff                      # Review changes
git add .                     # Stage changes
git commit -m "type: message" # Commit with conventional format
git push origin branch_name   # Push to remote
```

---

## Quick Reference: Organic Pages Inventory

| Page | File | Funnel ID | API Endpoint |
|------|------|-----------|--------------|
| Homepage | `index.php` | - | - |
| Car Insurance | `car-insurance.php` | `Car` | `leads-api/auto-api-call.php` |
| Life Insurance | `life-insurance.php` | `Life` | `leads-api/life-api-call.php` |
| Medical Insurance | `medical-insurance.php` | `Medical` | TBD |
| Pet Insurance | `pet-insurance.php` | `Pet` | TBD |
| Funeral Cover | `funeral-cover.php` | `Funeral` | TBD |
| Debt Relief | `debt-relief.php` | `Debt` | TBD |
| Business Insurance | `business-insurance.php` | `Business` | TBD |
| Vehicle Tracker | `vehicle-tracker.php` | `Tracker` | TBD |
| Motor Warranty | `motor-warranty.php` | `Warranty` | TBD |
| Personal Loans | `personal-loans.php` | `Loans` | TBD |

---

## Completion Criteria

A vertical/page is "packaged" when:

1. **Functional** - End-to-end flow works (form → API → redirect)
2. **Tracked** - GTM + dataLayer events firing
3. **Secure** - Input validation, error handling
4. **Resilient** - Leads backed up, errors logged
5. **Documented** - All docs current
6. **SEO Ready** - Schema markup, meta tags, internal links
7. **Clean** - No uncommitted changes, no placeholder configs

---

## Sign-Off

| Phase | Completed | Date | Initials |
|-------|-----------|------|----------|
| Phase 1: Functional Audit | [ ] | | |
| Phase 2: UI/UX Cleanup | [ ] | | |
| Phase 3: Code Organization | [ ] | | |
| Phase 4: Production Hardening | [ ] | | |
| Phase 5: Documentation Package | [ ] | | |
| Phase 6: Lead Routing Verification | [ ] | | |
| Phase 7: SEO Verification | [ ] | | |
| Phase 8: Git Hygiene | [ ] | | |

**Final Sign-Off:** _________________ Date: _________

---

*Playbook version: 1.0 | January 2026*
