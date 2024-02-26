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

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Hotel Description</th>
                    <th scope="col">Parking Available</th>
                    <th scope="col">Hotel Valuation</th>
                    <th scope="col">Distance to City</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel): ?> 

                <tr>
                  <td><?= $hotel['name'] ?></td>
                  <td><?= $hotel['description'] ?></td>
                  <td><?= $hotel['parking'] ?></td>
                  <td><?= $hotel['vote'] ?></td>
                  <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>