# GoQuoteRocket Documentation

**GoQuoteRocket** is a 100% configuration-driven universal insurance quote funnel platform. One codebase serves multiple insurance verticals (auto, life, medicare, credit cards) through subdomain-based routing.

## Quick Links

| Document | Description |
|----------|-------------|
| [Architecture](ARCHITECTURE.md) | System design, MVC structure, routing, design patterns |
| [Configuration](CONFIGURATION.md) | Complete config system: brands, verticals, tracking, integrations |
| [Verticals](VERTICALS.md) | How verticals work, adding new verticals (5-minute guide) |
| [API](API.md) | Form submission, StealthLabz/Waypoint routing, field mapping |
| [Frontend](FRONTEND.md) | FunnelEngine.js, CSS architecture, templates |
| [Deployment](DEPLOYMENT.md) | GitHub Actions CI/CD, environments, hosting |
| [Development](DEVELOPMENT.md) | Local setup with XAMPP, testing, troubleshooting |
| [Audit](AUDIT.md) | Production readiness audit and checklist |

---

## What is GoQuoteRocket?

GoQuoteRocket is a lead generation platform that:

- **Captures insurance quote requests** through optimized questionnaire funnels
- **Routes leads to buyers** (StealthLabz, Waypoint) based on vertical configuration
- **Displays offer walls** with matched carriers after submission
- **Tracks conversions** via GTM, TrustedForm, and affiliate networks

### Key Value Proposition

| Feature | Benefit |
|---------|---------|
| **Configuration-Driven** | Add new vertical in 5 minutes with ONE config file |
| **Universal Templates** | Same templates work for all verticals |
| **White-Label Ready** | Change brand in ONE file, entire site updates |
| **Multi-Buyer Routing** | Route leads to multiple buyers simultaneously |
| **Subdomain Architecture** | SEO-friendly, clean URLs (auto.goquoterocket.com) |

---

## Project Structure

```
goquoterocket/
├── app/                      # Application code (MVC + Laravel)
│   ├── Controllers/          # Custom request handlers (5 controllers)
│   ├── Core/                 # Router, View, base Controller
│   ├── Models/               # Vertical, Carrier, Brand, User models
│   ├── Services/             # LeadService for API routing
│   ├── Http/                 # Laravel HTTP components
│   │   ├── Controllers/      # LeadController, PageController
│   │   └── Middleware/       # Auth, CSRF, encryption, etc.
│   └── Providers/            # Laravel service providers
│
├── config/                   # ALL configuration
│   ├── verticals/            # Per-vertical configs
│   │   ├── auto.php          # Auto insurance (7 questions, 5 carriers)
│   │   ├── life.php          # Life insurance
│   │   ├── medicare.php      # Medicare plans
│   │   └── creditcard.php    # Credit cards
│   ├── brands/               # Brand configurations
│   │   └── goquoterocket.php # Main brand
│   ├── environment.php       # Environment detection & URL building
│   ├── tracking.php          # GTM per vertical
│   ├── integrations.php      # StealthLabz, Waypoint configs
│   └── carriers.php          # Master carrier database
│
├── views/                    # Universal templates
│   ├── templates/            # Page templates
│   │   ├── home.php          # Homepage
│   │   ├── landing.php       # Vertical landing page
│   │   ├── flow.php          # Questionnaire funnel
│   │   ├── offer-wall.php    # Multi-offer results
│   │   └── single-offer.php  # Single offer page
│   ├── components/           # Reusable components
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── faq.php
│   └── legal/                # Legal pages
│
├── public/                   # Web root
│   ├── index.php             # Entry point (organic pages)
│   ├── funnel.php            # Funnel router
│   └── .htaccess             # URL rewriting
│
├── cdn/                      # Static assets
│   ├── js/                   # JavaScript (FunnelEngine.js)
│   ├── css/                  # Stylesheets (26 modular files)
│   │   ├── core/             # Reset, tokens, typography
│   │   ├── components/       # Buttons, forms, cards
│   │   └── sections/         # Hero, features, FAQ
│   └── images/               # Logos, carriers, icons
│
├── api/                      # API endpoints
│   └── submit.php            # Form submission handler
│
├── .github/workflows/        # CI/CD
│   └── deploy.yml            # GitHub Actions deployment
│
└── docs/                     # Documentation (you are here)
```

