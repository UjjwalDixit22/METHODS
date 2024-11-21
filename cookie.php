 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <!-- Setting cookies -->
 <?php
 setcookie("user","John",time()+3600);
 setcookie("user1","Ujjwal",time()+3600);
 //remove a cookie
 setcookie("user","Ujjwal",time()-3600);
 setcookie("user2","Vansh",time()+3600);
//  Checking the expiry time

?>
<?php
//  echo $_COOKIE['user'];
//  print_r($_COOKIE);

?>

 <!-- Retrieve cookies -->

 <?php
 if(isset($_COOKIE['user'])){
     echo "Welcome " .$_COOKIE['user']."!<br>";
 }else{
     echo "Welcome guest!!! <br>";
 }
 print_r($_COOKIE); // Associative array key value pair will be shown by this line...
 ?>
 </body>
 </html>

 <!-- Why cookies & session are used  -> http is a stateless request so all the request will be sent to the server
  a cookie is sent to the system to understand the  which user is sending req to the system ....
 when your data is stored in a web server is called session ..
 when website stored your data in(user hard disk) system is a called a cookie..
 The pieces of information are stored in a cookie in the form of name-value pairs 
 Each cookie can store 4kB of data , A maximum of 20 cookies can be stored on a user's PC per domain.
 
 Set a cookie with time bound -> ('age-','20',time()+60*60*24*30)
 UID -> Unique identification
 When data is stored i web server it is called session , They will track activities and data in web server
 the session is temporary and is usually quickly deleted after user left the website that uses sessions.
 Starting a php session
 <?php session_start(); ?>
 --!>

