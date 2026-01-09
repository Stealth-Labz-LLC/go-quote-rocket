# Development Guide

This document covers local development setup, testing procedures, and development workflows for GoQuoteRocket.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Local Setup](#local-setup)
- [Apache Configuration](#apache-configuration)
- [Hosts File Configuration](#hosts-file-configuration)
- [Testing Locally](#testing-locally)
- [Development Workflow](#development-workflow)
- [Debugging](#debugging)
- [Troubleshooting](#troubleshooting)
- [Code Style](#code-style)

---

## Prerequisites

### Required Software

| Software | Version | Download |
|----------|---------|----------|
| XAMPP | 8.0+ | https://www.apachefriends.org |
| Git | 2.30+ | https://git-scm.com |
| VS Code | Latest | https://code.visualstudio.com |
| Browser | Chrome/Firefox | - |

### Recommended VS Code Extensions

- PHP Intelephense
- GitLens
- EditorConfig for VS Code
- Prettier

### System Requirements

- Windows 10/11, macOS, or Linux
- 4GB RAM minimum
- Administrator access (for hosts file)

---

## Local Setup

### Step 1: Clone Repository

```bash
# Navigate to XAMPP htdocs
cd C:/xampp/htdocs

# Clone repository
git clone https://github.com/Stealth-Labz-LLC/goquoterocket.git

# Navigate to project
cd goquoterocket
```

### Step 2: Verify Project Structure

```
goquoterocket/
├── app/
├── config/
├── views/
├── public/
├── cdn/
├── api/
└── docs/
```

### Step 3: Start XAMPP

1. Open XAMPP Control Panel
2. Start **Apache**
3. Start **MySQL** (optional, not currently used)

---

## Apache Configuration

### Edit VirtualHost Config

**File**: `C:\xampp\apache\conf\extra\httpd-vhosts.conf`

Add the following at the end of the file:

```apache
# ============================================================
# GoQuoteRocket Local Development
# ============================================================

# Main Homepage
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
    </Directory>
</VirtualHost>

# Life Insurance Vertical
<VirtualHost *:80>
    ServerName life.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# Medicare Vertical
<VirtualHost *:80>
    ServerName medicare.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# Credit Card Vertical
<VirtualHost *:80>
    ServerName creditcard.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/public"

    <Directory "C:/xampp/htdocs/goquoterocket/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# API Subdomain
<VirtualHost *:80>
    ServerName api.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/api"

    <Directory "C:/xampp/htdocs/goquoterocket/api">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# CDN Subdomain
<VirtualHost *:80>
    ServerName cdn.goquoterocket.local
    DocumentRoot "C:/xampp/htdocs/goquoterocket/cdn"

    <Directory "C:/xampp/htdocs/goquoterocket/cdn">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### Enable Required Modules

**File**: `C:\xampp\apache\conf\httpd.conf`

Uncomment these lines (remove `#`):

```apache
LoadModule rewrite_module modules/mod_rewrite.so
LoadModule vhost_alias_module modules/mod_vhost_alias.so
```

### Restart Apache

In XAMPP Control Panel:
1. Click **Stop** next to Apache
2. Wait 2 seconds
3. Click **Start** next to Apache

---

## Hosts File Configuration

### Windows

**File**: `C:\Windows\System32\drivers\etc\hosts`

**Edit as Administrator**:

1. Press `Win + R`
2. Type `notepad`
3. Right-click → **Run as administrator**
4. File → Open → Navigate to hosts file
5. Change filter to **All Files (*.*)**
6. Select `hosts` and open

**Add these lines**:

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

**Save and close**.

### macOS/Linux

**File**: `/etc/hosts`

```bash
sudo nano /etc/hosts
```

Add the same entries as Windows.

### Flush DNS Cache

**Windows**:
```cmd
ipconfig /flushdns
```

**macOS**:
```bash
sudo dscacheutil -flushcache
```

**Linux**:
```bash
sudo systemctl restart systemd-resolved
```

---

## Testing Locally

### Test URLs

| URL | Expected Result |
|-----|-----------------|
| http://goquoterocket.local | Homepage with vertical cards |
| http://auto.goquoterocket.local | Auto insurance landing page |
| http://auto.goquoterocket.local/flow | Auto questionnaire |
| http://auto.goquoterocket.local/owl | Auto offer wall |
| http://life.goquoterocket.local | Life insurance landing page |
| http://medicare.goquoterocket.local | Medicare landing page |
| http://api.goquoterocket.local/submit.php | API endpoint (POST only) |
| http://cdn.goquoterocket.local/css/global.css | CSS file |

### Complete Funnel Test

1. Visit `http://auto.goquoterocket.local`
2. Click "Get My Free Quotes"
3. Complete all 7 questions:
   - ZIP: `75001`
   - Homeowner: `Yes`
   - Currently Insured: `Yes`
   - Multiple Vehicles: `No`
   - Age Range: `25-49`
   - Military: `No`
   - Contact: Fill form with test data
4. Submit form
5. Verify redirect to offer wall
6. Verify carriers display

### API Test with cURL

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -d "vertical=auto" \
  -d "given-name=Test" \
  -d "family-name=User" \
  -d "email=test@example.com" \
  -d "tel=5555551234" \
  -d "zip=75001"
```

**Expected response**:
```json
{
  "success": true,
  "vertical": "auto",
  "results": {...},
  "redirect_url": "http://auto.goquoterocket.local/owl"
}
```

### Browser Console Check

1. Open DevTools (F12)
2. Go to **Console** tab
3. Complete funnel
4. Check for:
   - `FunnelEngine initialized` message
   - No JavaScript errors
   - Tracking events logged

### Network Tab Check

1. Open DevTools (F12)
2. Go to **Network** tab
3. Complete funnel
4. Verify:
   - CSS files load (200)
   - JS files load (200)
   - Form POST succeeds (200)
   - Response is JSON

---

## Development Workflow

### Daily Workflow

```bash
# 1. Start day - pull latest
git checkout orchid_dev
git pull origin orchid_dev

# 2. Make changes
# ... edit files ...

# 3. Test locally
# Visit http://goquoterocket.local

# 4. Commit changes
git add .
git commit -m "Description of changes"

# 5. Push to staging
git push origin orchid_dev
# → Triggers staging deployment

# 6. Test on staging
# Visit https://goquoterocket.com/staging

# 7. When ready for production
git checkout main
git merge orchid_dev
git push origin main
# → Triggers production deployment
```

### Feature Development

```bash
# 1. Create feature branch (optional, local only)
git checkout -b feature/new-vertical

# 2. Develop feature
# ... make changes ...

# 3. Merge to orchid_dev
git checkout orchid_dev
git merge feature/new-vertical

# 4. Push to staging
git push origin orchid_dev
```

### Adding a New Vertical

```bash
# 1. Create vertical config
cp config/verticals/auto.php config/verticals/pet.php

# 2. Edit config
# Update id, name, questions, carriers, etc.

# 3. Add hosts entry (local testing)
# 127.0.0.1       pet.goquoterocket.local

# 4. Add VirtualHost (local testing)
# Copy existing VirtualHost block for pet subdomain

# 5. Restart Apache

# 6. Test locally
# http://pet.goquoterocket.local

# 7. Add webhook ID
# Edit config/integrations.php

# 8. Commit and push
git add .
git commit -m "Add pet insurance vertical"
git push origin orchid_dev
```

---

## Debugging

### Enable Debug Mode

**File**: `config/environment.php`

```php
define('DEBUG_MODE', true);
```

This enables:
- Error display
- Debug output in API responses
- Verbose logging

### PHP Error Logging

**View Apache error logs**:

```
C:\xampp\apache\logs\goquoterocket-error.log
C:\xampp\apache\logs\error.log
```

### Add Debug Output

```php
// In any PHP file
error_log('Debug: ' . print_r($variable, true));

// Or for quick debugging (remove before commit!)
echo '<pre>'; print_r($variable); echo '</pre>'; exit;
```

### JavaScript Debugging

```javascript
// In FunnelEngine.js or templates
console.log('Debug:', variable);
console.table(array);
debugger; // Pauses execution in DevTools
```

### Browser DevTools

| Tab | Use For |
|-----|---------|
| Console | JavaScript errors, logs |
| Network | API calls, asset loading |
| Elements | HTML/CSS inspection |
| Application | LocalStorage data |
| Sources | Breakpoints, code stepping |

### LocalStorage Inspection

1. DevTools → Application tab
2. Expand **Local Storage**
3. Select domain
4. Find `funnel_progress_auto` (or other vertical)

---

## Troubleshooting

### "This site can't be reached"

**Cause**: Hosts file not configured

**Fix**:
1. Verify hosts file entries exist
2. Run `ipconfig /flushdns`
3. Restart browser
4. Try incognito mode

### "403 Forbidden"

**Cause**: Apache permission issue

**Fix**:
1. Check VirtualHost has `Require all granted`
2. Verify DocumentRoot path is correct
3. Check file permissions (not applicable on Windows)
4. Restart Apache

### "404 Not Found" on /flow

**Cause**: mod_rewrite not enabled or .htaccess issue

**Fix**:
1. Uncomment `LoadModule rewrite_module` in httpd.conf
2. Verify `AllowOverride All` in VirtualHost
3. Check `.htaccess` exists in `public/`
4. Restart Apache

### Blank Page

**Cause**: PHP error

**Fix**:
1. Enable error display: `ini_set('display_errors', 1);`
2. Check Apache error log
3. Look for syntax errors
4. Check for missing `require` files

### JavaScript Not Loading

**Cause**: CDN subdomain issue

**Fix**:
1. Test: `http://cdn.goquoterocket.local/js/FunnelEngine.js`
2. Check VirtualHost for cdn subdomain
3. Check hosts file entry
4. Check browser Network tab for 404s

### Form Submission Fails

**Cause**: API configuration or webhook issue

**Fix**:
1. Test API directly with cURL
2. Check browser Network tab for response
3. Check `config/integrations.php`
4. Disable StealthLabz temporarily for testing

### Vertical Not Detected

**Cause**: Subdomain routing issue

**Fix**:
1. Check URL is exact: `http://auto.goquoterocket.local` (no typos)
2. Add debug in `Vertical::detect()`:
   ```php
   error_log('Host: ' . $_SERVER['HTTP_HOST']);
   ```
3. Check subdomain matches vertical ID
4. Check hosts file entry

### Wrong CSS/Colors

**Cause**: Brand config or caching

**Fix**:
1. Clear browser cache (Ctrl+Shift+R)
2. Check `config/brands/goquoterocket.php`
3. Verify CSS variable injection in template
4. Check for CSS specificity issues

---

## Code Style

### PHP

```php
<?php
// Use 4-space indentation
// Opening brace on same line
// Type hints where possible

class Vertical
{
    public static function detect(): ?string
    {
        if (condition) {
            return 'value';
        }

        return null;
    }
}
```

### JavaScript

```javascript
// Use 4-space indentation
// camelCase for variables and functions
// Prefer const/let over var
// Use template literals

class FunnelEngine {
    constructor(config) {
        this.config = config;
    }

    renderStep(index) {
        const question = this.questions[index];
        console.log(`Rendering step ${index}`);
    }
}
```

### CSS

```css
/* Use CSS custom properties */
/* BEM-like naming */
/* Mobile-first breakpoints */

.question-wrapper {
    padding: var(--spacing-4);
}

.question-wrapper__title {
    font-size: var(--font-size-2xl);
}

@media (min-width: 768px) {
    .question-wrapper {
        padding: var(--spacing-8);
    }
}
```

### Commit Messages

```
feat: Add pet insurance vertical
fix: Correct ZIP validation pattern
refactor: Simplify carrier filtering logic
docs: Update API documentation
style: Format CSS with consistent spacing
```

### File Naming

| Type | Convention | Example |
|------|------------|---------|
| PHP Classes | PascalCase | `OfferWallController.php` |
| PHP Templates | kebab-case | `offer-wall.php` |
| Config Files | snake_case | `auto.php` |
| CSS Files | kebab-case | `global.css` |
| JS Files | PascalCase | `FunnelEngine.js` |

---

## Testing Checklist

### Before Committing

- [ ] Changes work locally
- [ ] No PHP errors in log
- [ ] No JavaScript console errors
- [ ] Forms submit successfully
- [ ] Mobile responsive works
- [ ] All vertical subdomains work

### Before Pushing to Staging

- [ ] All local tests pass
- [ ] Config changes are complete
- [ ] No debug code left in
- [ ] No hardcoded URLs
- [ ] Environment detection works

### Before Merging to Main

- [ ] Staging tests pass
- [ ] Stakeholder approval (if needed)
- [ ] No console errors on staging
- [ ] Forms work end-to-end
- [ ] All verticals tested

---

## Quick Reference

### Common Commands

```bash
# Start Apache
C:\xampp\apache\bin\httpd.exe -k start

# Stop Apache
C:\xampp\apache\bin\httpd.exe -k stop

# Test Apache config
C:\xampp\apache\bin\httpd.exe -t

# Flush DNS (Windows)
ipconfig /flushdns

# View error log
tail -f C:\xampp\apache\logs\error.log
```

### Common Files

| Purpose | File |
|---------|------|
| Entry point | `public/index.php` |
| Funnel router | `public/funnel.php` |
| URL rewriting | `public/.htaccess` |
| Environment | `config/environment.php` |
| Brand config | `config/brands/goquoterocket.php` |
| Vertical config | `config/verticals/{id}.php` |
| API handler | `api/submit.php` |
| Funnel JS | `cdn/js/FunnelEngine.js` |

### Common URLs

| Purpose | Local URL |
|---------|-----------|
| Homepage | http://goquoterocket.local |
| Auto vertical | http://auto.goquoterocket.local |
| Auto flow | http://auto.goquoterocket.local/flow |
| Auto offers | http://auto.goquoterocket.local/owl |
| API | http://api.goquoterocket.local/submit.php |
| CSS | http://cdn.goquoterocket.local/css/global.css |
