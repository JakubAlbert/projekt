<?php
    class Menu{
        public $menu;

        function __construct($menu){
            $this->menu = $menu;
        }
        function get_menu(){
            return $this->menu;
        }
    }
    $Header_menu = new Menu(array("Domov"=>"index.php",
                                  "Portfólio"=>"portfolio.php",
                                  "Q&A"=>"qna.php",
                                  "Kontakt"=>"kontakt.php",
                        ));
    $Footer_menu = new Menu(array("Portfólio"=>"portfolio.php",
                                  "Q&A"=>"qna.php",
                                  "Kontakt"=>"kontakt.php",
                        ));
    function print_menu($menu){
        $menu_items = $menu->get_menu();
        foreach($menu_items as $page=>$url){
            echo '<li><a href="'.$url.'">'.$page.'</a></li>';
        }
    }
    
?>