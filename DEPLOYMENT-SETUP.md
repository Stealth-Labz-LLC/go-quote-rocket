# GoQuoteRocket.com Deployment Setup

## Overview
This is the **US version** of Quote Rocket deployed to **goquoterocket.com**.

This is a **SEPARATE repository** from the South African version (quoterocket).

## Server Information
- **Domain:** goquoterocket.com
- **cPanel:** https://host.stealthlabz.com:2083/
- **cPanel Username:** goquoterocket

## Branch Strategy

### Simple Two-Branch Setup:
- **`dev`** → Auto-deploys to `/public_html/staging/` (staging site)
- **`main`** → Auto-deploys to `/public_html/` (production/live site)

## Step 1: Add GitHub Secrets

### Go to GitHub Repository Settings:
1. Navigate to: `https://github.com/Stealth-Labz-LLC/goquoterocket`
2. Click **Settings** (top tab)
3. Click **Secrets and variables** → **Actions** (left sidebar)
4. Click **"New repository secret"**

### Add These 5 Secrets:

| Secret Name | Value | Notes |
|-------------|-------|-------|
| `FTP_HOST` | `host.stealthlabz.com` | Your cPanel server hostname |
| `FTP_USER` | `goquoterocket` | Your cPanel username |
| `FTP_PASS` | `[your password]` | Your cPanel password |
| `SSH_PORT` | `22` | Default SSH/SFTP port |
| `SFTP_PROTOCOL` | `sftp` | Use secure FTP |

⚠️ **Important:** Use the exact names above (without `US_` prefix)

## Step 2: Push Code to GitHub

If this is your **first time** pushing to goquoterocket repo:

```bash
# Make sure you're in the quote-rocket directory
cd /c/xampp/htdocs/quote-rocket

# Check current remote
git remote -v

# If it shows the old quoterocket remote, remove it
git remote remove origin

# Add the goquoterocket remote
git remote add origin https://github.com/Stealth-Labz-LLC/goquoterocket.git

# Create and push main branch
git branch -M main
git add .
git commit -m "Initial commit - GoQuoteRocket US site"
git push -u origin main
```

## Step 3: Create Dev Branch

```bash
# Create dev branch from main
git checkout -b dev
git push -u origin dev
```

## Step 4: Test Deployment to Staging

```bash
# Make sure you're on dev branch
git checkout dev

# Make a small test change (example)
echo "<!-- Test deployment -->" >> index.php

# Commit and push
git add .
git commit -m "Test: First deployment to staging"
git push origin dev
```

This will automatically trigger deployment to `/public_html/staging/`

## Step 5: Check Deployment Status

1. Go to: `https://github.com/Stealth-Labz-LLC/goquoterocket/actions`
2. You should see your workflow running
3. Click on it to see deployment progress
4. Wait for green checkmark ✅

## Step 6: Verify Staging Site

- Visit your staging URL (usually `goquoterocket.com/staging` or subdomain)
- Check that files uploaded correctly
- Test the site functionality

## Step 7: Deploy to Production

When you're ready to deploy to production:

```bash
# Method 1: Create Pull Request (Recommended)
# 1. Go to GitHub
# 2. Create PR from dev → main
# 3. Review changes
# 4. Merge PR
# 5. Auto-deploys to /public_html/

# Method 2: Direct push to main (Quick method)
git checkout main
git merge dev
git push origin main
```

This will automatically deploy to `/public_html/` (your live site)

## How It Works

### Automatic Deployment Triggers:
- ✅ Push to `dev` branch → Deploy to staging
- ✅ Merge PR to `main` branch → Deploy to production
- ✅ Direct push to `main` → Deploy to production

### What Gets Deployed:
- All PHP files
- All HTML/CSS/JS files
- Images and assets
- Configuration files (except .env)

### What Gets Excluded:
- `.git/` and `.github/` folders
- `node_modules/`
- `tests/`
- `.env` files
- `storage/logs/*`

## Troubleshooting

### ❌ Deployment Fails with "Authentication failed"
**Solution:**
- Check that all 5 GitHub Secrets are added correctly
- Verify `FTP_USER` and `FTP_PASS` match your cPanel credentials
- Try logging into cPanel manually to confirm password

### ❌ Deployment Fails with "Permission denied"
**Solution:**
- Verify the cPanel user has write access to `/public_html/`
- Check folder permissions in cPanel File Manager
- Contact hosting support if needed

### ❌ Files not uploading
**Solution:**
- Check GitHub Actions logs for specific errors
- Verify `FTP_HOST` is correct (`host.stealthlabz.com`)
- Check if SFTP is enabled (try `SFTP_PROTOCOL = ftp` if not)

### ❌ Wrong files on server
**Solution:**
- Check you pushed to the correct branch
- Review the exclude list in `.github/workflows/deploy.yml`
- Manually delete unwanted files via cPanel File Manager

## Daily Workflow

### Working on new features:
```bash
# 1. Work on dev branch
git checkout dev

# 2. Make changes
# ... edit files ...

# 3. Test locally
# ... test in XAMPP ...

# 4. Commit and push
git add .
git commit -m "Add new feature"
git push origin dev

# 5. Auto-deploys to staging
# 6. Test on staging site
# 7. If good, create PR to main for production
```

## Need to Update Domain References?

The current codebase has references to `quoterocket.co.za`. You'll need to update:
- `sitemap.xml` - Change all URLs to `goquoterocket.com`
- `robots.txt` - Update sitemap URL
- `mail-action.php` - Update email configuration
- `footer.php` - Update support email
- `contact.php` - Update support email

Create a config file to make this easier in the future!

## Support

- **GitHub Actions:** Check the Actions tab for deployment logs
- **cPanel:** https://host.stealthlabz.com:2083/
- **Server Issues:** Contact Stealthlabz hosting support
