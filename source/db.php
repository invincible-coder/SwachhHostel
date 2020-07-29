<?php
    // Create Database Connection
   $dbhost = "localhost" ;
   $dbuser = "root" ;
   $dbpass = "" ;
   $dbname = "hostel" ;
   $db = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   
    // Check Database Connection
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
    }
  // echo "Connected successfully";
?>