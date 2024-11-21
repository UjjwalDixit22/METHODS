<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = test_input($_POST["name"]); 
        echo "Hi",$data;
    }
    // Applying sanitization..

    function test_input($data){
        $data = trim($data);
        // echo $data;
        echo "<br>";
        $data = stripslashes($data);
        // echo $data;
        echo "<br>";
        $data = htmlspecialchars($data);   // < -> &lt; , > -> &gt;  <script> -> &lt;script&gt;
        // $data;
        return $data;
    }
    ?>
    <?php
    // if(isset($_POST["name"])){
    //     echo "<p>Hi," .$_POST["name"]. "</p>";
    // }
    ?>
    <form method="post" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="inputName">Name:</label>
        <input type="text" id="inputName" name="name">
        <input type="submit" value="Submit">
    </form>
    <!-- You can also run simple string -> <script>alert("Hello");</script> -> if u don't apply sanitization-->
</body>
<p> Output is : </p>
<?php 
echo $name
?>
</html>