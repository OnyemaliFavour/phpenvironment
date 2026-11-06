<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
  <?php include_once("../includes/styles.php"); ?>
</head>

<body>
  <h1>Functions</h1>
  <a href="/">Home</a>
  <?php

  /**
   * Summary of add // slash star star
   * @param int|float $x value 1
   * @param int|float $y value 2 
   * @return float|int sum of the two values
   */
  function add(int|float $x, int|float $y): int|float
  {
    return $x + $y;
  }

  function subtract(int|float $x, int|float $y): int|float
  {
    return $x - $y;
  }

  function multiplication(int|float $x, int|float $y): int|float
  {
    return $x * $y;
  }

  function divide(int|float $x, int|float $y): int|float
  {
    return $x / $y;
  }

  function modulus(int|float $x, int|float $y): int|float
  {
    return $x % $y;
  }
  ?>

  <div>3 + 4 = <?= add(3, 4) ?></div>

  <div>4 - 3 = <?= subtract(4, 3) ?></div>

  <div>4 * 3 = <?= multiplication(4, 3) ?></div>

  <div>4 / 3 = <?= divide(4, 3) ?></div>

  <div>4 % 3 = <?= modulus(4, 3) ?></div>

  <!-- division by zero throws an exception -->


</body>

</html>