<?php
    
    class Appointment{
        public $db;

        function get_appointment(){
            $this->db = new Database();
           
            try{
                $query = $this->db->conn->query("SELECT * FROM appointment");
                $appointment = $query->fetchAll(PDO::FETCH_OBJ);
                return $appointment;
                }catch(PDOException $e){
                    print_r($e->getMessage());
                } 
            }
    }
    $Appointment = new Appointment();
?>