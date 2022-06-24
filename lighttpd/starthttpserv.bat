
@ECHO OFF
REM Start Server
set PHP_FCGI_MAX_REQUESTS=0
RunHiddenConsole.exe PHP/php-cgi.exe -b 127.0.0.1:9123
lighttpd.exe -D -f conf/lighttpd.conf -m modules

REM Updata Data