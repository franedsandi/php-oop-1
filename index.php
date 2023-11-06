<?php
require_once __DIR__ . '/Model/movie.php';
require_once __DIR__ . '/Model/genre.php';
require_once __DIR__ . './db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>OOP MOVIES</title>
</head>
<body>
<div class="container d-flex">
    <?php foreach($movies as $movie): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->getFullName(); ?></h5>
          <p class="card-text">Genre: <?php echo $movie->genre->getAllGenres(); ?></p>
          <p class="card-text">Status: <?php echo $movie->isGood; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>