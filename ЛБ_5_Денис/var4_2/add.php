<?php

$dsn = "mysql:host=localhost; dbname=var_4";
$user = 'root';
$pass = '';

try {

    $dbh = new PDO($dsn,$user,$pass);

    $id_text = $_GET["id_text"];
    $name_text = $_GET["name_text"];


    if (!empty($id_text) && !empty($name_text)){

        $sql = "INSERT INTO actor(ACTOR_ID , ACTOR_NAME) VALUES(:id_text,:name_text)";
        $params = [':id_text' =>$id_text, ':name_text' =>$name_text];

        $stmt = $dbh->prepare($sql);
        $stmt->execute($params);

        echo 'Успешно';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}