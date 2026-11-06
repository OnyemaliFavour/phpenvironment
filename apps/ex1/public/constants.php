<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>constants</title>
  <?php include_once("../includes/styles.php"); ?>
</head>

<body>
  <h1>constants</h1>
  <a href="/">Home</a>

  <div>
    <?php
    define("COLLEGE", "NBCC");
    define("CAMPUS", "MONCTON");
    define("MARGIN", 0.05);
    // define("CAMPUS","FRREDYY"); Cant redefine conts
    
    const TAX_RATE = 0.15;
    const MAX_STUDENT = 30;
    const ADDRESS = "1234 Mountain road";


    ?>
    <h1>im a studying at <?= COLLEGE ?> <?= CAMPUS ?>.</h1>

    <div>
      tax rate: <?= TAX_RATE ?><br>
      Max students <?= MAX_STUDENT ?><br>
      margin <?= MARGIN ?> <br>
      address <?= ADDRESS ?><br>
    </div>
  </div>
</body>

</html>