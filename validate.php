<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .error{
            color: red;
        }
    </style>
    <?php
     $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
     $name = $email = $gender = $comment = $website = "";
    //  form validation
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        }  else{
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        }  else{
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["website"])){
            $websiteErr = "Website is required";
        }  else{
            $website = test_input($_POST["website"]);
        }

        if(empty($_POST["comment"])){
            $commentErr = "Comment is required";
        }  else{
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender is required";
        }  else{
            $gender = test_input($_POST["gender"]);
        }
     }
    //  form sanitization
     function test_input($data){
         $data = trim($data);     // remove whitespaces
         $data = stripslashes($data);  // remove backslashes
         $data = htmlspecialchars($data);   // < -> &lt; , > -> &gt;  <script> -> &lt;script&gt;
         return $data;
     }
     ?>
     <h2>Form Validation Example</h2>
         <p><span class="error"> * required field</span></p>
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Website: <input type="text" name="website">
            <span class="error">* <?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <span class="error">* <?php echo $commentErr; ?></span>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
     <?php
     echo $name;
     echo "<br>";
     echo $email;
     echo "<br>";
     echo $website;
     echo "<br>";
     echo $comment;
     echo "<br>";
     echo $gender;
     ?>
</body>
</html>


<?php
echo strrev("Golu");
echo "<br>";
echo strtoupper("Hello");
echo "<br>";
echo strtolower("HELLO");
echo "<br>";
?> 