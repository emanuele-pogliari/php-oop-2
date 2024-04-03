<?php require "./db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Oop 2</title>
</head>

<body>


    <div class="container">
        <h1>Pet e-commerce</h1>
        <div class="row">
            <?php
            foreach ($products as $product) {
            ?>
                <div class='card col-3 m-3'>
                    <img src='<?= $product->image ?>'>
                    <h3> <?= $product->title ?></h3>
                    <p> <?= $product->description ?></p>
                    <p> <?= $product->price ?></p>
                    <p><?= is_a($product, 'Foods') ? $product->quantity : '' ?></p>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>