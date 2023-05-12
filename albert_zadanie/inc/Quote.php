<?php
    class Quote{
        public $quote;

        function get_quote($page){
            switch($page){
                case 'index':
                    return $this->quote = "Citát domov";
                    break;
                case 'kontakt':
                    return $this->quote = "Citát kontakt";
                    break;
                case 'portfolio':
                    return $this->quote = "Citát portfólio";
                    break;
                case 'qna':
                    return $this->quote = "Citát qna";
                    break;
            } 
        }

    }
    $Quote = new Quote();
?>