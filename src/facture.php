<?php

    namespace MIM;

    use MIM;

    class Facture{
        private $rows;

        public function __construct()
        {
            $this->rows = array();
        }

        public function addRow(Row $row){
            $this->rows[] = $row;

            return $this;
        }

        public function getRows(){
            return $this->rows;
        }

        public function getTotalPriceTTC(){
            $total = 0;
            foreach($this->rows as $row){
                $total = $total + $row->getTotalPrice();
            }
            return $total;
        }
        public function getTotalPriceHT(){
            $total = 0;
            foreach($this->rows as $row){
                $total = $total + ($row->getPriceExcludeVat()*$row->getHours());
            }
            return $total;
        }
    }
?>