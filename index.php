<?php require "./db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Oop 2</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="my-logo" src="./img/pngwing.com.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cane</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gatto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pesci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Piccoli animali</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mx-auto justify-content-center">
            <?php
            if ($error) {
            ?>
                <div class="alert alert-warning" role="alert">
                    <?= $error ?>
                </div>
            <?php
            }
            ?>
            <?php
            foreach ($products as $product) {
            ?>
                <div class="col-4">
                    <div class='card m-3 p-0 border-0 rounded-3 overflow-hidden  '>
                        <div class="my-badge"><?= $product->category->getCategory() ?></div>
                        <img class="pb-2" src='<?= $product->image ?>'>
                        <div class="card-body p-2">
                            <h3 class="title"><?= $product->title ?></h3>
                            <p class="product-details"><?= $product->description ?></p>
                            <p class="product-food-quantity"><?= is_a($product, 'Foods') ? 'Quantità: ' . $product->sizeSmall : '' ?></p>
                            <p class="product-food-ingredients"><?= is_a($product, 'Foods') ? 'Ingredienti: ' . $product->ingredients : '' ?></p>
                            <p class="product-games-material"><?= is_a($product, 'Games') ? 'Composizione: ' . $product->material : '' ?></p>
                            <p class="product-beds-size"><?= is_a($product, 'Beds') ? 'Dimensioni: ' . $product->sizeMedium : '' ?></p>
                            <p class="product-price">Prezzo: <?= $product->price ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>