# GoQuoteRocket Universal Funnel Platform - Setup Instructions

## Overview

This document provides complete setup instructions for running the GoQuoteRocket universal funnel platform on your local XAMPP environment.

## System Architecture

The GoQuoteRocket platform is a **100% configuration-driven** universal funnel system where:
- **ONE codebase** serves ALL verticals (Auto, Life, Medicare, Credit Card)
- **Subdomain-based routing** (auto.goquoterocket.local, medicare.goquoterocket.local, etc.)
- **Adding a new vertical** = Creating ONE config file (~100 lines)
- **Universal templates** work for all verticals by reading from config arrays

---

## Prerequisites

- XAMPP installed at `C:\xampp\`
- Apache and PHP running
- Administrator access to edit system files

---

## Step 1: Apache VirtualHost Configuration

### Edit Apache Configuration File

Open: `C:\xampp\apache\conf\extra\httpd-vhosts.conf`

**Add the following VirtualHost entries at the end of the file:**

```apache
# ============================================================
# GoQuoteRocket Universal Funnel Platform - VirtualHosts
# ============================================================

# Main Homepage (Vertical Selector)
<VirtualHost *:80>
    ServerName goquoterocket.local
    ServerAlias www.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-error.log"
    CustomLog "logs/goquoterocket-access.log" common
</VirtualHost>

# Auto Insurance Vertical
<VirtualHost *:80>
    ServerName auto.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-auto-error.log"
    CustomLog "logs/goquoterocket-auto-access.log" common
</VirtualHost>

# Life Insurance Vertical
<VirtualHost *:80>
    ServerName life.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-life-error.log"
    CustomLog "logs/goquoterocket-life-access.log" common
</VirtualHost>

# Medicare Insurance Vertical
<VirtualHost *:80>
    ServerName medicare.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-medicare-error.log"
    CustomLog "logs/goquoterocket-medicare-access.log" common
</VirtualHost>

# Credit Card Vertical
<VirtualHost *:80>
    ServerName creditcard.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-creditcard-error.log"
    CustomLog "logs/goquoterocket-creditcard-access.log" common
</VirtualHost>

# API Subdomain
<VirtualHost *:80>
    ServerName api.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/api"

    <Directory "C:/xampp/htdocs/goquoterocket/api">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-api-error.log"
    CustomLog "logs/goquoterocket-api-access.log" common
</VirtualHost>

# CDN Subdomain (Static Assets)
<VirtualHost *:80>
    ServerName cdn.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/cdn"

    <Directory "C:/xampp/htdocs/goquoterocket/cdn">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>

    ErrorLog "logs/goquoterocket-cdn-error.log"
    CustomLog "logs/goquoterocket-cdn-access.log" common
</VirtualHost>
```

---

## Step 2: Windows Hosts File Configuration

### Edit Hosts File

**Location:** `C:\Windows\System32\drivers\etc\hosts`

**IMPORTANT:** You must run Notepad (or your text editor) as **Administrator** to edit this file.

**Add the following lines at the end of the file:**

```
# GoQuoteRocket Local Development
127.0.0.1       goquoterocket.local
127.0.0.1       www.goquoterocket.local
127.0.0.1       auto.goquoterocket.local
127.0.0.1       life.goquoterocket.local
127.0.0.1       medicare.goquoterocket.local
127.0.0.1       creditcard.goquoterocket.local
127.0.0.1       api.goquoterocket.local
127.0.0.1       cdn.goquoterocket.local
```

### How to Edit Hosts File

1. Press `Win + R`, type `notepad`, right-click and select "Run as administrator"
2. In Notepad: File → Open → Navigate to `C:\Windows\System32\drivers\etc\`
3. Change file filter from "Text Documents (*.txt)" to "All Files (*.*)"
4. Select `hosts` file and click Open
5. Add the lines above
6. Save and close

---

## Step 3: Restart Apache

After making the configuration changes, restart Apache:

### Option A: XAMPP Control Panel
1. Open XAMPP Control Panel
2. Click "Stop" next to Apache
3. Wait 2-3 seconds
4. Click "Start" next to Apache

### Option B: Command Line
```bash
# Stop Apache
C:\xampp\apache\bin\httpd.exe -k stop

