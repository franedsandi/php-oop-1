<?php
  $productions = [
    new movie('Green Lantern', 'DC', new Genre('Action', 'Animation'), 20, 2011, "100 mins"),
    new tvserie('Avatar: The legend of Angg', 'Avatar Studios', new Genre('Action', 'Animation'), 100, 2005, 2008, 61, 3),
    new movie('Avengers', 'Marvel', new Genre('Action', 'Drama'), 100, 2012, "143 mins" ),
    new tvserie('Loki', 'Marvel', new Genre('Action', 'Animation'), 70, 2021, "still on air", 16, 2),
    new movie('Black Widow', 'Marvel', new Genre('Animation', 'Action'), 70, 2021, "133 mins"),
    new tvserie('Hajime no Ippo', 'Mad House', new Genre('Sport', 'Anime'), 1000, 2000, 2002, 127, 3),
    new movie('Antman Quantummania', 'Marvel', new Genre('Animation', 'Drama'), 40, 2023, "125 mins"),
    new tvserie('Digimon Adventure', 'Toei', new Genre('Action', 'Anime'), 45, 1999, 2000, 54, 1),
    new tvserie('The Chilling adventures of Sabrina', 'Netflix', new Genre('Drama', 'Romance'), 51, 2008, 2008, 36, 3),
    new movie('Aquaman', 'DC', new Genre('Action', 'Drama'), 600, 2018, "143 mins")
  ];
?>