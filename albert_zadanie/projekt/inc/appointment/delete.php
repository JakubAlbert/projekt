<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_appointment'])){
    try{
        $id = $_POST["delete_appointment"];
        $sql = $sql = 'DELETE FROM appointment WHERE id ='.$id;
        $db->conn->exec($sql);
        header("Location: http://localhost/projekt/index.php");
        exit();
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>