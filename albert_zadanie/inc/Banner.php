<?php
    class Banner{
        public $heading;

        function __construct(){
            
        }
        
        function get_heading($page){
            switch($page){
                case 'index':
                    return $this->heading = "Najlepšie web stránky";
                    break;
                case 'kontakt':
                    return $this->heading = "Kontaktujte nás";
                    break;
                case 'portfolio':
                    return $this->heading = "Naše portfólio";
                    break;
                case 'qna':
                    return $this->heading = "Najčastejšie otázky";
                    break;
            } 
        }

    }
    $Banner = new Banner();
?>