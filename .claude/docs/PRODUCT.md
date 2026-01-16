# GoQuoteRocket - Product Overview

**A turnkey, configuration-driven insurance lead generation platform**

> One codebase. Infinite verticals. Zero code changes to add new products.

---

## Executive Summary

GoQuoteRocket is a **production-ready lead generation platform** that captures insurance quote requests through optimized funnels and SEO-rich content pages, routing leads to buyers (StealthLabz, Waypoint) while displaying matched carrier offers to users.

**What makes it valuable:**
- **Two traffic capture systems** - Paid funnel flow + organic SEO pages
- **100% configuration-driven** - Add new vertical in 5 minutes with ONE file
- **White-label ready** - Rebrand entire platform in ONE file change
- **Multi-buyer routing** - Send leads to multiple buyers simultaneously
- **Proven architecture** - Clean MVC + Laravel hybrid, fully documented

---

## The Two Systems

### 1. Subdomain Funnel System (Paid Traffic)

**Purpose:** High-conversion, step-by-step questionnaire for paid/affiliate traffic

**URL Pattern:** `{vertical}.goquoterocket.com`

**Flow:**
```
Landing Page → FunnelEngine.js Wizard → Form Submit → Offer Wall
```

**Features:**
- Auto-advancing questionnaire (FunnelEngine.js)
- Progress saved to localStorage
- Loading modal with rotating messages
- Eligibility-based carrier filtering
- Affiliate parameter passthrough

### 2. Organic SEO Pages (Organic Traffic)

**Purpose:** Content-rich landing pages for Google organic traffic

**URL Pattern:** `goquoterocket.com/{product}.php`

**Flow:**
```
SEO Landing Page → Inline Form → API Submit → Thank You Page
```

**Features:**
- Full SEO content (headings, paragraphs, education)
- Schema.org FAQPage structured data
- Provider logo carousels
- Customer testimonials
- Inline lead capture forms
- Internal cross-linking

---

## Current Product Inventory

### Active Verticals (Funnel System)

| Vertical | Status | Questions | Carriers | Webhook |
|----------|--------|-----------|----------|---------|
| Auto Insurance | **LIVE** | 7 | 5 | Configured |
| Life Insurance | Ready | 5 | 3 | Needs ID |
| Medicare | Ready | 7 | 5 | Needs ID |
| Credit Cards | Ready | 7 | 6 | Needs ID |

### Organic SEO Pages

| Page | Status | Form | API |
|------|--------|------|-----|
| Homepage | **LIVE** | Selector | - |
| Car Insurance | **LIVE** | Inline | `auto-api-call.php` |
| Life Insurance | **LIVE** | Inline | `life-api-call.php` |
| Medical Insurance | **LIVE** | Inline | TBD |
| Pet Insurance | **LIVE** | Inline | TBD |
| Funeral Cover | **LIVE** | Inline | TBD |
| Debt Relief | **LIVE** | Inline | TBD |
| Business Insurance | **LIVE** | Inline | TBD |
| Vehicle Tracker | **LIVE** | Inline | TBD |
| Motor Warranty | **LIVE** | Inline | TBD |
| Personal Loans | **LIVE** | Inline | TBD |

---

## Technology Stack

| Layer | Technology | Notes |
|-------|------------|-------|
| **Backend** | PHP 8+ | Laravel components for HTTP/middleware |
| **Frontend** | Vanilla JS | FunnelEngine.js (~400 lines) |
| **CSS** | Custom modular | 26 files with design tokens |
| **Templates** | PHP SSR | Universal templates + components |
| **Database** | Optional | Config-driven, no DB required |
| **Deployment** | GitHub Actions | Auto-deploy via SFTP to cPanel |
| **Tracking** | GTM, GA4, FB Pixel | TrustedForm, Everflow ready |
| **Lead Routing** | cURL | StealthLabz webhooks, Waypoint |

---

## Key Metrics

| Metric | Value |
|--------|-------|
| Total PHP Files | ~97 files |
| Controllers | 8 (5 custom + 3 Laravel) |
| Models | 4 (Vertical, Carrier, Brand, User) |
| Templates | 5 page templates + 4 components |
| CSS Files | 26 modular files |
| Organic Pages | 11 SEO landing pages |
| FunnelEngine.js | ~400 lines |
| Time to Add Vertical | ~5 minutes |
| Time to Rebrand | ~5 minutes |

---

## Revenue Model

### Lead Sources

1. **Organic Traffic** → SEO pages → Inline forms
2. **Paid Traffic** → Subdomain funnels → Step-by-step wizard
3. **Affiliate Traffic** → Parameter passthrough → Attribution

### Lead Destinations

1. **StealthLabz** - JSON webhook, per-vertical routing
2. **Waypoint** - Form-encoded POST, selective fields
3. **Logger** - Backup storage for all leads

### Monetization

- **Pay-per-lead** from StealthLabz/Waypoint
- **Affiliate commissions** via Everflow
- **White-label licensing** potential

---

## Competitive Advantages

### 1. Configuration-Driven Architecture

