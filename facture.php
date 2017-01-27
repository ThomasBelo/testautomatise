<?php
    class Facture{

        public $heure_dev = 0;

        public $heure_graph = 0;

        public function Editheuredev($heures){
            $this->heure_dev = $heures;
    }

        public function Editheuregraph($heure){
            $this->heure_graph = $heure;
    }

    public function calcul(){
        $total = $this->heure_dev + $this->heure_graph;
        return $total;
    }
}
?>