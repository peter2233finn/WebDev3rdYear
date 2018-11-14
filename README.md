# WebDev3rdYear
Web development group project 3rd year
sql.sql contains the SQL server database and creation

To use:

1. Put the sql.sql file into a mysql database
2. Clone the rest and put onto a http server
3. Enable php and the file option in php

Installation:

git clone https://github.com/peter2233finn/WebDev3rdYear;
cp -r WebDev3rdYear /var/www;
chmod 777 -R /var/www/WebDev3rdYear;

cp -r WebDev3rdYear /srv/http;
chmod 777 -R /srv/http/WebDev3rdYear;

mysql -u root -p <WebDev3rdYear/sql.sql;
