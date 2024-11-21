<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
<?php 
// session_start();
// <!-- Store session data -->
//  $_SESSION['views']=1;
    // unset ($_SESSION['views']); //->delete the value/variable inside $_SESSION variable
    // session_destroy();
     //-> Destroy $_SESSION whole
    //  Code
    // start the session
    session_start();
    // Set some session variables
    $_SESSION["username"] = "JohnDoe";
    $_SESSION["role"] = "admin";
    // print_r($_SESSION);
    // Display session variables
    echo "Session started. Username is : " .$_SESSION["username"] . " , and Role is :  ". $_SESSION["role"]."<br>";
    // Unset all session and clear them
    session_unset();
    // Destroy session
    session_destroy();
    // Try to access session variables after destroying the session
    if(empty($_SESSION)){
        echo "Session variables are now cleared and the session is destroyed.";
    }else{
        echo "Session is still active.";
    }
     ?>
     <!-- Diff b/w session and cookie


    cookies are stored on client side while session are stored on server side.
    cookies can only store strings while session can store objects.
    Long lifespan while session is deleted after closing the browser.

      strrev();
      strcmp();         -> Remember for ca these three function.
      strlen();
       Array function
       Viva - form(GET/POST)
       -->


</body>
</html>
