<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // sorting the array
    $a = [1,512,365,929,429,210];

    // sort in non increasing order - > descending order
    rsort($a);
    print_r($a);
    echo "<br>";
    // sort($a);
    // print_r($a);
    // echo "<br>";
    $aa = ["a"=>25,"d"=>20,"c"=>23];
    // sorting with keys
    asort($aa);
    print_r($aa);
    echo "<br>";
    // sorting with values  -> same as sorting with keys
    arsort($aa);
    print_r($aa);
    echo "<br>";
    // sorting with keys
    ksort($aa);
    print_r($aa);
    ?>
</body>
</html>

<!-- Most important is array for ca's -->w