<?php
    class Portfolio{
        public $db;

        function get_portfolio(){

            try{
                $this->db = new Database();
                $query = $this->db->conn->query("SELECT * FROM portfolio");
                $portfolio = $query->fetchAll(PDO::FETCH_OBJ);
                $temp_i = 0;
                for ($i=0;$i<count($portfolio);$i++){
                    $temp_i = $temp_i + 1;
                    if($temp_i%4==1){
                        echo '<div class="row">';
                        echo '<div class="col-25 portfolio text-white text-center" style="background-image:url(\''.$portfolio[$i]->image.'\');"'.'>';
                        echo $portfolio[$i]->name;
                        echo '</div>';
                    }
                    elseif($temp_i%4==0){
                        echo '<div class="col-25 portfolio text-white text-center" style="background-image:url(\''.$portfolio[$i]->image.'\');"'.'>';
                        echo $portfolio[$i]->name;
                        echo '</div>';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-25 portfolio text-white text-center" style="background-image:url(\''.$portfolio[$i]->image.'\');"'.'>';
                    echo $portfolio[$i]->name;
                    echo '</div>';
                    }
                }

            } catch(PDOException $e) {
                print($e->getMessage());
            }

        }
    }
    $Portfolio = new Portfolio();
?>