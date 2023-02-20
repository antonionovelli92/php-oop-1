<?php
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';

$action = new Genre('action');


$rocky = new Movie('Rocky', '1:45h', 'https://static.posters.cz/image/1300/poster/rocky-1-i15922.jpg', $action);
$rambo = new Movie('Rambo', '1:45h', 'https://pad.mymovies.it/filmclub/2006/02/308/locandina.jpg', $action);

$movies = [$rocky, $rambo];
