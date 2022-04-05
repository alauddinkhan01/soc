<?php

//$con=mysqli_connect('localhost','asadsoha_cheappro','samsam6351','asadsoha_cheapproperty');
$baseurl ="http://fb.softreviews.de/";
$con=mysqli_connect('mysql5.softreviews.de','db551234_10','samsam6351','db551234_10');
                                           //data base name
if(mysqli_connect_error($con))
   
   {
   echo"Database connection Failed".
   mysqli_connect_error();
   
   }
   ?>