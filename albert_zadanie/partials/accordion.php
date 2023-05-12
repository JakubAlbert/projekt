<?php

    class Accordion{
      public $db;

      function get_accordion(){

        
      try{
        $this->db = new Database();
        $query = $this->db->conn->query("SELECT * FROM qna");
        $accordion = $query->fetchAll(PDO::FETCH_OBJ);
        $temp_i = 0;
        for ($i=0;$i<count($accordion);$i++){
          $temp_i = $temp_i + 1;
            echo '<div class="accordion">';
            echo '<div class="question">';
              echo $accordion[$i]->otazka;
            echo '</div>';
            echo '<div class="answer">';
              echo $accordion[$i]->odpoved;
            echo '</div>';
            echo '</div>';
      }
      } catch(PDOException $e) {
        print($e->getMessage());
    }
      }
    }
    
    $Accordion = new Accordion();
?>


