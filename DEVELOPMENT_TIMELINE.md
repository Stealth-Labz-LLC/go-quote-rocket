# Portal Stealth — Go Quote Rocket: Development Timeline & Build Analysis

## Executive Summary

| Metric | Value |
|--------|-------|
| **First Commit** | Dec 27, 2025 (01:13 UTC) |
| **Latest Commit** | Jan 16, 2026 (13:10 EST) |
| **Total Calendar Time** | 21 days |
| **Active Development Days** | 8 days |
| **Total Commits** | 56 |
| **Avg Commits/Active Day** | 7.0 |
| **Peak Day** | Jan 12 — 21 commits |
| **Primary Author** | Keating (46 commits, 82%) |

**Bottom line:** A full lead-gen platform with 11+ insurance verticals, API integrations, and organic SEO pages — built in ~8 active coding days across a 21-day window.

---

## 1. Git History Analysis

### Commits by Month
```
Dec 2025  ████                          4 commits
Jan 2026  ████████████████████████████  52 commits
```

### Commits by Date (ranked)
```
Jan 12  █████████████████████  21  ← PEAK DAY
Jan 07  █████████████          13
Jan 09  ███████████            11
Jan 06  █████                   5
Dec 27  ███                     3
Dec 28  █                       1
Jan 10  █                       1
Jan 16  █                       1
```

### Commits by Day of Week
```
Monday     █████████████████████  21
Wednesday  █████████████          13
Friday     ████████████           12
Tuesday    █████                   5
Saturday   ████                    4
Sunday     █                       1
```

### Commits by Hour (UTC-adjusted)
```
Peak hours: 11am-1pm (19 commits), 5-7pm (11 commits)
Work pattern: Primarily daytime dev with evening pushes
```

### Authors
```
Keating       46 commits (82%)
Kedar Kumar    9 commits (16%)
Claude         1 commit  (2%)
```

---

## 2. Development Phases & Timeline

### Phase 1: Foundation (Dec 27, 2025)
- Initial Laravel scaffolding
- Default migrations (users, password_resets, jobs, personal_access_tokens)
- Base MVC structure, Kernel, Providers, config
- `PageController` created
- **3 commits**

### Phase 2: MVC Conversion & Deploy Pipeline (Jan 6-7, 2026)
- MVC conversion with funnel integration
- Organic site merge into main repo
- Brand/Carrier/Vertical models added
- `LeadController` created (8.3KB — core business logic)
- Staging/deployment workflow fixes
- Config verticals: auto, creditcard, medicare
- **18 commits**

### Phase 3: Full Vertical Buildout (Jan 9-12, 2026)
- 11 organic insurance pages built:
  - `car-insurance.php` (1,558 LOC)
  - `life-insurance.php` (1,583 LOC)
  - `business-insurance.php` (1,643 LOC)
  - `legal-insurance.php` (1,788 LOC)
  - `funeral-cover.php` (1,615 LOC)
  - `personal-loans.php` (1,592 LOC)
  - `vehicle-tracker.php` (1,580 LOC)
  - `pet-insurance.php` (1,572 LOC)
  - `medical-insurance.php` (1,495 LOC)
  - `debt-relief.php` (1,483 LOC)
  - `motor-warranty.php` (1,703 LOC)
- Project structure flattened from `public/` to root
- US localization (replaced all SA/ZA references)
- Articles section with 10 insurance guides
- API unified to single StealthLabz webhook
- **33 commits — the build sprint**

### Phase 4: Stabilization (Jan 16, 2026)
- Brand config reverts & fixes
- PR merge from `orchid_dev`
- **2 commits**

---

## 3. Codebase Metrics

### File Counts (excluding vendor/node_modules)
| Type | Count |
|------|-------|
| PHP files | 108 |
| SCSS/CSS files | 30 |
| JS files | 6 |
| Blade templates | 0 (uses plain PHP views) |

### Lines of Code
| Language | Lines |
|----------|-------|
| **PHP** | **31,217** |
| **JavaScript** | **6,528** |
| **Total** | **~37,745** |

