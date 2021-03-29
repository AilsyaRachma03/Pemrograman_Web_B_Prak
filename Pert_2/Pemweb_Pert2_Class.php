<?php
// Kelas adalah template dari suatu object 

// class user{ *clasnnya
    //*propertynya
// }

// di property terdapat akses keyword 
// a. public
// b. privat
// c. protected
// class User{
//     public $name;
//     public $age;
//     private $gender;
// }

// $sasuke = new User;
// $sasuke -> name = "Uchiha Sasuke";
// $sasuke -> gender ="Male"; // can not access private
    require './Pemweb_Pert2_Funct.php';// untuk manggil2 function di file lain

    class User{
        public $name;
        public $age;
        private $gender="None";


        public function setGender($gender_name){// fungsi user
            $this->gender = $gender_name;
        }// fungsi yang gabalikin nilai 
        // ini adalah fungsi yang mengganti isi variabel


        public function getGender(){
            printNumC();// salah satu contoh funct 
            return $this->gender;
        }// ini adalah fungsi untuk mengembalikan nilai
    }

$sasuke = new User;
$sasuke -> name = "Uchiha Sasuke";
$sasuke->setGender("Male");
// echo($sasuke->getGender());
$sasuke->getGender();


// cara akses property di dalam kelas harus pakai this
// getter ambil value privtae 
// klo mau ganti isi private harus buat method



//----------Bedanya Fungsi dan Method-----------------
// Fungsi = leih global dan digunakan untuk keperluan umum, dapat digunakan di semua file 
// Method = fungsi yang ada di dalam kelas, harus buat class dulu khusus untuk objek itu sendiri
//misal buat function pasti berkomitmen kalau fungsi akan diperlukan untuk digunakan di semua file 
?>