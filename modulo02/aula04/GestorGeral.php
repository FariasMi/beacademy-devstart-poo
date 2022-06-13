<?php
    class GestorGeral extends Gestor{
        private float $bonusAnual;

      
        public function getBonusAnual():float{
            return $this -> bonusAnual;
        }

        public function setBonusAnual(float $novoBonus){
            $this->bonusAnual = $novoBonus;
        }



    }





?>