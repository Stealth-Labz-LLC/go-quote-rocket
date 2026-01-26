# SEO Audit Report: goquoterocket

**Date:** January 26, 2026

---

## Summary

| Item | Status | Priority |
|------|--------|----------|
| XML Sitemap | EXISTS - Incomplete | MEDIUM |
| robots.txt | EXISTS - Issues | HIGH |
| Meta Tags | GOOD | - |
| H1 Structure | PARTIAL | HIGH |
| Schema Markup | GOOD (FAQPage only) | MEDIUM |
| Canonical Tags | MISSING | CRITICAL |
| Image Alt Tags | NEEDS WORK | MEDIUM |
| Noindex Tags | MISSING | CRITICAL |
| URL Structure | MIXED | LOW |
| Internal Linking | GOOD | - |

---

## 1. XML Sitemap

**Status:** EXISTS - Incomplete

**File:** `sitemap.xml`

**Issues:**
- Only includes 16 legacy static pages
- Missing new funnel pages (flow, landing, offer-wall)
- Missing subdomain verticals (auto, life, medicare, creditcard)
- No lastmod timestamps
- No changefreq attributes

---

## 2. robots.txt

**Status:** EXISTS - Issues

```
User-agent: *
Disallow: /privacy.php
Disallow: /terms.php
Disallow: /contact.php
Disallow: /lead-import/
Disallow: /lead-log/

Sitemap: https://goquoterocket.com/sitemap.xml
```

**Issues:**
- BLOCKS privacy.php, terms.php, contact.php BUT they're in the sitemap
- Contradictory signals to search engines
- Thank-you page and funnel pages not blocked

---

## 3. Meta Tags

**Status:** GOOD

- All pages have title tags (50-65 chars)
- Meta descriptions present (150-160 chars)
- Keywords included and relevant
- Consistent branding

**Files:** Legacy pages and new funnel templates properly configured

---

## 4. Heading Structure

**Status:** PARTIAL - Issues

| Page Type | H1 Status |
|-----------|-----------|
| Legacy pages (index.php, car-insurance.php, etc.) | MISSING - Uses styled `<p>` tags |
| New funnel templates (landing.php, flow.php) | PRESENT - Proper H1 |

**Issue:** Legacy pages use `<p class="sec1-hdg">` instead of semantic `<h1>` tags

---

## 5. Schema Markup

**Status:** GOOD (FAQPage only)

**Present:**
- FAQPage schema on index.php (11 Q&A items)
- FAQPage schema on car-insurance.php (10 Q&A items)
- Proper JSON-LD format

**Missing:**
- Organization schema
- BreadcrumbList schema
- LocalBusiness schema
- AggregateRating schema
- New funnel pages have no schema

---

## 6. Canonical Tags

**Status:** MISSING - CRITICAL

No canonical tags found on any pages.

**Risk:** Query parameters create duplicate content:
- `/car-insurance.php`
- `/car-insurance.php?aff_sub=0022`
- `/car-insurance.php?aff_sub=0022&aff_sub3=paid`

---

## 7. Image Alt Tags

**Status:** NEEDS WORK

**Issues found:**
- `business-insurance.php`: Empty alt on Feefo logo and star images
- `car-insurance.php`: Empty alt on navigation icons
- `contact.php`: Empty alt on contact icon
- Total: 10+ images with missing/empty alt text

---

## 8. Noindex Tags

**Status:** MISSING - CRITICAL

**Pages that SHOULD be noindexed but AREN'T:**
- `thank-you.php`
- `views/templates/flow.php`
- `views/templates/offer-wall.php`
- Subdomain funnel pages

No `<meta name="robots" content="noindex, nofollow">` found.

---

## 9. URL Structure

**Status:** MIXED

**Legacy pages:** Clean URLs with .php extension
**New funnel pages:** Subdomain-based routing

```
auto.goquoterocket.com/          - Landing
auto.goquoterocket.com/flow      - Flow
auto.goquoterocket.com/owl       - Offer wall
```

**Issue:** Subdomain strategy may dilute main domain authority

---

## 10. Internal Linking

**Status:** GOOD

- Comprehensive header navigation
- Footer links organized by category
- Query parameters preserved throughout
- 15+ product page links from homepage

**Issue:** Links use `alt=""` attribute instead of `title=""` (incorrect HTML)

---

## Action Items

| Priority | Task | Files Affected |
|----------|------|----------------|
| CRITICAL | Add canonical tags to all pages | All .php files + templates |
| CRITICAL | Add noindex to funnel/thank-you pages | thank-you.php, flow.php, offer-wall.php |
| HIGH | Fix robots.txt contradictions | robots.txt, sitemap.xml |
| HIGH | Add H1 tags to legacy pages | index.php, car-insurance.php, etc. |
| MEDIUM | Fix image alt tags | 10+ images across pages |
| MEDIUM | Add Organization schema | index.php |
| MEDIUM | Update sitemap with all pages | sitemap.xml |
| LOW | Fix link alt to title attributes | header.php, footer.php |