---

## Current Verticals

| Vertical | Subdomain | Questions | Carriers | Lead Routing | Status |
|----------|-----------|-----------|----------|--------------|--------|
| Auto Insurance | auto.goquoterocket.com | 7 | 5 | StealthLabz + Waypoint | **Active** |
| Life Insurance | life.goquoterocket.com | 5 | 3 | StealthLabz + Waypoint | Needs Webhook |
| Medicare | medicare.goquoterocket.com | 7 | 5 | StealthLabz | Needs Webhook |
| Credit Cards | creditcard.goquoterocket.com | 7 | 6 | StealthLabz | Needs Webhook |

---

## How It Works

### User Flow

```
1. User visits: auto.goquoterocket.com
                    ↓
2. Subdomain detected → "auto" vertical loaded
                    ↓
3. Landing page renders with auto insurance content
                    ↓
4. User clicks CTA → Redirects to /flow
                    ↓
5. FunnelEngine.js renders 7-step questionnaire
                    ↓
6. Form submitted → POST to /api/submit.php
                    ↓
7. Lead routed to StealthLabz + Waypoint
                    ↓
8. User redirected to offer wall with matched carriers
```

### Configuration Flow

```
Subdomain (auto)
      ↓
Vertical::detect() → "auto"
      ↓
Load config/verticals/auto.php
      ↓
Pass to Controller
      ↓
Render universal template with config data
```

---

## Quick Start

### For Developers

1. Clone the repository
2. Set up XAMPP (see [Development Guide](DEVELOPMENT.md))
3. Configure hosts file and Apache VirtualHosts
4. Visit `http://goquoterocket.local`

### For Adding New Vertical

1. Copy `config/verticals/auto.php` → `config/verticals/newvertical.php`
2. Modify questions, carriers, routing config
3. Add webhook ID to `config/integrations.php`
4. Add GTM ID to `config/tracking.php` (optional)
5. Visit `http://newvertical.goquoterocket.local`

See [Verticals Guide](VERTICALS.md) for complete instructions.

### For Rebranding

1. Copy `config/brands/goquoterocket.php` → `config/brands/newbrand.php`
2. Update colors, fonts, company info, legal text
3. Change `ACTIVE_BRAND` in `config/environment.php`
4. Entire site updates instantly

---

## Technology Stack

| Layer | Technology |
|-------|------------|
| Backend | PHP 8+ with Laravel components |
| Frontend | Vanilla JavaScript (FunnelEngine.js), jQuery (optional) |
| CSS | Custom CSS with CSS variables (26 modular files) |
| Templates | PHP templates with components |
| Deployment | GitHub Actions → SFTP to cPanel |
| Tracking | GTM, TrustedForm, Facebook Pixel, GA4 |
| Lead Routing | StealthLabz webhooks, Waypoint |

---

## Key Metrics

| Metric | Value |
|--------|-------|
| Total PHP Files | ~97 files |
| Controllers | 8 files (5 custom + 3 Laravel) |
| Models | 4 files (Vertical, Carrier, Brand, User) |
| Templates | 5 page templates + components |
| CSS Files | 26 modular files |
| FunnelEngine.js | ~400 lines |
| Time to Add Vertical | ~5 minutes |
| Time to Rebrand | ~5 minutes |

---

## Environments

| Environment | Branch | URL | Status |
|-------------|--------|-----|--------|
| Local | - | `goquoterocket.local` | Ready |
| Staging | `orchid_dev` | `goquoterocket.com/staging/public/` | Ready |
| Production | `main` | `goquoterocket.com` | Ready |

---

## Company & Legal

- **Company:** GoQuoteRocket LLC (Stealth Labz LLC)
- **Domain:** goquoterocket.com
- **Hosting:** cPanel at host.stealthlabz.com
- **Repository:** github.com/Stealth-Labz-LLC/goquoterocket

---

## Support

For issues or questions:
1. Check relevant documentation in this folder
2. Review GitHub Actions logs for deployment issues
3. Check Apache error logs for PHP errors
4. Contact the development team

---

*Documentation last updated: January 2026*
