# Architecture

This document describes the system architecture, design patterns, and code organization of GoQuoteRocket.

## Table of Contents

- [Overview](#overview)
- [MVC Architecture](#mvc-architecture)
- [Directory Structure](#directory-structure)
- [Request Lifecycle](#request-lifecycle)
- [Routing System](#routing-system)
- [Design Patterns](#design-patterns)
- [Code Organization](#code-organization)

---

## Overview

GoQuoteRocket follows a **configuration-driven MVC architecture**:

- **Model**: Data loading and business logic (`Vertical`, `Carrier`)
- **View**: Universal PHP templates that render config data
- **Controller**: Lightweight handlers that orchestrate model→view flow
- **Configuration**: The "brain" of the system - defines all behavior

```
┌─────────────────────────────────────────────────────────────┐
│                         REQUEST                              │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                    public/funnel.php                         │
│                   (Entry Point + Router)                     │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                    Vertical::detect()                        │
│              (Subdomain → Vertical ID → Config)              │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                      Controller                              │
│         (LandingController, FlowController, etc.)            │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                    View::render()                            │
│                 (Template + Config Data)                     │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                         RESPONSE                             │
└─────────────────────────────────────────────────────────────┘
```

---

## MVC Architecture

### Models (`app/Models/`)

Models handle data access and business logic. In GoQuoteRocket, models primarily load configuration.

#### Vertical.php (~198 lines)

The core model that powers vertical detection and loading.

```php
class Vertical
{
    // Detect vertical from request
    public static function detect(): ?string
    {
        // 1. Check query parameter: ?vertical=auto
        // 2. Check subdomain: auto.goquoterocket.com
        // 3. Return null if not found
    }

    // Load vertical configuration
    public static function load(string $id): ?array
    {
        $path = __DIR__ . "/../../config/verticals/{$id}.php";
        return file_exists($path) ? require $path : null;
    }

    // Get all enabled verticals
    public static function all(): array

    // Build carrier URL with tracking params
    public static function getCarrierUrl($vertical, $carrier, $params): string
}
```

#### Carrier.php (~112 lines)

Manages the carrier database and filtering.

```php
class Carrier
{
    // Get all carriers for a vertical
    public static function forVertical(string $vertical): array

    // Filter carriers by user eligibility
    public static function filterByEligibility(array $carriers, array $userData): array

    // Get carrier logo path
    public static function getLogo(string $carrierId): string
}
```

### Views (`views/`)

Views are PHP templates that render HTML using configuration data. They contain no business logic.

#### Template Structure

```
views/
├── templates/           # Full page templates
│   ├── landing.php      # Landing page (239 lines)
│   ├── flow.php         # Questionnaire (232 lines)
│   ├── offer-wall.php   # Multi-offer results (172 lines)
│   ├── single-offer.php # Single offer (238 lines)
│   └── home.php         # Homepage (67 lines)
└── components/          # Reusable partials
    ├── header.php
    ├── footer.php
    ├── faq.php
    └── footer-disclaimer.php
```

#### Template Rendering

Templates receive configuration as variables:

```php
// In controller:
View::render('landing', [
    'v' => $verticalConfig,      // Vertical config
    'brand' => $brandConfig,     // Brand config
    'tracking' => $trackingConfig
]);

// In template (landing.php):
<h1><?= $v['landing']['headline'] ?></h1>
<p><?= $v['landing']['subheadline'] ?></p>

<?php foreach ($v['landing']['benefits'] as $benefit): ?>
    <div class="benefit"><?= $benefit['text'] ?></div>
<?php endforeach; ?>
```

### Controllers (`app/Controllers/`)

Controllers are lightweight orchestrators. They:
1. Load configuration
2. Pass to appropriate view
3. Handle any request-specific logic

#### Base Controller (`app/Core/Controller.php`)

```php
class Controller
{
    protected function getBrandConfig(): array
    {
        return require __DIR__ . '/../../config/brands/' . ACTIVE_BRAND . '.php';
    }

    protected function getTrackingConfig(): array
    {
        return require __DIR__ . '/../../config/tracking.php';
    }

    protected function render(string $template, array $data = []): void
    {
        View::render($template, array_merge($data, [
            'brand' => $this->getBrandConfig(),
            'tracking' => $this->getTrackingConfig()
        ]));
    }
}
```

#### Vertical Controllers

```php
// LandingController.php (~45 lines)
class LandingController extends Controller
{
    public function show(array $vertical): void
    {
        $this->render('landing', ['v' => $vertical]);
    }
}

// FlowController.php (~62 lines)
class FlowController extends Controller
{
    public function show(array $vertical): void
    {
        $this->render('flow', [
            'v' => $vertical,
            'carriers' => Carrier::forVertical($vertical['id'])
        ]);
    }
}

// OfferWallController.php (~52 lines)
class OfferWallController extends Controller
{
    public function show(array $vertical): void
    {
        $userData = $this->getUserDataFromSession();
        $carriers = Carrier::filterByEligibility(
            $vertical['carriers'],
            $userData
        );

        $this->render('offer-wall', [
            'v' => $vertical,
            'carriers' => $carriers
        ]);
    }
}
```

---

## Directory Structure

```
goquoterocket/
│
├── app/                           # Application code
│   ├── Controllers/               # Request handlers
│   │   ├── FlowController.php
│   │   ├── LandingController.php
│   │   ├── OfferWallController.php
│   │   ├── HomeController.php
│   │   └── LegalController.php
│   │
│   ├── Core/                      # MVC framework
│   │   ├── Controller.php         # Base controller
│   │   ├── Router.php             # Routing engine
│   │   └── View.php               # Template renderer
│   │
│   ├── Models/                    # Data models
│   │   ├── Vertical.php           # Vertical detection/loading
│   │   └── Carrier.php            # Carrier management
│   │
│   └── Exceptions/                # Exception classes
│
├── config/                        # Configuration (THE BRAIN)
│   ├── environment.php            # Environment detection
│   ├── verticals/                 # Per-vertical configs
│   ├── brands/                    # Brand configs
│   ├── tracking.php               # Analytics config
│   ├── integrations.php           # API endpoints
│   └── carriers.php               # Master carrier DB
│
├── views/                         # Templates
│   ├── templates/                 # Page templates
│   └── components/                # Reusable parts
│
├── public/                        # Web root
│   ├── index.php                  # Organic pages entry
│   ├── funnel.php                 # Funnel entry + router
│   └── .htaccess                  # URL rewriting
│
├── cdn/                           # Static assets
│   ├── js/                        # JavaScript
│   ├── css/                       # Stylesheets
│   └── images/                    # Images
│
└── api/                           # API endpoints
    └── submit.php                 # Form handler
```

---

## Request Lifecycle

### Step 1: Request Arrives

```
GET http://auto.goquoterocket.com/flow
```

### Step 2: Apache Routing (.htaccess)

```apache
# Funnel routes go to funnel.php
RewriteRule ^(flow|owl|sow|terms|privacy)$ funnel.php [L,QSA]

# Everything else goes to index.php
RewriteRule ^(.*)$ index.php [L,QSA]
```

### Step 3: Entry Point (public/funnel.php)

```php
// Load environment
require_once __DIR__ . '/../config/environment.php';

// Autoloader
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../app/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) require $path;
});

// Detect vertical from subdomain
$verticalId = Vertical::detect();

if (!$verticalId) {
    // No vertical detected → show homepage
    (new HomeController())->show();
    exit;
}

// Load vertical config
$vertical = Vertical::load($verticalId);

if (!$vertical || !$vertical['enabled']) {
    http_response_code(404);
    exit;
}

// Get route from URL path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = trim($path, '/');

// Route to appropriate controller
switch ($route) {
    case '':
    case 'landing':
        (new LandingController())->show($vertical);
        break;

    case 'flow':
        (new FlowController())->show($vertical);
        break;

    case 'owl':
        (new OfferWallController())->show($vertical);
        break;

    case 'sow':
        (new SingleOfferController())->show($vertical);
        break;

    case 'terms':
    case 'privacy':
        (new LegalController())->show($route, $vertical);
        break;

    default:
        http_response_code(404);
}
```

### Step 4: Controller Execution

```php
class FlowController extends Controller
{
    public function show(array $vertical): void
    {
        // Load additional data
        $carriers = Carrier::forVertical($vertical['id']);

        // Render template
        $this->render('flow', [
            'v' => $vertical,
            'carriers' => array_slice($carriers, 0, 5)
        ]);
    }
}
```

### Step 5: View Rendering

```php
class View
{
    public static function render(string $template, array $data = []): void
    {
        // Extract data as variables
        extract($data);

        // Include template
        include __DIR__ . "/../views/templates/{$template}.php";
    }
}
```

### Step 6: Response Sent

HTML response with:
- Configuration-driven content
- Brand colors/fonts
- Tracking scripts
- Interactive JavaScript

---

## Routing System

### URL Structure

| URL Pattern | Handler | Purpose |
|-------------|---------|---------|
| `{vertical}.domain.com/` | LandingController | Landing page |
| `{vertical}.domain.com/flow` | FlowController | Questionnaire |
| `{vertical}.domain.com/owl` | OfferWallController | Multiple offers |
| `{vertical}.domain.com/sow` | SingleOfferController | Single offer |
| `api.domain.com/submit.php` | api/submit.php | Form submission |
| `cdn.domain.com/*` | Static files | Assets |

### Vertical Detection

The `Vertical::detect()` method checks multiple sources:

```php
public static function detect(): ?string
{
    // Priority 1: Query parameter
    if (!empty($_GET['vertical'])) {
        return self::sanitize($_GET['vertical']);
    }

    // Priority 2: Subdomain
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $parts = explode('.', $host);

    // Handle: auto.goquoterocket.com
    if (count($parts) >= 3) {
        $subdomain = $parts[0];
        if (self::exists($subdomain)) {
            return $subdomain;
        }
    }

    // Priority 3: Funnel pattern (auto.funnel.domain.com)
    if (count($parts) >= 4 && $parts[1] === 'funnel') {
        return $parts[0];
    }

    return null;
}
```

### Route Matching

```php
// Simple path-based routing
$route = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Direct switch statement (no regex overhead)
switch ($route) {
    case '':
    case 'landing':
        $controller = 'LandingController';
        break;
    case 'flow':
        $controller = 'FlowController';
        break;
    // ...
}
```

---

## Design Patterns

### 1. Configuration-Driven Design

**Pattern**: All behavior is defined in configuration files, not code.

**Implementation**:
- Vertical configs define questions, carriers, routing
- Brand configs define colors, fonts, legal text
- Tracking configs define GTM IDs, pixels
- Templates simply iterate over config arrays

**Benefits**:
- Add vertical without code changes
- Rebrand without code changes
- Non-developers can modify behavior
- Easy to test different configurations

```php
// BAD: Hardcoded content
<h1>Compare Auto Insurance Quotes</h1>

// GOOD: Config-driven
<h1><?= $v['landing']['headline'] ?></h1>
```

### 2. Vertical Abstraction

**Pattern**: All verticals share the same structure and are interchangeable.

**Implementation**:
- Standard vertical config schema
- Universal templates work with any vertical
- Controllers don't know which vertical they're handling

**Benefits**:
- Add new vertical = new config file only
- All verticals get bug fixes automatically
- Consistent user experience across verticals

### 3. Template Inheritance via Components

**Pattern**: Common elements are extracted into reusable components.

**Implementation**:
```php
// In template
<?php include __DIR__ . '/../components/header.php'; ?>
<main>...</main>
<?php include __DIR__ . '/../components/footer.php'; ?>
```

**Benefits**:
- Change header once, updates everywhere
- Consistent structure across pages
- Smaller template files

### 4. Environment-Aware URL Building

**Pattern**: URLs are built dynamically based on environment.

**Implementation**:
```php
// environment.php defines buildUrl()
function buildUrl($subdomain, $path = '') {
    if (ENVIRONMENT === 'local') {
        return BASE_PATH . '/' . $subdomain . $path;
    } elseif (ENVIRONMENT === 'staging') {
        return $path;
    } else {
        $protocol = USE_HTTPS ? 'https' : 'http';
        return "{$protocol}://{$subdomain}." . BASE_DOMAIN . $path;
    }
}

// Usage in templates
<link href="<?= buildUrl('cdn', '/css/global.css') ?>">
<form action="<?= buildUrl('api', '/submit.php') ?>">
```

**Benefits**:
- Same code works in all environments
- No hardcoded URLs to update
- Easy environment switching

### 5. Field Mapping for Lead Routing

**Pattern**: Form fields are mapped to buyer fields via configuration.

**Implementation**:
```php
// In vertical config
'field_mapping' => [
    'first_name' => ['field' => 'given-name'],  // Map from form
    'c1' => ['value' => 'GoQuoteRocket'],       // Static value
    'zip' => ['field' => 'zip'],                // Direct map
]

// In submit.php
foreach ($mapping as $buyerField => $source) {
    if (isset($source['value'])) {
        $payload[$buyerField] = $source['value'];
    } elseif (isset($source['field'])) {
        $payload[$buyerField] = $formData[$source['field']] ?? '';
    }
}
```

**Benefits**:
- Different field names per buyer
- Static values without code
- Easy to add new buyers

---

## Code Organization

### Naming Conventions

| Type | Convention | Example |
|------|------------|---------|
| Classes | PascalCase | `OfferWallController` |
| Methods | camelCase | `getCarrierUrl()` |
| Variables | camelCase | `$verticalConfig` |
| Config keys | snake_case | `'landing_headline'` |
| Files | kebab-case | `offer-wall.php` |
| Directories | lowercase | `controllers/` |

### File Size Guidelines

| File Type | Target Size | Actual |
|-----------|-------------|--------|
| Controllers | 30-80 lines | 35-62 lines |
| Models | 100-200 lines | 112-198 lines |
| Templates | 150-300 lines | 67-239 lines |
| Config files | 100-400 lines | 116-356 lines |

### Code Comments

Comments are used for:
- Section headers in config files
- Complex logic explanation
- TODO markers

```php
// ============================================================
// LANDING PAGE CONFIGURATION
// ============================================================
'landing' => [
    // Main headline - appears in hero section
    'headline' => 'Auto Insurance Rates from $29/month',

    // TODO: Add A/B testing for subheadline variations
    'subheadline' => 'Compare rates in 1 minute...',
]
```

---

## Summary

The GoQuoteRocket architecture prioritizes:

1. **Simplicity**: No framework overhead, vanilla PHP
2. **Configuration over Code**: Behavior lives in config files
3. **Universality**: One template serves all verticals
4. **Separation**: Clear MVC boundaries
5. **Maintainability**: Small, focused files

This architecture allows:
- Adding new verticals in 5 minutes
- Rebranding in 5 minutes
- Safe deployments (config changes are low-risk)
- Easy onboarding for new developers
