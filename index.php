<?php
include __DIR__ . '/data/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
include __DIR__ . '/includes/head.php'
?>

<body>
    <header class="bg-dark text-white text-center mb-5 p-5">
        <h1>Cinema</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col-6">
                        <div class="card">
                            <img src="<?= $movie->poster ?>" class="card-img-top" alt="<?= $movie->title ?>">
                            <div class="card-body">
                                <div class="card-title">
                                    <?= $movie->title ?>
                                </div>
                                <div class="card-text">
                                    Durata: <?= $movie->length ?>
                                </div>
                                <div class="card-text">
                                    Genere: <?= $movie->genre->name ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>




</body>

</html>