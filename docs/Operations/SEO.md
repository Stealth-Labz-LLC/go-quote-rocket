# Go Quote Rocket - SEO

Technical SEO implementation details.

---

## Canonical Tags

All pages include canonical tags to prevent duplicate content issues from query parameters (`?aff_sub`, `?aff_sub2`, etc.).

**Implementation:** Added directly in each page's `<head>` section.

```html
<link rel="canonical" href="https://goquoterocket.com/page.php">
```

| Page | Canonical URL |
|------|---------------|
| index.php | `https://goquoterocket.com/` |
| car-insurance.php | `https://goquoterocket.com/car-insurance.php` |
| life-insurance.php | `https://goquoterocket.com/life-insurance.php` |
| medical-insurance.php | `https://goquoterocket.com/medical-insurance.php` |
| pet-insurance.php | `https://goquoterocket.com/pet-insurance.php` |
| funeral-cover.php | `https://goquoterocket.com/funeral-cover.php` |
| personal-loans.php | `https://goquoterocket.com/personal-loans.php` |
| debt-relief.php | `https://goquoterocket.com/debt-relief.php` |
| legal-insurance.php | `https://goquoterocket.com/legal-insurance.php` |
| business-insurance.php | `https://goquoterocket.com/business-insurance.php` |
| motor-warranty.php | `https://goquoterocket.com/motor-warranty.php` |
| vehicle-tracker.php | `https://goquoterocket.com/vehicle-tracker.php` |
| about.php | `https://goquoterocket.com/about.php` |
| contact.php | `https://goquoterocket.com/contact.php` |
| privacy.php | `https://goquoterocket.com/privacy.php` |
| terms.php | `https://goquoterocket.com/terms.php` |

---

## Schema.org Markup

### Organization Schema (index.php)

```json
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Go Quote Rocket",
    "url": "https://goquoterocket.com",
    "logo": "https://goquoterocket.com/images/logo.png",
    "description": "Compare insurance quotes from top US providers. Car, life, health, pet insurance and more.",
    "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "areaServed": "US"
    }
}
```

### FAQPage Schema (index.php)

Homepage includes FAQPage schema with 10 Q&A pairs about insurance comparison services.

---

## Semantic HTML

### H1 Tags

Inner pages use semantic `<h1>` tags for main headlines instead of styled `<p>` tags.

**CSS Reset (css/style.css):**
```css
h1.sec1-hdg,
h1.inner_sec1-hdg {
  margin: 0;
  font-size: inherit;
  font-weight: inherit;
}
```

**Pages updated:**
- medical-insurance.php
- life-insurance.php
- pet-insurance.php
- funeral-cover.php
- personal-loans.php
- debt-relief.php
- business-insurance.php
- motor-warranty.php
- vehicle-tracker.php
- legal-insurance.php

---

## robots.txt

**URL:** `/robots.txt`

```
User-agent: *

# Block conversion/utility pages
Disallow: /thank-you.php

# Block internal directories
Disallow: /lead-import/
Disallow: /lead-log/

# XML sitemap
Sitemap: https://goquoterocket.com/sitemap.xml
```

**Note:** privacy.php, terms.php, and contact.php are allowed (they appear in sitemap).

---

## Sitemap

**URL:** `/sitemap.xml`

Static XML sitemap including all public pages.

---

## Image Alt Tags

All meaningful images include descriptive alt text:

| Image | Alt Text |
|-------|----------|
| feefo-logo.png | Feefo Reviews |
| star.png | 5 Star Rating |
| contact-phn-icn.png | Phone Icon |
| contact-mail-icn.png | Email Icon |
| contact-loca-icn.png | Location Icon |

**Decorative images** (navigation arrows, lines) use empty alt="" per accessibility best practices.

---

## Campaign/Funnel Protection

Campaign directories are protected from indexing via:

1. **Meta tags** - `<meta name="robots" content="noindex, nofollow">` in all campaign PHP files
2. **robots.txt** - Disallow rules for campaign directories

---

## Inline CSS

Layout styles moved from inline to embedded `<style>` blocks:

- `offer-wall.php` - Header, footer, and CTA button styles

Remaining inline CSS is functional (GTM noscript, JS-controlled display toggles).

---

*SEO implementation completed January 2026.*
