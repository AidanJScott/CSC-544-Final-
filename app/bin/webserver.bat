ECHO OFF

REM This starts up the database
cd ../

REM Sets temporary path for libs
SET PATH=php

REM Starts database connection
php database/db_connect.php

REM Opens web app in browser.
php -S localhost:8000

REM Note that when you close the window, the server closes automatically