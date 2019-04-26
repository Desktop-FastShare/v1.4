::[Bat To Exe Converter]
::
::YAwzoRdxOk+EWAnk
::fBw5plQjdG8=
::YAwzuBVtJxjWCl3EqQJgSA==
::ZR4luwNxJguZRRnk
::Yhs/ulQjdF+5
::cxAkpRVqdFKZSDk=
::cBs/ulQjdF+5
::ZR41oxFsdFKZSDk=
::eBoioBt6dFKZSDk=
::cRo6pxp7LAbNWATEpCI=
::egkzugNsPRvcWATEpCI=
::dAsiuh18IRvcCxnZtBJQ
::cRYluBh/LU+EWAnk
::YxY4rhs+aU+JeA==
::cxY6rQJ7JhzQF1fEqQJQ
::ZQ05rAF9IBncCkqN+0xwdVs0
::ZQ05rAF9IAHYFVzEqQJQ
::eg0/rx1wNQPfEVWB+kM9LVsJDGQ=
::fBEirQZwNQPfEVWB+kM9LVsJDGQ=
::cRolqwZ3JBvQF1fEqQJQ
::dhA7uBVwLU+EWDk=
::YQ03rBFzNR3SWATElA==
::dhAmsQZ3MwfNWATElA==
::ZQ0/vhVqMQ3MEVWAtB9wSA==
::Zg8zqx1/OA3MEVWAtB9wSA==
::dhA7pRFwIByZRRnk
::Zh4grVQjdCuDJH+F51Z9GxNVXgHPOmSoS5EZ++Pv4PqU73oUWq8nINnkjODDNrFdugu1OIU513hWnYYcAwlMfxCnazMSqH1WhWyEJcLSthfkKg==
::YB416Ek+ZG8=
::
::
::978f952a14a936cc963da21a135fa983
@echo off
echo Switching Directory to the bin Directory Server location...
cd /d "./apache2.0/bin"
echo Initilizing Browser tools...
start http://localhost:8345/index.php
echo Browser initilized successfully on port 8345 over 127.0.0.1:8345/index.php
echo Server starting at port 8345
echo Server started running on port 8345, over local address http://127.0.0.1:8345/index.php
cmd /c "httpd.exe"
pause