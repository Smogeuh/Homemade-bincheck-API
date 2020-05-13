# Homemade bincheck API
 This is a PHP/SQL homemade binchecker that you can host on your webserver.

# How to use it ?
 First of all, you'll have to setup your bin database,
 the binbase.sql is made for it.
 Import this file to your database.

 You'll have to upload it on your private database,
 then put the database credentials on the "inc/db_conn.php" file.
 After putting the hostname, user, pass and database name on the PDO function, all is done !

 I didnt do the frontend design because i think the design is really personal and relating to the website.

# API PART :

 You can use api with the "api.php" file,
 there is 2 parameters needed, the key, and the bin,
 You can create apikeys by updating the array "$apikeys" in the api.php file,
 With your apikey, you will check bins.

# GRAPHIC PART :

 The grapic part is most simple.
 Put your bin in the input made for it,
 and it will make an array with all informations about the bin.
