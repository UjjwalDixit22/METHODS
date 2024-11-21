<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET/POST METHOD
    </title>
</head>
<body>
    <form action="posttest.php" method="POST"> 
        Username: <input type="text" name="username">
        <br>
        <br>
        Blood Group: <input type = "text" name = "bloodgroup"/>
        <br>
        <br>
        <input type="submit">
    </form>
    <!-- Reason for data hiding -> data is send inside the http body but in get it will show data as the data / code is outside the http body -->
</body>
</html>