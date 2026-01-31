# GoQuoteRocket - Product

**A turnkey, configuration-driven insurance lead generation platform.**

---

## The Two Systems

### 1. Subdomain Funnel System (Paid/Affiliate Traffic)

High-conversion, step-by-step questionnaire for qualified traffic.

**URL Pattern:** `{vertical}.goquoterocket.com`

**Flow:** Landing Page → FunnelEngine.js Wizard → Form Submit → Offer Wall

**Features:**
- Auto-advancing questionnaire (progress saved to localStorage)
- Loading modal with rotating messages
- Eligibility-based carrier filtering on results page
- Affiliate parameter passthrough (aff_id, transaction_id)
- TrustedForm certificate capture

### 2. Organic SEO Pages (Google Traffic)

Content-rich landing pages designed for organic search.

**URL Pattern:** `goquoterocket.com/{product}.php`

**Flow:** SEO Landing Page → Inline Form → API Submit → Thank You Page

**Features:**
- Full SEO content (headings, paragraphs, education)
- Schema.org FAQPage structured data
- Provider logo carousels
- Customer testimonials
- Inline lead capture forms
- Internal cross-linking between products

---

## Product Inventory

### Funnel Verticals

| Vertical | Questions | Carriers | Webhook | Status |
|----------|-----------|----------|---------|--------|
| Auto Insurance | 7 | 5 | Configured | **Live** |
| Life Insurance | 5 | 3 | Needs ID | Ready |
| Medicare | 7 | 5 | Needs ID | Ready |
| Credit Cards | 7 | 6 | Needs ID | Ready |

### Organic SEO Pages (11 total)

| Page | Form | API Endpoint | Status |
|------|------|--------------|--------|
| Car Insurance | Inline | `auto-api-call.php` | **Live** |
| Life Insurance | Inline | `life-api-call.php` | **Live** |
| Medical Insurance | Inline | TBD | **Live** |
| Pet Insurance | Inline | TBD | **Live** |
| Funeral Cover | Inline | TBD | **Live** |
| Debt Relief | Inline | TBD | **Live** |
| Business Insurance | Inline | TBD | **Live** |
| Vehicle Tracker | Inline | TBD | **Live** |
| Motor Warranty | Inline | TBD | **Live** |
| Personal Loans | Inline | TBD | **Live** |
| Homepage | Vertical selector | — | **Live** |

---

## Revenue Model

### Lead Sources

1. **Organic Traffic** → SEO pages → Inline forms
2. **Paid Traffic** → Subdomain funnels → Step-by-step wizard
3. **Affiliate Traffic** → Parameter passthrough → Attribution

### Lead Destinations

1. **StealthLabz** — JSON webhook, per-vertical routing
2. **Waypoint** — Form-encoded POST, selective fields
3. **Logger** — Backup storage for all leads

### Monetization

- Pay-per-lead from StealthLabz/Waypoint
- Affiliate commissions via Everflow
- White-label licensing potential

---

## Competitive Advantages

### 1. Configuration-Driven Architecture

Add a new vertical in 5 minutes with ONE config file. No code changes, no deployments beyond the config.

### 2. Dual Traffic Capture

| Paid Traffic | Organic Traffic |
|--------------|-----------------|
| Subdomain funnels | Root PHP pages |
| Step-by-step wizard | Inline forms |
| High conversion focus | SEO content focus |

### 3. White-Label Ready

Rebrand the entire platform by changing ONE constant. Brand config controls all colors, fonts, logos, legal text, and company info.

### 4. Universal Templates

Same templates render any vertical — auto, life, medicare, credit cards, or anything new. Add content through config, not code.

### 5. Multi-Buyer Routing

Route leads to multiple buyers simultaneously with per-vertical field mapping. Each buyer gets exactly the fields they need in the format they expect.

---

## Feature Checklist

### Complete

- [x] Multi-vertical funnel system
- [x] 11 organic SEO landing pages
- [x] Configuration-driven architecture
- [x] White-label brand support
- [x] FunnelEngine.js step wizard
- [x] Multi-buyer lead routing (StealthLabz + Waypoint)
- [x] Eligibility-based carrier filtering
- [x] GTM tracking integration
- [x] Affiliate parameter passthrough
- [x] Mobile responsive design
- [x] Schema.org structured data
- [x] GitHub Actions CI/CD
- [x] Environment detection (local/staging/prod)
- [x] Comprehensive documentation

### Roadmap

- [ ] Lead backup database
- [ ] Admin dashboard for lead management
- [ ] A/B testing framework
- [ ] Real-time lead notifications
- [ ] API rate limiting
- [ ] Automated testing suite
- [ ] Multi-language support

---

## What You're Getting (Acquisition)

1. **Production platform** — Live and generating leads
2. **Complete codebase** — Clean, documented, maintainable
3. **Dual traffic system** — Paid funnels + organic SEO
4. **Scalable architecture** — Add verticals without code changes
5. **Buyer relationships** — StealthLabz, Waypoint integrations
6. **Full documentation** — Technical and operational

### Growth Opportunities

1. **More verticals** — Home, renters, health, dental, pet
2. **More buyers** — Expand lead distribution network
3. **More traffic** — SEO content expansion, paid campaigns
4. **White-label** — License platform to other operators
5. **Geographic expansion** — Currently US-focused
