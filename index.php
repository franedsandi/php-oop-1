<?php

try {
require_once __DIR__ . './Traits/yearsAgo.php';
require_once __DIR__ . './Model/production.php';
require_once __DIR__ . "./Model/Media.php";
require_once __DIR__ . './Model/movies.php';
require_once __DIR__ . './Model/tvseries.php';
require_once __DIR__ . './db/db.php';

} catch (Exception $e){
  $error = $e->getMessage();
}
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
<body style="background-color: black;">
<div class="container d-flex flex-wrap justify-content-between mt-5">
  <?php if(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $error ?>
    </div>
  <?php else: ?>
    <?php foreach($productions as $production): ?>
      <div class="card mb-5 p-3" style="width: 18rem; background-color: grey;">
        <img src="img/<?php echo $production->image?->file_name ?? "$this->name" ?>" class="card-img-top" alt="<?php echo $production->image?->name ?? " " ?>" style="height: 380px; border-radius: 10px;">
        <div class="card-body p-0 pt-3" style="color:white;">
          <h5 class="card-title text-uppercase"><?php echo $production->name; ?></h5>
          <p class="card-text text-uppercase">Media: <?php echo get_class($production) ?></p>
          <p class="card-text">Genre: <?php echo implode(" - ", $production->genre); ?></p>
          <p class="card-text">Status: <?php echo $production->isGood; ?></p>
          <?php if ($production instanceof movie) : ?>
            <p class="card-text">Published Year: <?php echo $production->year; ?></p>
            <p class="card-text">Running Time: <?php echo $production->running_time; ?></p>
          <?php elseif ($production instanceof tvserie) : ?>
            <p class="card-text">Aired From Year: <?php echo $production->year; ?></p>
            <p class="card-text">Aired To Year: <?php echo $production->aired_to_year; ?></p>
            <p class="card-text">Number of Episodes: <?php echo $production->number_of_episodes; ?></p>
            <p class="card-text">Number of Seasons: <?php echo $production->number_of_seasons; ?></p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <ul class="list-group my-3" >
      <?php foreach($productions as $production): ?>
        <li class="list-group-item" style="color:white; background-color: grey;"> <?php echo $production->getFullInfo() ?> <span style="font-weight: 600; color:yellow;" >Published: <?php echo $production->getYearsAgo() ?> years ago </span>  </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
</body>
</html>