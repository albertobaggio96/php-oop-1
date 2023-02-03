<?php 
  require_once __DIR__ . '/models/Movie.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPP</title>
</head>
<body>
  <?php 
    $backToTheFuture = new Movie("Back To The future", "Lorem, ipsum dolor sit amet consectetur adipisicing elit.", "science fiction");
    $titanic = new Movie("Titanic", "Lorem, ipsum dolor sit amet consectetur adipisicing elit.", "Romantic");

    var_dump($backToTheFuture, $titanic);
  ?>
</body>
</html>