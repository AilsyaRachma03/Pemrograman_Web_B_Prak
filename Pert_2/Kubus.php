<?php
//bussines login
    // class Kubus{
    //     public $sisi;

    //     public function getLuas(){
    //         $luas = 0;
    //         $luas = 6 * pow($this->sisi, 2);
    //         return $luas;
    //     }
    // }
?> 

<?php
//bussines login
    class Kubus{
        private $sisi;

        public function setSisi($option){
            $this->sisi = $option;
        }
        public function getSisi(){
            return $this->sisi;
        }
        public function getLuas(){
            $luas = 0;
            $luas = 6 * pow($this->sisi, 2);
            return $luas;
        }
        public function getVolum(){
            $volume = 0;
            $volume = pow($this->sisi, 3);
            return $volume;
        }
    }
?>