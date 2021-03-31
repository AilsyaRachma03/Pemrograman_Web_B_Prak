<!-- praktikum modul 5  -->
<!-- sekarang interaksi dengan user mis form url  -->

<!-- beda include sama require 
require = eror gabisa jalan 
include = eror tetep jalan  -->

<!-- isi lewat user  -->

<!-- super global = variabel ini bisa ngankses dari mana aja  -->


<?php
    class Tabung{
        private $diameter;
        private $tinggi;
        private $luas=0;
        private $r;
        private $phi = 3.14;

        public function setDiameter($value){
            $this->diameter =$value;
            $this->r = $this->diameter /2;
        }

        public function setTinggi($value1){
            $this->tinggi =$value1;
        }

        public function getLuas(){
            return $this->luas = 3.14 * $this->diameter * $this->tinggi;
        }

        // public function getLuas(){
        //     return $this->luas;
        // }
    }
?>