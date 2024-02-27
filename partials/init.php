<?php
require_once __DIR__ . '/../data/data.php';


$form_sent = !empty($_GET);


if ($form_sent) {

    $hotels = array_filter($hotels, function ($hotel) {
        $parking = ($_GET['parking'] == 'Yes') ? true : false;
        $filtered_star = $_GET['star'];

        if (($hotel['parking'] == $parking) && ($hotel['vote'] >= $filtered_star))
            return ($hotel);

    });
}





