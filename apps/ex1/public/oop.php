<?php include_once("../includes/Students.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop</title>
  <?php include_once("../includes/styles.php"); ?>
</head>

<body>
  <h1>OOP and classes</h1>
  <a href="/">Home</a>


  <div>
    <?php
    $student1 = new Student("Favour", "Onyemali");
    echo $student1->firstName;

    $student1->firstName = "Favor";

    echo "<br>";

    echo $student1->getFullName();


    $student2 = new Student("Law", "Onyemali");

    $student3 = new Student("Favour", "Law");

    $student4 = new Student("vour", "mali");

    $students = [$student1, $student2, $student3];

    array_push($students, $student4);


    ?>
  </div>
  <ol>
    <?php
    for ($i = 0; $i < count($students); $i++) {
      echo "<li>" . $students[$i]->getFullName() . "</li>";
    }
    ?>
  </ol>

  <ul>
    <?php
    foreach ($students as $s) { // takes the array first and uses as "iterative variable"
      // as == in c#
      echo "<li>" . $s->getFullName() . "</li>";
    }

    ?>
  </ul>
</body>

</html>