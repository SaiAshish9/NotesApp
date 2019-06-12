<?php
$link = mysqli_connect("localhost", "Sai", "sai", "notes");
//$link = mysqli_connect("localhost", "id9919674_sai", "shirdisaibaba9999", "id9919674_notes");
// $link = mysqli_connect("sql103.epizy.com", "epiz_24037097", "shirdisaibaba9999", "epiz_24037097_notes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
    echo "<script>window.alert('Hi!')</script>";
}
    ?>

<!-- heroku addons:create cleardb:ignite


heroku config | grep CLEARDB_DATABASE_URL
CLEARDB_DATABASE_URL => mysql://adffdadf2341:adf4234@us-cdbr-east.cleardb.com/heroku_db?reconnect=true
Copy the value of the CLEARDB_DATABASE_URL config variable.


heroku config:set DATABASE_URL='mysql://adffdadf2341:adf4234@us-cdbr-east.cleardb.com/heroku_db?reconnect=true'
Adding config vars:
DATABASE_URL => mysql2://adffd...b?reconnect=true
Restarting app... done, v61. -->
