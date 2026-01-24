# GoQuoteRocket - Technology

A high-level overview of the technology stack, architecture, and design philosophy.

---

## Tech Stack

| Layer | Technology | Notes |
|-------|------------|-------|
| **Backend** | PHP 8+ | Laravel components for HTTP/middleware |
| **Frontend** | Vanilla JavaScript | FunnelEngine.js (~400 lines, no framework) |
| **CSS** | Custom modular CSS | 26 files with design tokens, CSS variables |
| **Templates** | PHP server-side rendering | Universal templates + reusable components |
| **Database** | None required | Entirely config-driven, no DB dependency |
| **Deployment** | GitHub Actions | Auto-deploy via SFTP to cPanel |
| **Tracking** | GTM, GA4, Facebook Pixel | TrustedForm, Everflow ready |
| **Lead Routing** | cURL (PHP) | StealthLabz webhooks + Waypoint POST |

---

## Architecture

GoQuoteRocket follows a **configuration-driven MVC + Laravel hybrid** architecture:

```
REQUEST → Entry Point → Vertical Detection → Controller → Template → RESPONSE
```

### Core Principle: Configuration Over Code

All behavior is defined in configuration files, not code:

- **Add a new vertical** → create one config file (no code changes)
- **Rebrand the platform** → change one constant (entire site updates)
- **Add a new lead buyer** → add config entry + routing function
- **Change questions, carriers, or content** → edit config arrays

### Key Architectural Components

| Component | Files | Purpose |
|-----------|-------|---------|
| Controllers | 8 | Route requests to views |
| Models | 4 | Vertical, Carrier, Brand, User |
| Services | 1 | LeadService (API routing) |
| Config Files | 20+ | The "brain" — defines all behavior |
| Templates | 5 | Universal pages (work for any vertical) |
| Components | 4 | Reusable header, footer, FAQ, disclaimer |

---

## Architecture Diagram

```
┌─────────────────────────────────────────────────────────┐
│                        REQUEST                           │
└─────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────┐
│               public/funnel.php (Entry Point)            │
└─────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────┐
│              Vertical::detect() (Subdomain Routing)      │
│         auto.goquoterocket.com → loads "auto" config     │
└─────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────┐
│                     Controller Layer                      │
│    Landing | Flow | OfferWall | SingleOffer | Legal       │
└─────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────┐
│                Universal Template + Config Data           │
│         Same template renders ANY vertical's content      │
└─────────────────────────────────────────────────────────┘
                            │
                            ▼
┌─────────────────────────────────────────────────────────┐
│                        RESPONSE                          │
└─────────────────────────────────────────────────────────┘
```

---

## Design Patterns

| Pattern | What It Means |
|---------|---------------|
| **Configuration-Driven** | All behavior lives in config files, not hardcoded |
| **Vertical Abstraction** | All verticals share the same structure, are interchangeable |
| **Environment-Aware URLs** | Same code works in local, staging, and production |
| **White-Label Ready** | Brand config controls all visual identity |
| **Field Mapping** | Form fields mapped to buyer fields via config arrays |
| **Universal Templates** | One template serves all verticals |

---

## Directory Structure (Simplified)

```
goquoterocket/
├── app/                    # Application code (MVC + Laravel)
│   ├── Controllers/        # Request handlers
│   ├── Models/             # Vertical, Carrier, Brand
│   ├── Services/           # LeadService
│   └── Core/               # Router, View, base Controller
├── config/                 # THE BRAIN — all configuration
│   ├── verticals/          # Per-vertical configs (auto, life, etc.)
│   ├── brands/             # Brand configs (colors, fonts, legal)
│   ├── environment.php     # Environment detection
│   ├── integrations.php    # StealthLabz, Waypoint
│   └── tracking.php        # GTM, pixels
├── views/                  # Universal templates
├── cdn/                    # Static assets (JS, CSS, images)
├── api/                    # API endpoints
├── public/                 # Web root entry points
└── .github/workflows/      # CI/CD pipeline
```

---

## Key Technical Decisions

| Decision | Rationale |
|----------|-----------|
| No JavaScript framework | Minimal bundle, fast load, no build step |
| No database | Config files are the data layer — simpler, faster, version-controlled |
| PHP + Laravel hybrid | Laravel middleware/HTTP layer, custom MVC for simplicity |
| Subdomain routing | SEO-friendly, clean separation between verticals |
| CSS variables | Runtime brand injection, no rebuild needed |
| GitHub Actions + SFTP | Simple, reliable deployment to cPanel hosting |

---

## Scalability

| Operation | Effort |
|-----------|--------|
| Add new vertical | Create 1 config file (~5 min) |
| Add new organic page | Create 1 PHP file |
| Add new lead buyer | Config entry + routing function |
| Rebrand entire platform | Change 1 constant |
| Add new carrier | Add to carriers config |
| Deploy to production | Push to `main` branch (auto-deploys) |

---

*For detailed technical implementation, see [Operations/ARCHITECTURE.md](Operations/ARCHITECTURE.md)*
