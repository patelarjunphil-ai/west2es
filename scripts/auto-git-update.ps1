# Auto Git Update Script for West2ES
# This script automatically commits and pushes changes to the repository

param(
    [string]$CommitMessage = "Auto-update: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')",
    [switch]$Force = $false
)

# Set the working directory
$projectPath = "C:\xampp\htdocs\west2es"
Set-Location $projectPath

Write-Host "🔄 Starting automatic Git update..." -ForegroundColor Cyan

try {
    # Check if we're in a Git repository
    if (-not (Test-Path ".git")) {
        Write-Host "❌ Error: Not a Git repository!" -ForegroundColor Red
        exit 1
    }

    # Check Git status
    Write-Host "📊 Checking Git status..." -ForegroundColor Yellow
    $status = git status --porcelain
    
    if ([string]::IsNullOrEmpty($status)) {
        Write-Host "✅ No changes to commit" -ForegroundColor Green
        exit 0
    }

    # Show what will be committed
    Write-Host "📝 Changes to be committed:" -ForegroundColor Yellow
    git status --short

    # Add all changes
    Write-Host "📦 Adding all changes..." -ForegroundColor Yellow
    git add .

    # Commit changes
    Write-Host "💾 Committing changes..." -ForegroundColor Yellow
    if ($Force) {
        git commit -m "$CommitMessage" --no-verify
    } else {
        git commit -m "$CommitMessage"
    }

    # Push to remote repository
    Write-Host "🚀 Pushing to remote repository..." -ForegroundColor Yellow
    git push origin main

    Write-Host "✅ Successfully updated repository!" -ForegroundColor Green
    Write-Host "📅 Commit: $CommitMessage" -ForegroundColor Cyan

} catch {
    Write-Host "❌ Error during Git update: $($_.Exception.Message)" -ForegroundColor Red
    exit 1
}