### Largest Files (complexity indicators)
| File | Lines | Purpose |
|------|-------|---------|
| `legal-insurance.php` | 1,788 | Vertical landing page |
| `motor-warranty.php` | 1,703 | Vertical landing page |
| `business-insurance.php` | 1,643 | Vertical landing page |
| `funeral-cover.php` | 1,615 | Vertical landing page |
| `personal-loans.php` | 1,592 | Vertical landing page |
| `life-insurance.php` | 1,583 | Vertical landing page |
| `vehicle-tracker.php` | 1,580 | Vertical landing page |
| `pet-insurance.php` | 1,572 | Vertical landing page |
| `car-insurance.php` | 1,558 | Vertical landing page |
| `medical-insurance.php` | 1,495 | Vertical landing page |
| `index.php` | 1,232 | Main landing page |

### Key Architecture Files
| File | Size | Role |
|------|------|------|
| `LeadController.php` | 8,359 bytes | Core lead submission logic |
| `Vertical.php` (Model) | 5,666 bytes | Vertical/product configuration |
| `PageController.php` | 5,003 bytes | Page routing & rendering |
| `Brand.php` (Model) | 3,262 bytes | Brand management |
| `Carrier.php` (Model) | 2,775 bytes | Insurance carrier data |

---

## 4. Development Velocity

### Sprint Analysis
```
Week 52 (Dec 27-28):   4 commits  — Foundation
Week 02 (Jan 6-10):   30 commits  — Core build sprint
Week 03 (Jan 12-16):  22 commits  — Vertical buildout + stabilization
```

### Velocity Metrics
| Metric | Value |
|--------|-------|
| Calendar span | 21 days |
| Active coding days | 8 days |
| Idle days | 13 days (holidays/weekends) |
| Development efficiency | 38% (active days / calendar days) |
| Commits per active day | 7.0 |
| LOC per active day | ~4,718 |
| Peak velocity | 21 commits on Jan 12 |
| Verticals built | 11 in ~3 days |

### Gaps in Development
- **Dec 29 – Jan 5** (8 days): Holiday break between foundation and build sprint
- **Jan 11**: No commits (1-day break mid-sprint)
- **Jan 13-15**: No commits (3-day gap before final merge)

---

## 5. Feature Build Sequence

```
Dec 27  ─── Laravel scaffolding, base models, auth migrations
  │
  ╧ (8-day break — holidays)
  │
Jan 06  ─── MVC conversion, funnel integration
Jan 07  ─── Organic site merge, brand/carrier/vertical models
  │         LeadController (core business logic)
  │         Config: auto, creditcard, medicare verticals
Jan 09  ─── Project restructure (public/ → root)
  │         US localization pass
Jan 10  ─── API unification → StealthLabz webhook
Jan 12  ─── 11 vertical landing pages (car, life, business, legal,
  │         funeral, loans, vehicle-tracker, pet, medical, debt, motor)
  │         Articles section (10 insurance guides)
  │         car-insurance-beta variant
  │
  ╧ (3-day pause)
  │
Jan 16  ─── Brand config fixes, final PR merge
```

---

## 6. The Build Story

**Go Quote Rocket** is a US insurance lead-generation platform covering 11+ verticals. The entire production-ready codebase — 37,000+ lines of code across 144 files — was built in **8 active development days**.

The build followed a disciplined pattern:
1. **Day 1** (Dec 27): Clean Laravel foundation with proper MVC architecture
2. **Days 2-3** (Jan 6-7): Core business logic — lead controller, models, API integration, vertical configs
3. **Days 4-5** (Jan 9-10): Infrastructure — project restructure, US localization, API unification
4. **Day 6** (Jan 12): Massive buildout — 21 commits delivering all 11 vertical pages + articles section
5. **Day 7-8** (Jan 16): Stabilization and merge

Peak output was **January 12**: 21 commits in a single day, delivering the bulk of the customer-facing vertical pages (each 1,500+ lines with full SEO content, forms, and styling).

---

*Generated: January 30, 2026*
