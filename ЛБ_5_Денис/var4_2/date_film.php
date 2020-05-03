<?php

$dsn = "mysql:host=localhost; dbname=var_4";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $date = $_GET["date"];

    $datestart = "SELECT film.FILM_NAME FROM film WHERE film.FILM_DATE = '". $date ."'";

    foreach ($dbh->query($datestart) as $row) {
        echo $row['FILM_NAME'];
        echo "&nbsp;";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}