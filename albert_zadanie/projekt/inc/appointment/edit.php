<?php
require('../config.php');
$appointment = $Appointment->get_appointment();
$db =  new Database();
if(isset($_POST['update_appointment'])){

    $data = [
        'ID' => $_POST["form_id"],
        'first_name' => $_POST["first_name"],
        'last_name' => $_POST["last_name"],
    ];
    foreach ($appointment as $a){
        if($a->ID==$data['id']){
            if(empty($data['first_name'])){
                $data['first_name'] = $a->first_name;
            }
            if(empty($data['last_name'])){
                $data['last_name'] = $a->last_name;
            }
        }
    }
    try{
        $query =  "UPDATE appointment SET first_name=:first_name, last_name=:last_name WHERE ID=:ID";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        if(isset($_SERVER['HTTP_REFFERER'])){
            header("Location: {$_SERVER['HTTP_REFFERER']}");
        }else{
            header("Location: ../../index.php");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }

}else{
    print_r("F");
}
?>