# GoQuoteRocket Universal Funnel Platform

## 🚀 Ready for Local Testing

Your **100% configuration-driven** universal funnel platform is complete and ready to test!

## What's Been Built

### ✅ Complete System Components

1. **Core Architecture**
   - Universal router ([public/index.php](public/index.php))
   - MVC structure (Models, Views, Controllers)
   - Subdomain-based vertical detection
   - Auto-loader for App\ namespace

2. **Universal Templates** (Work for ALL verticals)
   - [views/templates/home.php](views/templates/home.php) - Vertical selector homepage
   - [views/templates/landing.php](views/templates/landing.php) - Landing page template
   - [views/templates/flow.php](views/templates/flow.php) - Questionnaire template
   - [views/templates/offer-wall.php](views/templates/offer-wall.php) - Offer wall template

3. **JavaScript Engine**
   - [cdn/js/FunnelEngine.js](cdn/js/FunnelEngine.js) - Universal questionnaire engine
   - Auto-advance, validation, localStorage persistence
   - Progress tracking, loading modal
   - Tracking integration (Everflow, GTM, TrustedForm)

4. **Styling**
   - [cdn/css/global.css](cdn/css/global.css) - Brand variables, base styles
   - [cdn/css/funnel.css](cdn/css/funnel.css) - Funnel-specific styles
   - Responsive design, mobile-optimized

5. **API Router**
   - [api/submit.php](api/submit.php) - Universal form submission handler
   - Routes to StealthLabz and Waypoint
   - Field mapping from config
   - JSON response with redirect URL

6. **Vertical Configurations** (4 verticals ready)
   - [config/verticals/auto.php](config/verticals/auto.php) - Auto insurance
   - [config/verticals/life.php](config/verticals/life.php) - Life insurance
   - [config/verticals/medicare.php](config/verticals/medicare.php) - Medicare plans
   - [config/verticals/creditcard.php](config/verticals/creditcard.php) - Credit cards & banking

7. **Configuration Files**
   - [config/brand.php](config/brand.php) - Single source of truth for branding
   - [config/tracking.php](config/tracking.php) - GTM, Everflow, TrustedForm
   - [config/integrations.php](config/integrations.php) - StealthLabz, Waypoint
   - [config/environment.php](config/environment.php) - Environment settings

---

## 🎯 Quick Start (Setup Required)

**Before testing, you MUST configure Apache and hosts file:**

👉 **Follow instructions in:** [SETUP-INSTRUCTIONS.md](SETUP-INSTRUCTIONS.md)

**Setup takes ~5 minutes:**
1. Add VirtualHost entries to Apache config
2. Add subdomain entries to Windows hosts file
3. Restart Apache
4. Test URLs

---

## 🌐 Test URLs (After Setup)

| URL | What It Does |
|-----|--------------|
| http://goquoterocket.local | Homepage - Vertical selector |
| http://auto.goquoterocket.local | Auto insurance funnel |
| http://life.goquoterocket.local | Life insurance funnel |
| http://medicare.goquoterocket.local | Medicare plans funnel |
| http://creditcard.goquoterocket.local | Credit cards & banking funnel |
| http://api.goquoterocket.local | API endpoint (POST to /submit.php) |
| http://cdn.goquoterocket.local | Static assets (CSS, JS, images) |

---

## 📋 Testing Workflow

### Test Auto Insurance Vertical

1. Visit: http://auto.goquoterocket.local
2. Verify landing page displays
3. Click "Get My Free Quotes"
4. Complete 7-step questionnaire:
   - ZIP code
   - Currently insured
   - Homeowner status
   - Age range
   - Marital status
   - Gender
   - Contact form
5. Submit form
6. Should redirect to offer wall with 5 carriers

### Test Other Verticals

Same workflow for:
- **Life:** http://life.goquoterocket.local
- **Medicare:** http://medicare.goquoterocket.local
- **Credit Card:** http://creditcard.goquoterocket.local

Each vertical has **different questions** and **different carriers** - all driven by config!

---

## 🎨 Key Features

### 100% Configuration Driven

**To add a new vertical:**
1. Create ONE config file in `config/verticals/newvertical.php`
2. Define questions, carriers, tracking
3. That's it! (~5 minutes)

**To rebrand:**
1. Edit `config/brand.php`
2. Change colors, company name, phone, fonts
3. Entire site updates instantly

**To change tracking:**
1. Edit `config/tracking.php`
2. Update GTM IDs, Everflow settings
3. All verticals update automatically

### Universal Templates

- **ONE landing template** works for all verticals
- **ONE flow template** works for all verticals
- **ONE offer wall template** works for all verticals
- Templates read from config arrays → zero hardcoding

### Intelligent Routing

- Detects vertical from subdomain automatically
- Routes form submissions to correct buyers
- Maps fields based on vertical config
- Redirects to appropriate offer wall

---

## 📁 Project Structure

