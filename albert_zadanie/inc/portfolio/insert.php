<?php

    require('../database.php');
    $db = new Database();
    if(isset($_POST['insert_portfolio'])){
        $data = [
            'name' => $_POST['name'],
            'image' => $_POST['image'],
        ];
        $query = "INSERT INTO portfolio (name, image) VALUES (:name, :image)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    } else {
        echo 'nieco sa pokazilo';
    }

?>