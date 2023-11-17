<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="animal">
    membuat class
  </div>

  <?php
require_once 'animal.php';
$sheep = new Animal("shaun");
echo $sheep->name;
echo $sheep->legs;
echo $sheep->cold_blooded;
?>


<h1 class="animalis">
  membuat frog.php ape.php dan index.php
</h1>
<?php
  require_once 'Frog.php';
  require_once 'Ape.php';
    $sungokong = new Ape("kera sakti");
    echo $sungokong->name . "\n";
    echo $sungokong->legs . "\n";
    echo $sungokong->cold_blooded . "\n"; 
    $sungokong->yell();
    $kodok = new Frog("buduk");
    echo $kodok->name . "\n";
    echo $kodok->legs . "\n";
    echo $kodok->cold_blooded . "\n";
    $kodok->jump();
?>



</body>
</html>