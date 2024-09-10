<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
  <?php include('header.html') ?>
  
    <h1>PHP - TEST</h1>
    <?php
      $version = PHP_VERSION;
      echo "<h2>Hello PHP " . $version . "<h2>";

      $num1 = 3;
      $num2 = 2;
      $numT = $num1 + $num2;

      echo "<h2>Num is " . $numT . "<h2>"; 
    ?>
    <a href="test.html">test</a>
</body>
</html>