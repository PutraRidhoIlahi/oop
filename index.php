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
  require_once 'animal.php';
  require_once 'Ape.php';
  require_once 'Frog.php';

  $sheep = new Animal("shaun: \n");
  echo $sheep->name . "\n";
  echo $sheep->legs . "\n";
  echo $sheep->cold_blooded;
  echo "\n\n";

  $sungokong = new Ape("kera sakti: \n");
  echo "name: " . $sungokong->name . "\n";
  echo "legs: " . $sungokong->legs . "\n";
  echo "cold_blooded: " . $sungokong->cold_blooded . "\n";
  $sungokong->yell();
  echo "\n\n";

  $kodok = new Frog("buduk: \n");
  echo "name: " . $kodok->name . "\n";
  echo "legs: " . $kodok->legs . "\n";
  echo "cold_blooded: " . $kodok->cold_blooded . "\n";
  $kodok->jump();
  echo "\n\n";
  ?>




</body>
</html>