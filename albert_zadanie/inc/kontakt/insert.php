<?php

    require('../database.php');
    $db = new Database();
    if(isset($_POST['insert_kontakt'])){
        $data = [
            'meno' => $_POST['meno'],
            'email' => $_POST['email'],
            'sprava' => $_POST['sprava'],
        ];
        $query = "INSERT INTO kontakt (meno, email, sprava) VALUES (:meno, :email, :sprava)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    } else {
        echo 'nieco sa pokazilo';
    }

?>