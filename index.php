<?php require_once './main.php' ?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel list</title>
</head>
<body>
    <div class="container mt-5">
        <?php foreach ($hotels as $hotel): ?> 
            <?= $hotel['name'] ?> <br>
            <?= $hotel['description'] ?><br>
            <?= $hotel['parking'] ?><br>
            <?= $hotel['vote'] ?><br>
            <?= $hotel['distance_to_center'] ?><br>
            <hr>
            <?php endforeach ?>
    </div>
</body>
</html>