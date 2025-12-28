# GitHub Secrets Required for goquoterocket Repository

## Where to Add Secrets

1. Go to: **https://github.com/Stealth-Labz-LLC/goquoterocket**
2. Click: **Settings** (top navigation)
3. Click: **Secrets and variables** → **Actions** (left sidebar)
4. Click: **"New repository secret"** button

---

## Required Secrets (Add these 5)

### 1. FTP_HOST
```
Name: FTP_HOST
Value: host.stealthlabz.com
```
**What it is:** Your cPanel server hostname

---

### 2. FTP_USER
```
Name: FTP_USER
Value: goquoterocket
```
**What it is:** Your cPanel username (shown in top-right of cPanel)

---

### 3. FTP_PASS
```
Name: FTP_PASS
Value: [YOUR CPANEL PASSWORD]
```
**What it is:** Your cPanel password (same one you use to log into cPanel)

⚠️ **Important:** Keep this password secure! Never share it or commit it to code.

---

### 4. SSH_PORT
```
Name: SSH_PORT
Value: 22
```
**What it is:** The SSH/SFTP port number (22 is standard)

---

### 5. SFTP_PROTOCOL
```
Name: SFTP_PROTOCOL
Value: sftp
```
**What it is:** Protocol to use for file transfer (sftp is secure)

---

## Quick Checklist

- [ ] Added `FTP_HOST` = `host.stealthlabz.com`
- [ ] Added `FTP_USER` = `goquoterocket`
- [ ] Added `FTP_PASS` = `[your cPanel password]`
- [ ] Added `SSH_PORT` = `22`
- [ ] Added `SFTP_PROTOCOL` = `sftp`

---

## How to Find Your cPanel Password

### Option 1: Check Your Email
Search for emails from Stealthlabz with "Welcome" or "Account Created"

### Option 2: Reset Password
Use the "Forgot Password" link on the cPanel login page

### Option 3: Contact Support
Email or contact Stealthlabz hosting support

---

## Testing the Secrets

After adding all 5 secrets:

1. Push code to the `dev` branch
2. Go to **Actions** tab in GitHub
3. Watch the deployment workflow run
4. If it fails with "authentication error" → check FTP_USER and FTP_PASS
5. If it succeeds → your secrets are configured correctly! ✅

---

## Security Notes

- ✅ Secrets are encrypted by GitHub
- ✅ Secrets are never exposed in logs
- ✅ Only repository admins can view/edit secrets
- ❌ Never put passwords directly in code
- ❌ Never commit `.env` files with passwords

---

## Need Help?

If deployment fails, check:
1. All 5 secrets are added with **exact** names (case-sensitive)
2. No extra spaces in secret values
3. cPanel password is correct (try logging into cPanel manually)
4. `FTP_HOST` matches your cPanel URL (without https:// or :2083)
