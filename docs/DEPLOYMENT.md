# Deployment Guide

This document covers deployment workflows, GitHub Actions CI/CD, environment configuration, and hosting setup.

## Table of Contents

- [Overview](#overview)
- [Environments](#environments)
- [GitHub Actions Workflow](#github-actions-workflow)
- [GitHub Secrets](#github-secrets)
- [Branch Strategy](#branch-strategy)
- [Deployment Process](#deployment-process)
- [Server Configuration](#server-configuration)
- [Troubleshooting](#troubleshooting)

---

## Overview

GoQuoteRocket uses **GitHub Actions** for automated deployments:

```
┌─────────────────┐     ┌─────────────────┐     ┌─────────────────┐
│   Developer     │     │   GitHub        │     │   cPanel        │
│   Push Code     │ ──▶ │   Actions       │ ──▶ │   Server        │
└─────────────────┘     └─────────────────┘     └─────────────────┘
       │                        │                        │
       │   orchid_dev          │   Deploy               │   /public_html/staging/
       │   branch              │   Workflow             │
       │                        │                        │
       │   main                │   Deploy               │   /public_html/
       │   branch              │   Workflow             │
       └────────────────────────────────────────────────┘
```

### Key Information

| Item | Value |
|------|-------|
| **Domain** | goquoterocket.com |
| **Hosting** | cPanel at host.stealthlabz.com |
| **cPanel Username** | goquoterocket |
| **Repository** | github.com/Stealth-Labz-LLC/goquoterocket |
| **CI/CD** | GitHub Actions with SFTP deployment |

---

## Environments

### Environment Detection

The system auto-detects environment based on hostname and request URI:

```php
// config/environment.php
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

$isLocal = strpos($host, '.local') !== false
        || strpos($host, 'localhost') !== false;

$isStaging = strpos($requestUri, '/staging/') === 0
          || strpos($host, 'staging.') === 0;

define('ENVIRONMENT', $isLocal ? 'local' : ($isStaging ? 'staging' : 'production'));
```

### Environment Settings

| Setting | Local | Staging | Production |
|---------|-------|---------|------------|
| ENVIRONMENT | `local` | `staging` | `production` |
| BASE_DOMAIN | `quoterocket.local` | `goquoterocket.com` | `goquoterocket.com` |
| USE_HTTPS | `false` | `true` | `true` |
| DEBUG_MODE | `true` | `true` | `false` |
| BASE_PATH | `/goquoterocket/public` | `/staging` | `''` |

### URL Examples by Environment

| Environment | CDN URL | API URL |
|-------------|---------|---------|
| Local | `/goquoterocket/public/cdn/...` | `/goquoterocket/api/...` |
| Staging | `/cdn/...` | `/api/...` |
| Production | `https://cdn.goquoterocket.com/...` | `https://api.goquoterocket.com/...` |

---

## GitHub Actions Workflow

### Workflow File

**Location**: `.github/workflows/deploy.yml`

```yaml
name: Deploy to Server

on:
  push:
    branches:
      - orchid_dev    # Triggers staging deploy
      - main          # Triggers production deploy
  pull_request:
    branches:
      - main          # Triggers production deploy on PR merge

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      # Step 1: Checkout code
      - name: Checkout repository
        uses: actions/checkout@v4
        with:
          fetch-depth: 0

      # Step 2: Restore file modification times
      - name: Restore mtimes
        uses: chetan/git-restore-mtime-action@v2

      # Step 3: Determine deploy settings
      - name: Set deploy variables
        id: deploy-settings
        run: |
          if [[ "${{ github.ref }}" == "refs/heads/orchid_dev" ]]; then
            echo "REMOTE_PATH=/public_html/staging/public/" >> $GITHUB_OUTPUT
            echo "DEPLOY_ENV=staging" >> $GITHUB_OUTPUT
          else
            echo "REMOTE_PATH=/public_html/" >> $GITHUB_OUTPUT
            echo "DEPLOY_ENV=production" >> $GITHUB_OUTPUT
          fi

      # Step 4: Add SSH host key
      - name: Setup SSH known_hosts
        run: |
          mkdir -p ~/.ssh
          ssh-keyscan -p ${{ secrets.SSH_PORT }} ${{ secrets.FTP_HOST }} >> ~/.ssh/known_hosts

      # Step 5: Install lftp
      - name: Install lftp
        run: sudo apt-get install -y lftp

      # Step 6: Deploy via SFTP
      - name: Deploy to server
        env:
          FTP_HOST: ${{ secrets.FTP_HOST }}
          FTP_USER: ${{ secrets.FTP_USER }}
          FTP_PASS: ${{ secrets.FTP_PASS }}
          SSH_PORT: ${{ secrets.SSH_PORT }}
          REMOTE_PATH: ${{ steps.deploy-settings.outputs.REMOTE_PATH }}
        run: |
          lftp -c "
            set sftp:connect-program 'ssh -p $SSH_PORT';
            open -u $FTP_USER,$FTP_PASS sftp://$FTP_HOST;
            mirror -R --parallel=3 --verbose \
              --exclude .git/ \
              --exclude .github/ \
              --exclude node_modules/ \
              --exclude tests/ \
              --exclude .env \
              --exclude .env.* \
              --exclude storage/logs/ \
              ./public $REMOTE_PATH;
            bye;
          "

      # Step 7: Log deployment
      - name: Deployment summary
        run: |
          echo "✅ Deployed to ${{ steps.deploy-settings.outputs.DEPLOY_ENV }}"
          echo "📁 Remote path: ${{ steps.deploy-settings.outputs.REMOTE_PATH }}"
          echo "🕐 Deployed at: $(date)"
```

### Workflow Triggers

| Trigger | Branch | Environment | Remote Path |
|---------|--------|-------------|-------------|
| Push | `orchid_dev` | Staging | `/public_html/staging/public/` |
| Push | `main` | Production | `/public_html/` |
| PR Merge | `main` | Production | `/public_html/` |

### What Gets Deployed

**Included**:
- All PHP files
- HTML, CSS, JavaScript files
- Images and assets
- Configuration files (except .env)

**Excluded**:
- `.git/` - Git history
- `.github/` - GitHub workflows
- `node_modules/` - Node dependencies
- `tests/` - Test files
- `.env`, `.env.*` - Environment secrets
- `storage/logs/` - Log files

---

## GitHub Secrets

### Required Secrets

Navigate to: **Repository → Settings → Secrets and variables → Actions**

| Secret Name | Value | Description |
|-------------|-------|-------------|
| `FTP_HOST` | `host.stealthlabz.com` | cPanel server hostname |
| `FTP_USER` | `goquoterocket` | cPanel username |
| `FTP_PASS` | `[your password]` | cPanel password |
| `SSH_PORT` | `22` | SSH/SFTP port |
| `SFTP_PROTOCOL` | `sftp` | Connection protocol |

### Adding Secrets

1. Go to repository on GitHub
2. Click **Settings** tab
3. Click **Secrets and variables** → **Actions**
4. Click **New repository secret**
5. Enter name and value
6. Click **Add secret**

### Security Notes

- Secrets are encrypted by GitHub
- Secrets are never exposed in logs
- Only repository admins can view/edit secrets
- Never commit credentials to code

---

## Branch Strategy

### Two-Branch Setup

```
main (production)
│
├── orchid_dev (staging/development)
│   └── feature branches (local only)
```

### Branch Purposes

| Branch | Environment | URL | Purpose |
|--------|-------------|-----|---------|
| `main` | Production | goquoterocket.com | Live site |
| `orchid_dev` | Staging | goquoterocket.com/staging | Testing |

### Development Workflow

```bash
# 1. Work on orchid_dev branch
git checkout orchid_dev

# 2. Make changes
# ... edit files ...

# 3. Test locally
# http://goquoterocket.local

# 4. Commit and push to staging
git add .
git commit -m "Add new feature"
git push origin orchid_dev
# → Auto-deploys to staging

# 5. Test on staging
# https://goquoterocket.com/staging

# 6. When ready, merge to main
git checkout main
git merge orchid_dev
git push origin main
# → Auto-deploys to production
```

### Alternative: Pull Request Workflow

```bash
# 1. Push changes to orchid_dev
git push origin orchid_dev

# 2. Create PR on GitHub
# orchid_dev → main

# 3. Review changes in PR

# 4. Merge PR
# → Auto-deploys to production
```

---

## Deployment Process

### Staging Deployment

```bash
# Ensure you're on orchid_dev
git checkout orchid_dev

# Make changes
git add .
git commit -m "Descriptive message"

# Push triggers deployment
git push origin orchid_dev
```

**Deployment target**: `/public_html/staging/public/`

**Test URL**: `https://goquoterocket.com/staging`

### Production Deployment

**Option 1: Direct push**

```bash
git checkout main
git merge orchid_dev
git push origin main
```

**Option 2: Pull Request**

1. Go to GitHub repository
2. Create PR: `orchid_dev` → `main`
3. Review changes
4. Click **Merge pull request**

**Deployment target**: `/public_html/`

**Live URL**: `https://goquoterocket.com`

### Checking Deployment Status

1. Go to repository on GitHub
2. Click **Actions** tab
3. Find your workflow run
4. Click to see details
5. Wait for green checkmark ✅

### Deployment Timeline

| Step | Duration |
|------|----------|
| Checkout | ~5 seconds |
| Install lftp | ~10 seconds |
| SFTP transfer | ~30-120 seconds |
| **Total** | ~1-2 minutes |

---

## Server Configuration

### cPanel Directory Structure

```
/home/goquoterocket/
└── public_html/
    ├── index.php              # Production entry
    ├── funnel.php
    ├── .htaccess
    ├── cdn/                   # Static assets
    ├── api/                   # API endpoints
    └── staging/               # Staging environment
        └── public/
            ├── index.php      # Staging entry
            ├── funnel.php
            └── ...
```

### Apache Configuration

**.htaccess** (deployed with code):

```apache
# Enable rewrite engine
RewriteEngine On
RewriteBase /

# Force HTTPS (production only)
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} !\.local$ [NC]
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Funnel routes
RewriteRule ^(flow|owl|sow|terms|privacy)$ funnel.php [L,QSA]

# API routes
RewriteRule ^api/(.*)$ api/$1 [L,QSA]

# Static assets
RewriteRule ^cdn/(.*)$ cdn/$1 [L]

# Everything else to index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L,QSA]
```

### SSL Configuration

SSL is managed through cPanel:

1. Login to cPanel
2. Go to **SSL/TLS Status**
3. Ensure certificate is valid for:
   - `goquoterocket.com`
   - `www.goquoterocket.com`
   - `*.goquoterocket.com` (wildcard for subdomains)

### Subdomain Setup

For production subdomains (auto, life, etc.):

**Option 1: Wildcard DNS**
- Point `*.goquoterocket.com` to server IP
- All subdomains route to same `/public_html/`

**Option 2: Individual Subdomains**
- Create each in cPanel
- Point to same `/public_html/`

---

## Troubleshooting

### Deployment Failed: Authentication Error

**Symptom**: Workflow fails with "Authentication failed"

**Solution**:
1. Verify `FTP_USER` matches cPanel username
2. Verify `FTP_PASS` is correct
3. Try logging into cPanel manually
4. Check for special characters in password (may need escaping)

### Deployment Failed: Permission Denied

**Symptom**: Workflow fails with "Permission denied"

**Solution**:
1. Verify cPanel user has write access to `/public_html/`
2. Check folder permissions in cPanel File Manager
3. Reset permissions: Files 644, Directories 755

### Files Not Uploading

**Symptom**: Workflow succeeds but files unchanged

**Solution**:
1. Check GitHub Actions logs for transfer details
2. Verify `REMOTE_PATH` is correct
3. Check lftp exclude patterns
4. Manually delete and redeploy

### Wrong Files on Server

**Symptom**: Unexpected files on server

**Solution**:
1. Verify correct branch was pushed
2. Check exclude patterns in workflow
3. Manually clean via cPanel File Manager

### 404 Errors After Deploy

**Symptom**: Pages return 404

**Solution**:
1. Verify `.htaccess` was uploaded
2. Check mod_rewrite is enabled
3. Verify `RewriteBase` matches path

### Environment Detection Wrong

**Symptom**: Production shows debug info, or staging shows production URLs

**Solution**:
1. Check `environment.php` detection logic
2. Verify server hostname
3. Clear any cached configurations

### View Deployment Logs

1. Go to GitHub repository
2. Click **Actions** tab
3. Click on the workflow run
4. Expand each step to see logs
5. Look for errors in red

### Manual Deployment (Emergency)

If GitHub Actions fails, manually deploy:

```bash
# Using sftp
sftp -P 22 goquoterocket@host.stealthlabz.com

# Navigate to directory
cd /public_html

# Upload files
put -r ./public/*

# Exit
bye
```

Or use cPanel File Manager:
1. Login to cPanel
2. Open File Manager
3. Navigate to `/public_html/`
4. Upload ZIP of `public/` directory
5. Extract in place

---

## Rollback Procedure

### Using Git

```bash
# Find previous commit
git log --oneline

# Revert to specific commit
git revert HEAD
# or
git reset --hard <commit-hash>

# Force push (careful!)
git push origin main --force
```

### Using cPanel

1. Login to cPanel
2. Open **Backups** or **JetBackup**
3. Restore `/public_html/` from backup
4. Select date before bad deployment

### Quick Fix

If a single file is broken:

```bash
# Checkout specific file from previous commit
git checkout HEAD~1 -- path/to/file.php

# Commit and push
git add path/to/file.php
git commit -m "Rollback file.php"
git push origin main
```

---

## Deployment Checklist

### Before Deploying to Production

- [ ] Changes tested locally
- [ ] Changes deployed to staging
- [ ] Staging tested and verified
- [ ] No console errors in browser
- [ ] Forms submit successfully
- [ ] All verticals load correctly
- [ ] Mobile responsive checked

### After Deploying to Production

- [ ] GitHub Actions workflow succeeded
- [ ] Production site loads
- [ ] Check 2-3 random pages
- [ ] Test one form submission
- [ ] Check for console errors
- [ ] Verify tracking fires (GTM debug)

### Monthly Maintenance

- [ ] Review GitHub Actions logs
- [ ] Check server disk space
- [ ] Verify SSL certificates valid
- [ ] Review error logs
- [ ] Update any dependencies
