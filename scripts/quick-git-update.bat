@echo off
echo Auto Git Update for West2ES
echo ============================

REM Check if PowerShell script exists
if not exist "%~dp0auto-git-update.ps1" (
    echo Error: auto-git-update.ps1 not found!
    pause
    exit /b 1
)

REM Run PowerShell script
powershell -ExecutionPolicy Bypass -File "%~dp0auto-git-update.ps1" %*

echo.
echo Press any key to exit...
pause >nul

