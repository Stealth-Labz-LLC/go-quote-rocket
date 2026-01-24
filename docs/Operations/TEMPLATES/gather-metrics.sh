#!/bin/bash

# ============================================================================
# PROJECT METRICS GENERATOR
# ============================================================================
# Run this script in any git repository to gather metrics for PROJECT-METRICS.md
# Usage: bash gather-metrics.sh
# ============================================================================

echo "=============================================="
echo "PROJECT METRICS GENERATOR"
echo "=============================================="
echo ""

# --------------------------------------------
# GIT TIMELINE DATA
# --------------------------------------------
echo "## GIT TIMELINE"
echo "----------------------------------------------"

FIRST_COMMIT_DATE=$(git log --reverse --format="%ad" --date=short | head -1)
LAST_COMMIT_DATE=$(git log --format="%ad" --date=short | head -1)
TOTAL_COMMITS=$(git rev-list --count HEAD)

echo "First Commit:  $FIRST_COMMIT_DATE"
echo "Last Commit:   $LAST_COMMIT_DATE"
echo "Total Commits: $TOTAL_COMMITS"
echo ""

# Calculate days (works on macOS/Linux)
if [[ "$OSTYPE" == "darwin"* ]]; then
    START=$(date -j -f "%Y-%m-%d" "$FIRST_COMMIT_DATE" "+%s" 2>/dev/null)
    END=$(date -j -f "%Y-%m-%d" "$LAST_COMMIT_DATE" "+%s" 2>/dev/null)
else
    START=$(date -d "$FIRST_COMMIT_DATE" "+%s" 2>/dev/null)
    END=$(date -d "$LAST_COMMIT_DATE" "+%s" 2>/dev/null)
fi

if [ ! -z "$START" ] && [ ! -z "$END" ]; then
    DAYS=$(( (END - START) / 86400 + 1 ))
    echo "Total Days:    $DAYS days"
else
    echo "Total Days:    (calculate manually from dates above)"
fi
echo ""

# --------------------------------------------
# COMMIT ACTIVITY BY DATE
# --------------------------------------------
echo "## COMMIT ACTIVITY BY DATE"
echo "----------------------------------------------"
git log --format="%ad" --date=short | sort | uniq -c | sort -k2
echo ""

# --------------------------------------------
# FIRST 5 COMMITS (MILESTONES)
# --------------------------------------------
echo "## FIRST 5 COMMITS"
echo "----------------------------------------------"
git log --reverse --format="%ad | %s" --date=short | head -5
echo ""

# --------------------------------------------
# LAST 5 COMMITS
# --------------------------------------------
echo "## LAST 5 COMMITS"
echo "----------------------------------------------"
git log --format="%ad | %s" --date=short | head -5
echo ""

# --------------------------------------------
# CODE METRICS
# --------------------------------------------
echo "## CODE METRICS"
echo "----------------------------------------------"

