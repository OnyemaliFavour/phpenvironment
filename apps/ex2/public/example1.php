<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>throwinng an Execption</title>
  <?php include_once("../includes/styles.php"); ?>
</head>

<body>
  <h1>Throwing an exception</h1>
  <a href="/">home</a>
  <div>
    <?php
    try {
      echo "<h2>Hello. Everything is fine</h2>";

      throw new Exception("Something went wrong!");

      // this code will never excecute
      echo "<h2>everything is not fine.</h2>";

    } catch (Exception $e) {
      echo "Error:" . $e->getMessage() . "";
    }
    ?>
  </div>
</body>

</html>