```
goquoterocket/
├── app/                    # MVC architecture
│   ├── Core/              # Router, Controller, View
│   ├── Controllers/       # Landing, Flow, OfferWall, Home
│   └── Models/            # Vertical detection & loading
│
├── config/                # ALL configuration
│   ├── verticals/        # Per-vertical configs (auto, life, medicare, creditcard)
│   ├── brand.php         # Branding (ONE file to rebrand)
│   ├── tracking.php      # GTM, Everflow, TrustedForm
│   ├── integrations.php  # StealthLabz, Waypoint
│   └── environment.php   # Environment settings
│
├── views/                 # Universal templates
│   └── templates/        # home, landing, flow, offer-wall
│
├── public/               # WEB ROOT
│   ├── index.php        # Universal router (entry point)
│   └── .htaccess        # URL rewriting
│
├── api/                  # API endpoints
│   └── submit.php       # Universal form handler
│
├── cdn/                  # Static assets
│   ├── js/              # FunnelEngine.js
│   ├── css/             # global.css, funnel.css
│   └── images/          # Logos, carrier images
│
├── SETUP-INSTRUCTIONS.md # Complete setup guide (READ THIS FIRST!)
└── README.md            # This file
```

---

## 🔧 What's Next

### After Local Testing Succeeds:

1. **Add Carrier Logos**
   - Place carrier logo images in `cdn/images/carriers/`
   - Update config files with logo paths

2. **Configure Real Tracking**
   - Update GTM container IDs in `config/tracking.php`
   - Add Everflow network ID and event IDs
   - Add TrustedForm cert URL

3. **Set Up Real Webhooks**
   - Update StealthLabz webhook IDs in `config/integrations.php`
   - Update Waypoint endpoint URL
   - Test API submissions

4. **Migrate SageWise Content**
   - Update `config/verticals/auto.php` with exact SageWise copy
   - Copy testimonials, headlines, carrier data
   - Copy carrier logo files

5. **Add More Verticals**
   - Create `health.php`, `home.php`, etc.
   - Follow same config pattern as existing verticals

6. **Production Deployment**
   - Update `config/environment.php` to production mode
   - Set up DNS for subdomains
   - Configure SSL certificates
   - Deploy to production server

---

## 🎓 How It Works

### Subdomain Detection

When you visit `http://auto.goquoterocket.local`:

1. Apache routes to `public/index.php` (same for ALL subdomains)
2. `Vertical::detect()` parses subdomain → returns `'auto'`
3. Router loads `config/verticals/auto.php`
4. Passes config to appropriate controller
5. Controller renders universal template with config data

### Configuration-Driven Rendering

Landing page template:
```php
<h1><?= $vertical['landing']['headline'] ?></h1>
```

Flow page questionnaire:
```javascript
const funnel = new FunnelEngine({
    questions: <?= json_encode($vertical['flow']['questions']) ?>
});
```

Offer wall carriers:
```php
<?php foreach ($carriers as $carrier): ?>
    <div class="carrier-card"><?= $carrier['name'] ?></div>
<?php endforeach; ?>
```

**Everything** reads from config → **zero hardcoding**!

---

## 🐛 Troubleshooting

If something doesn't work:

1. **Check Apache/hosts setup:** See [SETUP-INSTRUCTIONS.md](SETUP-INSTRUCTIONS.md)
2. **Check Apache error logs:** `C:\xampp\apache\logs\goquoterocket-error.log`
3. **Check browser console:** F12 → Console tab for JavaScript errors
4. **Test API directly:** POST to http://api.goquoterocket.local/submit.php
5. **Enable debug mode:** Set `'debug' => true` in `config/environment.php`

See full troubleshooting guide in [SETUP-INSTRUCTIONS.md](SETUP-INSTRUCTIONS.md)

---

## 📊 System Benefits

✅ **ONE codebase** serves unlimited verticals
✅ **Add vertical in 5 minutes** (ONE config file)
✅ **Rebrand in 5 minutes** (ONE brand file)
✅ **Zero code duplication** (DRY principle)
✅ **Maintainable** (clear separation of concerns)
✅ **Scalable** (add 50 verticals, same codebase)
✅ **Testable** (config-driven = easy testing)
✅ **SEO-friendly** (subdomain architecture)

---

## 📝 Files Created This Session

### Core System
- `public/index.php` - Universal router
- `public/.htaccess` - URL rewriting
- `views/templates/home.php` - Homepage
- `views/templates/landing.php` - Landing page template
- `views/templates/flow.php` - Flow page template
- `views/templates/offer-wall.php` - Offer wall template

### JavaScript & CSS
- `cdn/js/FunnelEngine.js` - Universal questionnaire engine (~400 lines)
- `cdn/css/global.css` - Brand variables & base styles
- `cdn/css/funnel.css` - Funnel-specific styles

### API
- `api/submit.php` - Universal form handler with routing

### Vertical Configs
- `config/verticals/medicare.php` - Medicare vertical (NEW)
- `config/verticals/creditcard.php` - Credit card vertical (NEW)

### Documentation
- `SETUP-INSTRUCTIONS.md` - Complete setup guide
- `README.md` - This file

---

## 🎉 You're Ready!

**Next Step:** Follow [SETUP-INSTRUCTIONS.md](SETUP-INSTRUCTIONS.md) to configure Apache and test locally.

**Expected Time:** ~10 minutes for setup, then fully functional universal funnel platform!

---

*Built with Claude Code - 100% configuration-driven architecture* 🚀
# Test deployment trigger
