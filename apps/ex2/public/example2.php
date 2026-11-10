<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>throwinng an Execption in a function</title>
  <?php include_once("../includes/styles.php"); ?>
</head>

<body>
  <h1>Throwing an exception in a function</h1>
  <a href="/">home</a>
  <div>
    <?php
    function devide($a, $b)
    {
      if ($b == 0) {
        throw new InvalidArgumentException("cannot devide by 0");
      }
      return $a / $b;
    }

    try {
      echo devide(10, 2);
    } catch (InvalidArgumentException $e) {
      echo "Error" . $e->getMessage();
    }
    ?>
  </div>
</body>

</html>