# PHP
PHP_LINES=$(find . -name "*.php" -not -path "./vendor/*" -not -path "./node_modules/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
PHP_FILES=$(find . -name "*.php" -not -path "./vendor/*" -not -path "./node_modules/*" 2>/dev/null | wc -l | tr -d ' ')
echo "PHP:        $PHP_LINES lines in $PHP_FILES files"

# JavaScript
JS_LINES=$(find . -name "*.js" -not -path "./vendor/*" -not -path "./node_modules/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
JS_FILES=$(find . -name "*.js" -not -path "./vendor/*" -not -path "./node_modules/*" 2>/dev/null | wc -l | tr -d ' ')
echo "JavaScript: $JS_LINES lines in $JS_FILES files"

# TypeScript
TS_LINES=$(find . -name "*.ts" -name "*.tsx" -not -path "./node_modules/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
TS_FILES=$(find . -name "*.ts" -o -name "*.tsx" -not -path "./node_modules/*" 2>/dev/null | wc -l | tr -d ' ')
echo "TypeScript: $TS_LINES lines in $TS_FILES files"

# Python
PY_LINES=$(find . -name "*.py" -not -path "./venv/*" -not -path "./.venv/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
PY_FILES=$(find . -name "*.py" -not -path "./venv/*" -not -path "./.venv/*" 2>/dev/null | wc -l | tr -d ' ')
echo "Python:     $PY_LINES lines in $PY_FILES files"

# CSS
CSS_LINES=$(find . -name "*.css" -not -path "./node_modules/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
CSS_FILES=$(find . -name "*.css" -not -path "./node_modules/*" 2>/dev/null | wc -l | tr -d ' ')
echo "CSS:        $CSS_LINES lines in $CSS_FILES files"

# HTML
HTML_LINES=$(find . -name "*.html" -not -path "./node_modules/*" 2>/dev/null | xargs wc -l 2>/dev/null | tail -1 | awk '{print $1}')
HTML_FILES=$(find . -name "*.html" -not -path "./node_modules/*" 2>/dev/null | wc -l | tr -d ' ')
echo "HTML:       $HTML_LINES lines in $HTML_FILES files"

echo ""

# --------------------------------------------
# REPOSITORY STATS
# --------------------------------------------
echo "## REPOSITORY STATS"
echo "----------------------------------------------"
TOTAL_FILES=$(find . -type f -not -path "./.git/*" | wc -l | tr -d ' ')
TOTAL_DIRS=$(find . -type d -not -path "./.git/*" | wc -l | tr -d ' ')
REPO_SIZE=$(du -sh . 2>/dev/null | cut -f1)

echo "Total Files:       $TOTAL_FILES"
echo "Total Directories: $TOTAL_DIRS"
echo "Repository Size:   $REPO_SIZE"
echo ""

# --------------------------------------------
# LARGEST FILES
# --------------------------------------------
echo "## LARGEST CODE FILES (by lines)"
echo "----------------------------------------------"
find . -name "*.php" -o -name "*.js" -o -name "*.py" -o -name "*.ts" -o -name "*.tsx" 2>/dev/null | \
    grep -v node_modules | grep -v vendor | grep -v venv | \
    xargs wc -l 2>/dev/null | sort -rn | head -15
echo ""

# --------------------------------------------
# TRADITIONAL COST ESTIMATE
# --------------------------------------------
echo "## TRADITIONAL COST ESTIMATE"
echo "----------------------------------------------"

# Calculate total lines
TOTAL_LINES=$((${PHP_LINES:-0} + ${JS_LINES:-0} + ${TS_LINES:-0} + ${PY_LINES:-0} + ${CSS_LINES:-0}))
echo "Total Lines of Code: $TOTAL_LINES"

# Estimate hours (rough: ~100 lines per hour for experienced dev)
EST_HOURS=$((TOTAL_LINES / 100))
echo "Estimated Dev Hours: ~$EST_HOURS hours"

# Cost ranges
LOW_RATE=80
HIGH_RATE=150
LOW_COST=$((EST_HOURS * LOW_RATE))
HIGH_COST=$((EST_HOURS * HIGH_RATE))

echo ""
echo "At \$$LOW_RATE/hr (mid-level): \$$LOW_COST"
echo "At \$$HIGH_RATE/hr (senior/agency): \$$HIGH_COST"
echo ""

# Weeks estimate
EST_WEEKS=$((EST_HOURS / 35))
echo "Traditional Timeline: ~$EST_WEEKS weeks (at 35 hrs/week)"
echo ""

# --------------------------------------------
# SUMMARY BOX
# --------------------------------------------
echo "=============================================="
echo "SUMMARY FOR PROJECT-METRICS.md"
echo "=============================================="
echo ""
echo "Copy these values into your PROJECT-METRICS.md:"
echo ""
echo "  ACTUAL BUILD TIME:     $DAYS days"
echo "  TOTAL COMMITS:         $TOTAL_COMMITS"
echo "  TOTAL LINES OF CODE:   $TOTAL_LINES"
echo "  TOTAL FILES:           $TOTAL_FILES"
echo ""
echo "  TRADITIONAL ESTIMATE:"
echo "  - Hours: ~$EST_HOURS"
echo "  - Weeks: ~$EST_WEEKS"
echo "  - Cost:  \$$LOW_COST - \$$HIGH_COST"
echo ""
echo "  SPEED ADVANTAGE:       ~$((EST_WEEKS * 7 / DAYS))x faster"
echo "  COST SAVINGS:          \$$LOW_COST - \$$HIGH_COST"
echo ""
echo "=============================================="
