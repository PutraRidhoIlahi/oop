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



</body>
</html>