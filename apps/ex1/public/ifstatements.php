<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ifstamenets</title>
  <?php include_once("../includes/styles.php") ?>
</head>

<body>
  <h1>if statements</h1>
  <a href="/">home</a>

  <?php
  $x = 5;
  $y = 10;

  if ($x > 5) {
    echo "<div>$x is greater than  $y</div>";
  } else {
    echo "<div>$x is not greater than $y</div>";
  }


  if (isset($_GET["Value"])) {
    $z = $_GET["Value"]; //read a query string param called value
  

    // is numeric built in fucntion
    if (is_numeric($z)) {
      if ($z > $y && $z > $x) {
        echo "<div>the qs param $z is greater than $x and $y</div>";
      } else {
        echo "<div>the param $z is not greater than $x and $y</div>";

      }
    } else {
      echo "<div>the query string param value $z is not numeric</div>";
    }

  } else {
    echo "<div>value not set</div>";
  }


  ?>

</body>

</html>