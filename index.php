<?php require_once __DIR__ . '/./partials/init.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel list</title>
</head>

<body>
    <div class="container mt-5">


        <form method="GET" class="form-control">
            <div class="row">


                <div class="col-3">
                    <label for="parking" class="form-label">Parking</label>
                    <select class="form-select" id="parking" name="parking" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <button class="btn btn-primary mt-3">Search</button>

                </div>

                <div class="col-3">
                    <label for="star" class="form-label">Hotel Stars</label>
                    <select class="form-select" id="star" name="star" required>
                        <option selected disabled value="">Choose...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

            </div>
        </form>

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
                        <td>
                            <?= $hotel['name'] ?>
                        </td>
                        <td>
                            <?= $hotel['description'] ?>
                        </td>
                        <td>
                            <?= $hotel['parking'] ? 'Yes' : 'No' ?>
                        </td>
                        <td>
                            <?= $hotel['vote'] ?>
                        </td>
                        <td>
                            <?= $hotel['distance_to_center'] ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>