# Start Apache
C:\xampp\apache\bin\httpd.exe -k start
```

---

## Step 4: Verify Setup

### Test Homepage (Vertical Selector)

**URL:** http://goquoterocket.local

**Expected Result:**
- Homepage displays with "GoQuoteRocket" branding
- Shows cards for all enabled verticals (Auto, Life, Medicare, Credit Card)
- Clicking a vertical card redirects to that vertical's subdomain

### Test Auto Insurance Vertical

**URL:** http://auto.goquoterocket.local

**Expected Result:**
- Landing page displays with auto insurance headline
- Shows "Compare Auto Insurance Quotes" content
- "Get My Free Quotes" button links to `/flow`
- Displays auto insurance carrier logos (State Farm, Progressive, GEICO, etc.)

**Test Flow:**
1. Click "Get My Free Quotes"
2. Should redirect to: http://auto.goquoterocket.local/flow
3. Progress bar should display
4. Complete questionnaire (7 steps):
   - ZIP code
   - Currently insured
   - Homeowner status
   - Age range
   - Marital status
   - Gender
   - Contact form
5. After submission, should redirect to offer wall (`/owl`)
6. Should display 5 carrier cards

### Test Life Insurance Vertical

**URL:** http://life.goquoterocket.local

**Expected Result:**
- Landing page displays with life insurance headline
- Shows "Compare Life Insurance Quotes" content
- Different carriers than auto (Mutual of Omaha, Prudential, etc.)

**Test Flow:**
1. Click "Get My Free Quotes"
2. Complete questionnaire (different questions than auto):
   - ZIP code
   - Coverage amount
   - Tobacco use
   - Health rating
   - Gender
   - Contact form
3. Should redirect to offer wall with life insurance carriers

### Test Medicare Vertical

**URL:** http://medicare.goquoterocket.local

**Expected Result:**
- Landing page displays with Medicare headline
- Shows "Compare Medicare Plans" content
- Medicare-specific carriers (AARP/UnitedHealthcare, Humana, etc.)

**Test Flow:**
1. Click "Compare Medicare Plans"
2. Complete questionnaire:
   - ZIP code
   - Age (65+ filter)
   - Currently have Part A & B
   - Plan type interest
   - Prescription drugs
   - Gender
   - Contact form
3. Should redirect to offer wall with Medicare providers

### Test Credit Card Vertical

**URL:** http://creditcard.goquoterocket.local

**Expected Result:**
- Landing page displays with credit card headline
- Shows "Compare Credit Cards & Banking" content
- Financial offers (Chime, Cash App, SoFi, Discover, etc.)

**Test Flow:**
1. Click "Compare Card Offers"
2. Complete questionnaire:
   - ZIP code
   - Credit score range
   - Primary interest (cash back, travel, etc.)
   - Income range
   - Currently have card
   - Employment status
   - Contact form
3. Should redirect to offer wall with credit card/banking offers

### Test API Endpoint

**URL:** http://api.goquoterocket.local/submit.php

**Test with cURL:**

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -d "vertical=auto" \
  -d "zip_code=90210" \
  -d "first_name=John" \
  -d "last_name=Smith" \
  -d "email=john@example.com" \
  -d "phone=5555555555"
```

**Expected Response:**
```json
{
  "success": true,
  "vertical": "auto",
  "results": {
    "stealthlabz": {
      "success": true,
      "http_code": 200
    }
  },
  "redirect_url": "http://auto.goquoterocket.local/owl"
}
```

### Test CDN Assets

**URL:** http://cdn.goquoterocket.local/css/global.css

**Expected Result:**
- CSS file loads successfully
- Contains brand color variables

**URL:** http://cdn.goquoterocket.local/js/FunnelEngine.js

**Expected Result:**
- JavaScript file loads successfully
- Contains FunnelEngine class

---

## Step 5: Browser Console Testing

When testing the flow pages, open browser Developer Tools (F12) and check:

### Console Tab
- No JavaScript errors
- Should see: `"FunnelEngine initialized"`
- Should see tracking events firing: `"Tracking form_start event"`

### Network Tab
- Flow page should load: `global.css`, `funnel.css`, `FunnelEngine.js`
- Everflow SDK should load (if configured)
- GTM should load (if configured)
- Form submission should POST to `/api/submit.php`

### Application/Storage Tab
- localStorage should contain `funnel_progress_auto` (or other vertical ID)
- Should see saved user data as questionnaire progresses

---

## Directory Structure Reference

