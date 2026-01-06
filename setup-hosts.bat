@echo off
REM GoQuoteRocket - Add Local Domains to Hosts File
REM Run this file as Administrator

echo Adding GoQuoteRocket domains to hosts file...
echo.

REM Backup existing hosts file
copy C:\Windows\System32\drivers\etc\hosts C:\Windows\System32\drivers\etc\hosts.backup.%date:~-4,4%%date:~-10,2%%date:~-7,2%

REM Add GoQuoteRocket entries
echo # GoQuoteRocket Local Development >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       www.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       auto.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       life.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       medicare.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       creditcard.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       api.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts
echo 127.0.0.1       cdn.goquoterocket.local >> C:\Windows\System32\drivers\etc\hosts

echo.
echo Done! GoQuoteRocket domains added to hosts file.
echo A backup was created at: C:\Windows\System32\drivers\etc\hosts.backup.%date:~-4,4%%date:~-10,2%%date:~-7,2%
echo.
echo Press any key to restart Apache...
pause >nul

REM Restart Apache
net stop Apache2.4
net start Apache2.4

echo.
echo Setup complete! You can now access:
echo - http://goquoterocket.local
echo - http://auto.goquoterocket.local
echo - http://life.goquoterocket.local
echo - http://medicare.goquoterocket.local
echo - http://creditcard.goquoterocket.local
echo - http://api.goquoterocket.local
echo - http://cdn.goquoterocket.local
echo.
pause
