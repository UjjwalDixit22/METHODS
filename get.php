<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET/POST METHOD
    </title>
</head>
<body>
    <form action="gettest.php" method="GET"> 
        <!-- Action will invoked by pressing submit button this form will send the data by get method and for receiving data we use get test.php file -->
        Username: <input type="text" name="username">
        <br>
        <br>
        Blood Group: <input type = "text" name = "bloodgroup"/>
        <br>
        <br>
        <input type="submit">
        <?php echo $_SERVER['PHP_SELF'];?> 
        <!-- Above line shows the path of the file -->
    </form>
    <!-- $REQUEST -> is a super global variable2 -->
     <!-- Send 2 data First and Last Name and output is a full name using concatenation -->
      
</body>
</html>