```
goquoterocket/
├── app/
│   ├── Core/
│   │   ├── Router.php              ✓ Routes requests to controllers
│   │   ├── Controller.php          ✓ Base controller class
│   │   └── View.php                ✓ Template renderer
│   ├── Controllers/
│   │   ├── LandingController.php   ✓ Renders landing pages
│   │   ├── FlowController.php      ✓ Renders flow pages
│   │   ├── OfferWallController.php ✓ Renders offer walls
│   │   └── HomeController.php      ✓ Renders homepage
│   └── Models/
│       └── Vertical.php            ✓ Vertical detection & loading
│
├── config/
│   ├── environment.php             ✓ Environment settings
│   ├── brand.php                   ✓ Single source of truth for branding
│   ├── tracking.php                ✓ GTM, Everflow, TrustedForm config
│   ├── integrations.php            ✓ StealthLabz, Waypoint config
│   └── verticals/
│       ├── auto.php                ✓ Auto insurance config
│       ├── life.php                ✓ Life insurance config
│       ├── medicare.php            ✓ Medicare config
│       └── creditcard.php          ✓ Credit card config
│
├── views/
│   ├── templates/
│   │   ├── home.php                ✓ Homepage vertical selector
│   │   ├── landing.php             ✓ Universal landing page
│   │   ├── flow.php                ✓ Universal questionnaire
│   │   └── offer-wall.php          ✓ Universal offer wall
│   └── components/
│       (Future: header.php, footer.php, carrier-card.php)
│
├── public/                          ✓ WEB ROOT
│   ├── index.php                   ✓ Universal router
│   └── .htaccess                   ✓ URL rewriting
│
├── api/
│   └── submit.php                  ✓ Universal form handler
│
├── cdn/
│   ├── js/
│   │   └── FunnelEngine.js         ✓ Universal questionnaire engine
│   ├── css/
│   │   ├── global.css              ✓ Brand variables & base styles
│   │   └── funnel.css              ✓ Funnel-specific styles
│   └── images/
│       ├── brand/                  (Future: logos)
│       └── carriers/               (Future: carrier logos)
│
└── SETUP-INSTRUCTIONS.md           ✓ This file
```

---

## Troubleshooting

### Issue: "This site can't be reached" or "DNS_PROBE_FINISHED_NXDOMAIN"

**Cause:** Hosts file not configured or not saved properly

**Solution:**
1. Verify hosts file entries exist
2. Ensure you saved as Administrator
3. Try flushing DNS cache:
   ```bash
   ipconfig /flushdns
   ```
4. Restart browser

---

### Issue: "403 Forbidden" Error

**Cause:** Apache doesn't have permission to access directory

**Solution:**
1. Verify VirtualHost `<Directory>` section includes `Require all granted`
2. Check file permissions on `C:\xampp\htdocs\goquoterocket\`
3. Restart Apache

---

### Issue: "404 Not Found" on Flow or Offer Wall Pages

**Cause:** `.htaccess` file not working (mod_rewrite disabled)

**Solution:**
1. Verify `.htaccess` exists in `public/` directory
2. Enable mod_rewrite in Apache:
   - Open `C:\xampp\apache\conf\httpd.conf`
   - Find line: `#LoadModule rewrite_module modules/mod_rewrite.so`
   - Remove `#` to uncomment it
   - Save and restart Apache
3. Verify `AllowOverride All` is set in VirtualHost configuration

---

### Issue: Blank Page or PHP Errors

**Cause:** PHP errors or missing files

**Solution:**
1. Check Apache error log:
   - `C:\xampp\apache\logs\goquoterocket-error.log`
   - `C:\xampp\apache\logs\goquoterocket-auto-error.log`
2. Enable PHP error display temporarily:
   - Edit `config/environment.php`
   - Set `'debug' => true`
3. Check for missing files or typos in `require` paths

---

### Issue: JavaScript Not Loading or Errors

**Cause:** CDN subdomain not configured or files missing

**Solution:**
1. Test CDN directly: http://cdn.goquoterocket.local/js/FunnelEngine.js
2. Check browser console (F12) for 404 errors
3. Verify VirtualHost for cdn.goquoterocket.local is configured
4. Check file paths in flow.php template

---

### Issue: Form Submission Fails

**Cause:** API not configured or StealthLabz webhook issue

**Solution:**
1. Test API directly: http://api.goquoterocket.local/submit.php
2. Check browser Network tab for POST request response
3. Verify `integrations.php` has correct StealthLabz webhook IDs
4. Check API error log: `C:\xampp\apache\logs\goquoterocket-api-error.log`
5. For testing, can temporarily disable StealthLabz routing:
   ```php
   // In config/verticals/auto.php
   'routing' => [
       'stealthlabz' => [
           'enabled' => false,  // Temporarily disable for testing
       ]
   ]
   ```

---

### Issue: Vertical Not Detected (Always Shows Homepage)

**Cause:** Subdomain not routing correctly

**Solution:**
1. Verify URL is exactly: http://auto.goquoterocket.local (not http://auto.goquoterocket.local.com)
2. Check `app/Models/Vertical.php` - `detect()` method should parse subdomain correctly
3. Test detection by adding debug output:
   ```php
   // In public/index.php, after line 33:
   error_log('Detected vertical: ' . ($vertical ?? 'NONE'));
   error_log('Host: ' . $_SERVER['HTTP_HOST']);
   ```
   Then check: `C:\xampp\apache\logs\error.log`

---

### Issue: Styles Not Applied

**Cause:** CSS files not loading or path issues

**Solution:**
1. View page source and check CSS link URLs
2. Click CSS links to verify they load
3. Check if using correct subdomain: http://cdn.goquoterocket.local/css/global.css
4. Verify `buildUrl()` function in `config/environment.php`
5. Check browser DevTools → Network tab for 404s

