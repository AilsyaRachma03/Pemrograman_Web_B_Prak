<!DOCTYPE html>
<html>
  <head>
    <title> Belajar PHP </title>
    <meta charset="utf-8">
    </head>
    <body>
        <!-- Tag dasar PHP fungsi Echo  -->
    <?php 
      /*
      21. OPERATOR LOGIKA
      1. ==  : menguji kecocokan aja 
      2. === : menguji teks dan tipe datanya jika tipe data sama = berhasil eksekusi
      jika tipe data berbeda = maka gagal eksekusi
      3. >  : lebi kecil
      4. >= : lebih kecil sama dengan 
      5. < 
      6. <=
      7. != : negasi 
      */

      $password = '123';
      $password1 = '12345';
      $password2 = 12345;
      $password3 = '12345';
      $password4 =1000;
      $password5 = 999;
      $password6 = 1000; 

      echo "<br> OPERATOR LOGIKA  <br>"; 
      echo "1. menguji === <br>";
      echo "__a. menguji === pada tipe data sama<br>";
      if($password1 === $password3){ // syarat yang diuji pke '=='
        echo ' Selamat datang! <br>';// boleh lebih dr satu barkod
      }else{
        echo 'Gagal, coba lagi <br>';
      };

      echo "__b. menguji === pada tipe data beda<br>";
      if($password1 === $password2){ // syarat yang diuji pke '=='
        echo ' Selamat datang! <br>';// boleh lebih dr satu barkod
      }else{
        echo 'Gagal, coba lagi <br>';
      };

      echo " <br>2. menguji > dan >= <br>";
      echo "__a. menguji > <br>";
      if($password4 > $password5){ // syarat yang diuji pke '=='
        echo ' Password lebih besar<br>';// boleh lebih dr satu barkod
      }else{
        echo ' Password lebih kecil <br>';
      };

      echo "__b. menguji >= <br>";
      if($password4 > $password6 ){ // syarat yang diuji pke '=='
        echo ' Password lebih besar sama dengan<br>';// boleh lebih dr satu barkod
      }else{
        echo ' Password lebih kecil sama dengan <br>';
      };

      echo "<br> 3. menguji != <br>";
      echo "__a. menguji > <br>";
      if($password4 != $password2){ // syarat yang diuji pke '=='
        echo ' Benar !,  password tidak sama<br>';// boleh lebih dr satu barkod
      }else{
        echo ' Salah !,  password sama <br>';
      };


      /*
      22. ELSE IF 
      cara menambahkan kondisi boleh lebih dri 1 
      */

      $cuan_p = 1000;
      $keyboard = 2000;
      $cuan_d = 4000;

      echo "<br> ELSE IF  <br>"; 
      if ($cuan_p > $keyboard){
        echo 'Gas Beli <br>';
      }else if( $cuan_p > $keyboard or $cuan_d > $keyboard){
        echo 'Gas Beli <br>';
      }else{
        echo ' Uang Kurang Bos! <br>';
      };

      /*
      23. NESTED IF 
      if bersarang , if didalam if 
      */

      echo "<br> NESTED IF  <br>"; 
      if ($cuan_p > $keyboard){
        echo 'Gas Beli <br>';
      }else if( $cuan_p > $keyboard or $cuan_d > $keyboard){
        echo 'Gas Beli <br>';
        if($cuan_d >= $keyboard*2){
          echo 'bisa dibeli sebanyak 2 kali';
        };
      }else{
        echo ' Uang Kurang Bos! <br>';
      };

      /*
      24. PEMAKAIAN TRUE FALSE
      if bersarang , if didalam if 
      */

      $cuan_p = 1000;
      $keyboard = 2000;
      $cuan_d = 4000;

      // true atau false 
      $hasil = true;
      echo "<br><br>TRUE FALSE <br>"; 
      if ($hasil){
        echo 'Gas Beli <br>';
      }else if($hasil){
        echo 'Gas Beli <br>';
        if($cuan_d >= $keyboard*2){
          echo 'bisa dibeli sebanyak 2 kali';
        };
      }else{
        echo ' Uang Kurang Bos! <br>';
      };

      /*
      25. dAN ATAU 
      && DAN  : DUA KONDISI MEMENUHI
      || ATAU : CUKUP SATU KONDISI 
      */

      echo "<br> DAN ATAU   <br>"; 
      echo "1. ATAU   <br>"; 
      if ($cuan_p > $keyboard 
          || $cuan_d > $keyboard){
        echo 'Gas bisa Beli <br>';
      }else{
        echo ' Uang Kurang Bos! <br>';
      };

      echo "2. DAN   <br>"; 
      if ($cuan_p > $keyboard 
          && $cuan_d > $keyboard){
        echo 'Gas bisa Beli <br>';
      }else{
        echo ' Uang Kurang Bos! <br>';
      };

      /*
      26. SWITCH CASE 
      Berguna jika banyak yang diuji 
            switch(variable){
        case 'value':
          #code
          break;

        default:
          #code
          break;
      }
      */
      
      $nama ='Rachmann';
      echo "<br> SWITCH CASE <br>"; 
      switch($nama){
        case 'Ailsya':
          echo 'Namanya Ailsya';
          //boleh kasih lagi 
          break; // setiap nilai udah memenugi oke gausah nguji
        case 'Tika':
          echo 'Namanya Tika';
            //boleh kasih lagi 
            break; // setiap nilai udah memenugi oke gausah nguji
        case 'Rachma':
          echo 'Namanya Rachma';
            //boleh kasih lagi 
            break; // setiap nilai udah memenugi oke gausah nguji
        default:
            echo 'gaada bener';
            break;
          };

      
      /*
      27. FUNGSI PHP
      Blok kode yang disimpan dalam satu nama dan dapat digunakan berkali kali
      tak terbatas mo panggil berapa kali
      */
      // contoh penulisan :
      // function panggil(){

      // }
      //panggil()
      
      echo "<br><br> FUNCT <br>"; 
      function panggil()
      {
        echo '-----';
        echo 'Akademi Ninja';
        echo '-----';
      };
      function jarak()
      {
        echo '<br>';
      };

      panggil();
      jarak();
      panggil();
      jarak();
      panggil();

      /*
      28. PARAMETER FUNGSI
      Variabel yang ingin dibuat saat ingin memanggil fungsi agar bisa 
      oper nilai saat manggil  
      */

      echo "<br><br> FUNCT <br>"; 
      echo "<br>1. 1 paramet <br>"; 
      function print_text($t)
      {
        $t ='kartun '.$t;
          echo '-----';
          echo $t;
          echo '-----';
      }

      function j(){
        echo '<br>';
      }

      print_text('Doraemon');
      j();
      print_text('Naruto');
      j();
      print_text('SinChan');

      echo "<br>2. lebih dr 1 paramet <br>"; 
      function print_1($te, $e)
      {
        $te ='kartun '. $te. " " . $e;
          echo '-----';
          echo $te;
          echo '-----';
      }

      function jr(){
        echo '<br>';
      }

      print_1('Doraemon', 1);
      jr();
      print_1('Naruto', 2);
      jr();
      print_1('SinChan',3 );


      /*
      29. RETURN 
      setiap manggil fungsi ngebalikin nilainya
      ngasih nilainya tapi terserah kita mau ngapain 
      */
      echo "<br><br> RETURN <br>"; 
      function hitung($a, $b){
        $z = $a + $b;
        return $z;
      }
      echo 'hasil dari penjumlahan = '.hitung(11, 12).'<br>';
      $var = hitung(4, 8) * 100;
      echo 'hasil dari penjumlahan dan kali 100 = '.$var.'<br>';
      
      /*
      30. SCOPE
      Lingkup hidup dari suatu parameter 
      dimana posisi variabel bisa dipakai
      */
      // caranya dengan memberikan nama global 
      $i = 2;
      $j = 3; // diluar fungsi tidak dipedulikan 
      function menghitung(){
      // fungsi tidak peduli dengan variable diluar fungsi 
      // caranya kasi global 
        global $i, $j;
        $k = $i + $j;
        return $k;
      }
      echo "<br><br> SCOPE <br>"; 
      echo "1. Penulisan Pertama <br>"; 
      echo menghitung();


      $i = 2;
      $j = 3;
      function kali(){
        // fungsi tidak peduli dengan variable diluar fungsi 
        // caranya kasi global 
          $k = $GLOBALS['i'] * $GLOBALS['j'] ;
          return $k;
        }
        echo "<br><br>2. Penulisan Kedua <br>"; 
        echo kali();

      /*
      31. ANONYMOUS FUNCT
        Bedanya nanti kita ga kasih nama setelah funct 

        Penulisan Anonymous Function
      
        $nulis = function(){

      };
      */
      echo "<br><br> ANONYMOUS FUNCTION <br>"; 
      echo "1. Cara 1 <br>";
      $nulis = function(){
        echo 'kutumbuk kau, sekali lagi ngelawan kutengok lah kau';
      };

      $nulis();

      echo "<br><br>2. Cara 2<br>";
      $menulis = function($tulis){
        echo $tulis;
      };

      $menulis('kutumbuk kau, sekali lagi ngelawan kutengok lah kau');

      echo "<br><br>3. Mewariskan fungsi<br>";
      $ucap = $nulis;
      $ucap();
      // keuntungannya bisa dipakai pas call back funct 
      // bisa mindahin nilai fungsi ini ke nilai fungsi lain

      /*
      32. CALLBACK FUNCT
      Memanggil fungsi setelah fungsi sebelumnya dijalankan 
      */
      echo "<br><br> CALLBACK FUNCTION <br>"; 
      echo "<br> 1. Cara 1 <br>";
      function jerit($callback){
        echo 'woy belagu kau jadi anak magang !<br>';
        // $callback(); //cara 1 callback
        call_user_func($callback); // cara 2 callback
      }
      $call = function(){ // penataan cara 1
        echo 'eleeh, ... muncung kau tu kaya ga disekolahkan aja lah';
      }; // penataan cara 1

      jerit($call);
      // $callback(); //cara 1 callback
      echo "<br><br> 2. Cara 2 <br>";
      function umpat($callback){
        echo 'woy belagu kau jadi anak magang !<br>';
        
        if ( is_callable($callback) ){ // menguji nilai parameter sebuah fungsi 
          call_user_func($callback, 'kau ini yang bener bener ajal lah kutengok'); // cara 2 callback
        }else{
          echo 'Salah nyet!';
        }

        }

      $calls = function($marah){ // penataan cara 2
        echo $marah; // penataan cara 2
      };

      umpat($calls);

      // Cara altern
      // jerit(function(){
      //   echo 'eleeh,... muncung kau tu kaya ga disekolahkan aja'
      // });

      /*
      33. MENAMPILKAN ERROR
      Memanggil fungsi setelah fungsi sebelumnya dijalankan 
      */
      // antisipasi aplikasi yang tidak otomatis menampilkan error kode 
      // contoh mamp
        // phpinfo(); cek 

        //penulisan php
        echo "<br><br> CALLBACK FUNCTION <br>"; 
        //cemderung makin singkat makin dipilih

        /*
        <?php echo 'Hai';?>
        <? echo 'Hai';?>
        <?= 'Hai';?>
        */
      
      /*
      34. DIE VAR DUMO
      Cara menampilkan output lainnya
      */
      // echo
      // print
      // print_r

      //ada lagi untuk debuging (cari error)
      // die
      // var_dump
      echo "<br><br> DIE VAR_DUMP <br>"; 
      echo "1. var_dump <br>"; 
      $car ='mobil <br>';
      var_dump($car) ; //mnampilkan info detail (tipe daat bisa array, str, int)

      echo "<br>2. die<br>"; 
      $martin = 'martin anak magang';
      die($martin); // die mematikan echo selanjutnya hanya berhenti sampai pada die
      // die bisa berdiri sendiri
      // die(): // otomatis program mati semua 
      // atau seperti ini
      echo ' satu dua tiga'
      ?> 
    </body>
  </html>

