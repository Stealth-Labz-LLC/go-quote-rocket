# GoQuoteRocket

**100% Configuration-Driven Universal Insurance Quote Funnel Platform**

GoQuoteRocket is a lead generation platform serving multiple insurance verticals (auto, life, medicare, credit cards) from a single codebase through subdomain-based routing.

## Quick Start

```bash
# Clone repository
git clone https://github.com/Stealth-Labz-LLC/goquoterocket.git

# See full documentation
cd goquoterocket/docs
```

## Documentation

All documentation is in the [docs/](docs/) folder:

| Document | Description |
|----------|-------------|
| [README](docs/README.md) | Project overview and quick links |
| [Architecture](docs/ARCHITECTURE.md) | System design, MVC, routing |
| [Configuration](docs/CONFIGURATION.md) | Brand, vertical, tracking configs |
| [Verticals](docs/VERTICALS.md) | Adding new verticals (5-minute guide) |
| [API](docs/API.md) | Form submission, lead routing |
| [Frontend](docs/FRONTEND.md) | FunnelEngine.js, CSS, templates |
| [Deployment](docs/DEPLOYMENT.md) | GitHub Actions CI/CD |
| [Development](docs/DEVELOPMENT.md) | Local setup with XAMPP |

## Key Features

- **One Codebase** - Serves all verticals (auto, life, medicare, credit cards)
- **Configuration-Driven** - Add new vertical in 5 minutes
- **White-Label Ready** - Rebrand in 5 minutes
- **Subdomain Routing** - SEO-friendly URLs (auto.goquoterocket.com)
- **Multi-Buyer Routing** - StealthLabz + Waypoint integration

## Project Structure

```
goquoterocket/
├── app/              # MVC application code
├── config/           # Configuration files (THE BRAIN)
│   ├── verticals/    # Per-vertical configs
│   ├── brands/       # Brand configs
│   └── tracking.php  # Analytics config
├── views/            # PHP templates
├── public/           # Web root
├── cdn/              # Static assets (JS, CSS, images)
├── api/              # API endpoints
└── docs/             # Documentation
```

## Environments

| Environment | Branch | URL |
|-------------|--------|-----|
| Local | - | goquoterocket.local |
| Staging | `orchid_dev` | goquoterocket.com/staging |
| Production | `main` | goquoterocket.com |

## License

Proprietary - Stealth Labz LLC