```php
// Add new vertical: Create ONE file
config/verticals/newvertical.php

// Contains:
// - Landing page content
// - Questionnaire flow (questions, validation)
// - Carrier list with eligibility rules
// - Lead routing configuration
// - Tracking IDs
```

### 2. Dual Traffic Capture

| Paid Traffic | Organic Traffic |
|--------------|-----------------|
| Subdomain funnels | Root PHP pages |
| Step-by-step wizard | Inline forms |
| High conversion focus | SEO content focus |
| `/flow` → `/owl` | Form → `thank-you.php` |

### 3. White-Label Ready

```php
// Rebrand entire platform: Change ONE constant
define('ACTIVE_BRAND', 'newbrand');

// Brand config includes:
// - Company name, logo, favicon
// - Color palette (primary, secondary, accent)
// - Typography (fonts, Google Fonts URL)
// - Contact info, social links
// - Legal text (privacy, terms)
```

### 4. Universal Templates

Same templates render any vertical:
- `views/templates/landing.php` - Works for auto, life, medicare, etc.
- `views/templates/flow.php` - Questions from config
- `views/templates/offer-wall.php` - Carriers from config

---

## Quick Start

### For Developers

```bash
# 1. Clone repository
git clone https://github.com/Stealth-Labz-LLC/goquoterocket.git

# 2. Set up XAMPP with VirtualHosts
# See docs/DEVELOPMENT.md

# 3. Visit local site
http://goquoterocket.local
http://auto.goquoterocket.local
```

### For Adding New Vertical

1. Copy `config/verticals/auto.php` → `config/verticals/newvertical.php`
2. Modify questions, carriers, routing config
3. Add webhook ID to `config/integrations.php`
4. Visit `http://newvertical.goquoterocket.local`

**Time to launch: 5 minutes**

### For Rebranding

1. Copy `config/brands/goquoterocket.php` → `config/brands/newbrand.php`
2. Update colors, fonts, company info, legal text
3. Change `ACTIVE_BRAND` in `config/environment.php`
4. Entire site updates instantly

**Time to rebrand: 5 minutes**

---

## Feature Checklist

### Core Features (Complete)

- [x] Multi-vertical funnel system
- [x] Organic SEO landing pages
- [x] Configuration-driven architecture
- [x] White-label brand support
- [x] FunnelEngine.js step wizard
- [x] Multi-buyer lead routing
- [x] Eligibility-based carrier filtering
- [x] GTM tracking integration
- [x] Affiliate parameter passthrough
- [x] Mobile responsive design
- [x] Schema.org structured data
- [x] GitHub Actions CI/CD
- [x] Environment detection (local/staging/prod)
- [x] Comprehensive documentation

### Planned Features (Roadmap)

- [ ] Lead backup database (currently JSON)
- [ ] Admin dashboard for lead management
- [ ] A/B testing framework
- [ ] Real-time lead notifications
- [ ] API rate limiting
- [ ] Automated testing suite
- [ ] Multi-language support

---

## Documentation

| Document | Location | Purpose |
|----------|----------|---------|
| Technical Docs | `docs/` | Architecture, API, deployment |
| Product Overview | `.claude/docs/PRODUCT.md` | This document |
| Post-Launch Checklist | `.claude/docs/POST-LAUNCH-CHECKLIST.md` | Audit playbook |
| Organic Pages Guide | `.claude/docs/ORGANIC-PAGES.md` | SEO system docs |
| User Flows | `.claude/docs/USER-FLOWS.md` | Journey mapping |

---

## Environments

| Environment | Branch | URL | Status |
|-------------|--------|-----|--------|
| Local | - | `goquoterocket.local` | Ready |
| Staging | `orchid_dev` | `goquoterocket.com/staging/` | Ready |
| Production | `main` | `goquoterocket.com` | **LIVE** |

---

## Company Information

- **Platform:** GoQuoteRocket
- **Parent Company:** Stealth Labz LLC
- **Domain:** goquoterocket.com
- **Hosting:** cPanel at host.stealthlabz.com
- **Repository:** github.com/Stealth-Labz-LLC/goquoterocket

---

## Acquisition Considerations

### What You're Getting

1. **Production platform** - Live and generating leads
2. **Complete codebase** - Clean, documented, maintainable
3. **Dual traffic system** - Paid funnels + organic SEO
4. **Scalable architecture** - Add verticals without code changes
5. **Buyer relationships** - StealthLabz, Waypoint integrations
6. **Documentation** - Full technical and operational docs

### What You'll Need

1. **Domain transfer** - goquoterocket.com
2. **Hosting migration** - Or continue with cPanel
3. **Webhook credentials** - StealthLabz portal access
4. **Tracking accounts** - GTM, GA4, FB Pixel
5. **Traffic source** - Paid ads or SEO investment

### Growth Opportunities

1. **More verticals** - Home, renters, health, dental
2. **More buyers** - Expand lead distribution network
3. **More traffic** - SEO content expansion
4. **White-label** - License platform to other operators
5. **Geographic expansion** - Currently US-focused

---

*Product documentation version: 1.0 | January 2026*
