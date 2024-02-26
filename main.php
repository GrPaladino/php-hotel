<?php
require_once './data.php';


$form_sent = !empty($_GET);


if ($form_sent) {
    $parking = ($_GET['parking'] == 'Available') ? true : false;
    $filtered_star = $_GET['star'];

    $filtered_hotel = [];

    foreach ($hotels as $hotel) {

        if (($hotel['parking'] == $parking) && ($hotel['vote'] >= $filtered_star)) {
            $filtered_hotel[] = $hotel;
        }
    }

} else {
    $filtered_hotel = $hotels;
}