---

## Testing Checklist

Use this checklist to verify complete functionality:

### Homepage Testing
- [ ] Homepage loads at http://goquoterocket.local
- [ ] All 4 verticals display (Auto, Life, Medicare, Credit Card)
- [ ] Clicking each vertical redirects to correct subdomain
- [ ] GoQuoteRocket branding displays correctly
- [ ] Phone number displays from brand config

### Auto Vertical Testing
- [ ] Landing page loads at http://auto.goquoterocket.local
- [ ] Auto insurance headline displays
- [ ] Benefits list displays
- [ ] Carrier logos display
- [ ] CTA button links to /flow
- [ ] Flow page loads with progress bar
- [ ] All 7 questions render correctly
- [ ] ZIP validation works
- [ ] Auto-advance works on radio buttons
- [ ] Contact form validates email/phone
- [ ] Form submits successfully
- [ ] Redirects to offer wall
- [ ] 5 auto carriers display on offer wall
- [ ] Carrier click tracking fires

### Life Vertical Testing
- [ ] Landing page loads at http://life.goquoterocket.local
- [ ] Life insurance headline displays
- [ ] Different questions than auto vertical
- [ ] Life-specific carriers display
- [ ] Form submission works
- [ ] Offer wall displays life carriers

### Medicare Vertical Testing
- [ ] Landing page loads at http://medicare.goquoterocket.local
- [ ] Medicare headline displays
- [ ] Age 65+ question displays
- [ ] Medicare-specific carriers display
- [ ] Form submission works

### Credit Card Vertical Testing
- [ ] Landing page loads at http://creditcard.goquoterocket.local
- [ ] Credit card headline displays
- [ ] Credit score question displays
- [ ] Financial offers display (Chime, Cash App, etc.)
- [ ] Form submission works

### API Testing
- [ ] API accessible at http://api.goquoterocket.local/submit.php
- [ ] POST submission returns JSON
- [ ] StealthLabz routing works (check response)
- [ ] Correct redirect URL returned

### CDN Testing
- [ ] CSS loads from http://cdn.goquoterocket.local/css/global.css
- [ ] JavaScript loads from http://cdn.goquoterocket.local/js/FunnelEngine.js
- [ ] Brand colors applied correctly
- [ ] Funnel styles applied correctly

---

## Next Steps After Setup

Once local setup is complete and tested:

1. **Add More Verticals:** Create new config files in `config/verticals/`
2. **Customize Branding:** Edit `config/brand.php`
3. **Add Carrier Logos:** Place images in `cdn/images/carriers/`
4. **Configure Tracking:** Update GTM IDs, Everflow settings in `config/tracking.php`
5. **Set Up Webhooks:** Update StealthLabz webhook IDs in `config/integrations.php`
6. **Create Components:** Build reusable components in `views/components/`
7. **Production Deployment:** Update `config/environment.php` to production settings

---

## Production Deployment Notes

When deploying to production:

1. **Update environment.php:**
   ```php
   define('ENVIRONMENT', 'production');
   define('BASE_DOMAIN', 'goquoterocket.com');
   define('USE_HTTPS', true);
   define('DEBUG_MODE', false);
   ```

2. **DNS Configuration:**
   - Point all subdomains (auto, life, medicare, etc.) to same server IP
   - All subdomains should point to same document root: `/public/`

3. **Apache VirtualHost (Production):**
   ```apache
   <VirtualHost *:443>
       ServerName goquoterocket.com
       ServerAlias *.goquoterocket.com
       DocumentRoot "/var/www/goquoterocket/public"

       SSLEngine on
       SSLCertificateFile /path/to/cert.pem
       SSLCertificateKeyFile /path/to/key.pem
   </VirtualHost>
   ```

4. **Security:**
   - Enable HTTPS (SSL certificate)
   - Set proper file permissions (644 for files, 755 for directories)
   - Disable error display: `ini_set('display_errors', 0);`
   - Enable error logging to file

---

## Support & Documentation

- **Plan File:** `C:\Users\themi\.claude\plans\swift-humming-wand.md`
- **Apache Logs:** `C:\xampp\apache\logs\`
- **PHP Errors:** Check error logs per vertical in Apache logs directory

---

## Summary

You now have a **100% configuration-driven universal funnel platform** where:

✅ **ONE codebase** serves all verticals
✅ **Subdomain routing** automatically detects vertical
✅ **Adding a vertical** = Creating ONE config file
✅ **Rebranding** = Editing ONE brand config file
✅ **Universal templates** read from config arrays
✅ **JavaScript engine** renders any question configuration
✅ **API router** handles all vertical submissions

**To test:** Visit http://goquoterocket.local and explore each vertical!

---

*Setup complete! The system is ready for local testing and development.* 🚀
