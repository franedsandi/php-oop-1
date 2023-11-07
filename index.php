<?php
require_once __DIR__ . '/Model/production.php';
require_once __DIR__ . '/Model/genre.php';
require_once __DIR__ . '/Model/movies.php';
require_once __DIR__ . '/Model/tvseries.php';
require_once __DIR__ . './db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>OOP PRODUCTIONS</title>
</head>
<body>
<div class="container d-flex flex-wrap">
    <?php foreach($productions as $production): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-uppercase"><?php echo $production->name; ?></h5>
          <p class="card-text text-uppercase">Media: <?php echo get_class($production) ?></p>
          <p class="card-text">Genre: <?php echo $production->genre->getAllGenres(); ?></p>
          <p class="card-text">Status: <?php echo $production->isGood; ?></p>
          <?php if ($production instanceof movie) : ?>
            <p class="card-text">Published Year: <?php echo $production->published_year; ?></p>
            <p class="card-text">Running Time: <?php echo $production->running_time; ?></p>
          <?php elseif ($production instanceof tvserie) : ?>
            <p class="card-text">Aired From Year: <?php echo $production->aired_from_year; ?></p>
            <p class="card-text">Aired To Year: <?php echo $production->aired_to_year; ?></p>
            <p class="card-text">Number of Episodes: <?php echo $production->number_of_episodes; ?></p>
            <p class="card-text">Number of Seasons: <?php echo $production->number_of_seasons; ?></p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
</div>
</body>
</html>