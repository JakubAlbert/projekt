<?php

    require('../database.php');
    $db = new Database();
    if(isset($_POST['insert_qna'])){
        $data = [
            'otazka' => $_POST['otazka'],
            'odpoved' => $_POST['odpoved'],
        ];
        $query = "INSERT INTO qna (otazka, odpoved) VALUES (:otazka, :odpoved)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    } else {
        echo 'nieco sa pokazilo';
    }

?>