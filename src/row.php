<?php

    namespace MIM;

    class row{
        private $description;

        private $priceExluceVat;

        private $vat;

        private $hours;

        public function setDescription($description){
            $this->description = $description;

            return $this;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setVat($vat){
            $this->vat = $vat;

            return $this;
        }

        public function getVat(){
            return $this->vat;
        }

        public function setPriceExluceVat($price){
            $this->priceExluceVat = $price;
            return $this;
        }

        public function getPriceExluceVat(){
            return $this->priceExluceVat;
        }

        public function setHours($hours){
            $this->hours = $hours;

            return $this;
        }

        public function getHours(){
            return $this->hours;
        }

        public function getTotalPrice(){
            $price = $this->hours * ($this->priceExluceVat + (($this->vat/100)*$this->priceExluceVat));
            return $price;
        }
    }
?>