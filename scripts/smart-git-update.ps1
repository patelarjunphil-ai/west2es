# Smart Git Update Script for West2ES
# Automatically detects changes and creates meaningful commit messages

param(
    [string]$CustomMessage = "",
    [switch]$Force = $false,
    [switch]$Silent = $false
)

# Set the working directory
$projectPath = "C:\xampp\htdocs\west2es"
Set-Location $projectPath

function Write-Status {
    param([string]$Message, [string]$Color = "White")
    if (-not $Silent) {
        Write-Host $Message -ForegroundColor $Color
    }
}

Write-Status "🔄 Starting smart Git update..." "Cyan"

try {
    # Check if we're in a Git repository
    if (-not (Test-Path ".git")) {
        Write-Status "❌ Error: Not a Git repository!" "Red"
        exit 1
    }

    # Check Git status
    Write-Status "📊 Checking Git status..." "Yellow"
    $status = git status --porcelain
    
    if ([string]::IsNullOrEmpty($status)) {
        Write-Status "✅ No changes to commit" "Green"
        exit 0
    }

    # Analyze changes and create commit message
    $changedFiles = $status -split "`n" | Where-Object { $_ -ne "" }
    $modifiedFiles = @()
    $addedFiles = @()
    $deletedFiles = @()

    foreach ($file in $changedFiles) {
        $statusCode = $file.Substring(0, 2).Trim()
        $fileName = $file.Substring(3)
        
        switch ($statusCode) {
            "M" { $modifiedFiles += $fileName }
            "A" { $addedFiles += $fileName }
            "D" { $deletedFiles += $fileName }
            "??" { $addedFiles += $fileName }
        }
    }

    # Generate commit message
    if ($CustomMessage) {
        $commitMessage = $CustomMessage
    } else {
        $commitMessage = "Update: "
        
        if ($modifiedFiles.Count -gt 0) {
            $commitMessage += "Modified " + $modifiedFiles.Count + " file(s)"
            if ($modifiedFiles.Count -le 3) {
                $commitMessage += " (" + ($modifiedFiles -join ", ") + ")"
            }
        }
        
        if ($addedFiles.Count -gt 0) {
            if ($commitMessage -ne "Update: ") { $commitMessage += ", " }
            $commitMessage += "Added " + $addedFiles.Count + " file(s)"
        }
        
        if ($deletedFiles.Count -gt 0) {
            if ($commitMessage -ne "Update: ") { $commitMessage += ", " }
            $commitMessage += "Deleted " + $deletedFiles.Count + " file(s)"
        }
        
        $commitMessage += " - " + (Get-Date -Format "yyyy-MM-dd HH:mm:ss")
    }

    # Show what will be committed
    Write-Status "📝 Changes to be committed:" "Yellow"
    git status --short

    # Add all changes
    Write-Status "📦 Adding all changes..." "Yellow"
    git add .

    # Commit changes
    Write-Status "💾 Committing changes..." "Yellow"
    Write-Status "📝 Commit message: $commitMessage" "Cyan"
    
    if ($Force) {
        git commit -m "$commitMessage" --no-verify
    } else {
        git commit -m "$commitMessage"
    }

    # Push to remote repository
    Write-Status "🚀 Pushing to remote repository..." "Yellow"
    git push origin main

    Write-Status "✅ Successfully updated repository!" "Green"
    Write-Status "📅 Commit: $commitMessage" "Cyan"

} catch {
    Write-Status "❌ Error during Git update: $($_.Exception.Message)" "Red"
    exit 1
}

