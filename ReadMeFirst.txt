Installation instructions

1. Copy the QuartzPWS.zip file to the root folder for your web server (c:\wamp\www or the equivalent).

2. Extract all the files with subdirectories.  This will create a folder c:\wamp\www\Quartz with all the PHP and other files required for the web site.

3. Using the MySQL console (or phpMyAdmin if you prefer), create a database named 'profwebsitedb0', a user named 'pws_admin' with a password of 'pws_admin_password'.

4. Create the admin user.  Open phpMyAdmin by going to http://localhost/phpmyadmin (don't forget to use localhost:81 if you are using port 81).  Select the 'profwebsitedb0' database from the list on the left.  Select the SQL tab.  In a text editor, open 'DATABASE.sql' (it is in the Quartz folder).  Copy and paste the contents of 'DATABASE.sql' into the text box in the SQL tab in phpMyAdmin.  Click on the 'Go' button.  This will create your admin user.  Sorry for the complexity.

5. Open the page http://localhost[:81]/Quartz. Login in as the admin using the 'pws_admin' username and 'pws_admin_password'.

Clearly this is an area of the product that needs major improvement with regard to ease of use.