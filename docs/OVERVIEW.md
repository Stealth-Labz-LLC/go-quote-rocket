# GoQuoteRocket - Overview

**A configuration-driven, multi-vertical insurance lead generation platform.**

> One codebase. Infinite verticals. Zero code changes to add new products.

---

## What Is GoQuoteRocket?

GoQuoteRocket is a production-ready lead generation platform that captures insurance quote requests through two systems:

1. **Subdomain Funnel System** (Paid/Affiliate Traffic) — Step-by-step questionnaires at `{vertical}.goquoterocket.com`
2. **Organic SEO Pages** (Google Traffic) — Content-rich landing pages at `goquoterocket.com/*.php`

Both systems route leads to buyers (StealthLabz, Waypoint) and display matched carrier offers to users.

---

## Current State

| Metric | Value |
|--------|-------|
| Total Lines of Code | 40,144 |
| Code Files | 133 |
| Organic SEO Pages | 11 |
| Funnel Verticals | 4 (auto, life, medicare, credit card) |
| Production Status | Live |

### Vertical Status

| Vertical | Questions | Carriers | Lead Routing | Status |
|----------|-----------|----------|--------------|--------|
| Auto Insurance | 7 | 5 | StealthLabz + Waypoint | **Active** |
| Life Insurance | 5 | 3 | StealthLabz + Waypoint | Needs Webhook ID |
| Medicare | 7 | 5 | StealthLabz | Needs Webhook ID |
| Credit Cards | 7 | 6 | StealthLabz | Needs Webhook ID |

---

## Environments

| Environment | Branch | URL | Status |
|-------------|--------|-----|--------|
| Local | — | `goquoterocket.local` | Ready |
| Staging | `orchid_dev` | `goquoterocket.com/staging/public/` | Ready |
| Production | `main` | `goquoterocket.com` | **Live** |

---

## Company & Legal

- **Platform:** GoQuoteRocket
- **Parent Company:** Stealth Labz LLC
- **Domain:** goquoterocket.com
- **Hosting:** cPanel at host.stealthlabz.com
- **Repository:** github.com/Stealth-Labz-LLC/goquoterocket

---

## Documentation Index

### Business Documents (this folder)

| Document | Description |
|----------|-------------|
| [Overview](OVERVIEW.md) | This file — project summary |
| [Technology](TECHNOLOGY.md) | Tech stack and architecture |
| [Product](PRODUCT.md) | Features, systems, competitive advantages |
| [Cost](COST.md) | Build cost and timeline analysis |
| [Opportunity](OPPORTUNITY.md) | Revenue potential and scalability |

### Technical Operations (Operations/)

| Document | Description |
|----------|-------------|
| [Architecture](Operations/ARCHITECTURE.md) | Detailed MVC structure, routing, design patterns |
| [Configuration](Operations/CONFIGURATION.md) | Config hierarchy and schemas |
| [API](Operations/API.md) | Endpoints, field mapping, integrations |
| [Frontend](Operations/FRONTEND.md) | FunnelEngine.js, CSS, templates |
| [Development](Operations/DEVELOPMENT.md) | Local setup, testing, troubleshooting |
| [Deployment](Operations/DEPLOYMENT.md) | GitHub Actions CI/CD, hosting |
| [Verticals](Operations/VERTICALS.md) | Adding new verticals guide |
| [Audit](Operations/AUDIT.md) | Production readiness scores |
| [Post-Launch](Operations/POST-LAUNCH-CHECKLIST.md) | Go-live audit playbook |
| [Organic Pages](Operations/ORGANIC-PAGES.md) | SEO pages system |
| [User Flows](Operations/USER-FLOWS.md) | User journey diagrams |
