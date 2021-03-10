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
      11. ASSOSIATIVE ARRAY
      assosiative array diurutkan berdasar kata kunci bukan index
      */
      $data = array("nama"      => "Rachma", 
                    "umur"      => "20 Tahun",
                    "Hobi"      => "Memasak",
                    "Cita-Cita" => "Punya Resto"
      );
      $data1 = array("motto"     => "Jangan Menyerah", 
                    "minfa"      => "Jus Alpukat",
                    "makfa"      => "Sate",
                    "mimpi "     => "Umrohkan Ibuk"
      );
      echo "<br>"."<br>"."ASSOSIATIVE ARRAY PHP"."<br>";
      //print semua
      echo "<br>"."1. Print semua pakai key / kata kunci"."<br>";
      print_r($data);  

      //print satu satu
      echo "<br>"."<br>"."2. Print pakai datanya atau satu2"."<br>";
      echo "Namanya adalah ".$data['nama']."<br>";
      echo "Usianya sekarang ".$data['umur']."<br>";
      echo "Hobinya ".$data['Hobi']."<br>";
      echo "dan dia memiliki cita cita ".$data['Cita-Cita']."<br>"."<br>";

      //mengubah isi dari array 
      $data['nama'] = 'Rachma Ailsya'; 
        //kalau pakai index tinggal
        //$nama_variabel['index']= 'nilai baru'
      echo "<br>3. Mengubah isi key array<br>";
      echo "Namanya adalah". $data['nama']."<br>";
      
      /*
      12. METODE ASSOSIATIVE ARRAY
      array_values : mengubah ke index
      array_kesy   : mengubah ke keysnya
      array_merge  : menggabungkan beberapa array
      */

      echo "<br> METODE ASSOSIATIVE ARRAY <br>";
      echo "1. array_values<br>";
      print_r($data);
      echo "<br>";
      print_r(array_values($data));

      echo "<br><br>2. array_keys<br>";
      print_r($data);
      echo "<br>";
      print_r(array_keys($data));

      echo "<br><br>3. array_merge<br>";
      print_r($data);
      echo "<br>";
      print_r(array_merge($data, $data1));
      //jika ada tambahan tinggal print_r(array_merge($data, $data1, $data3, ....));

      /*
      13. MULTIDIMENSI ARRAY
      punya beberapa array dalam satu Array
      */

      $data2 = array(
                array("programer", "20", "mager"),
                array("designer", "22", "rajin"),
                array("manager", "21", "gabut")
              );

      echo "<br><br> METODE ASSOSIATIVE ARRAY <br>";
      print_r($data2);
      echo "<br><br>";

      //kalau ngeprint satu satu liat indexnya 
      // 00 01 02
      // 10 11 12
      // 20 21 22
      // ... kalau kebawah yang nambah sebelah kiri 
      // ... kalau samping yang nambah sebelah kanannya
       echo $data2[1][1]; 
       echo "<br><br>";
       echo $data2[2][2];
       echo "<br><br>";
       $data2[2][0] = "proyek manager";
       echo $data2[2][0];
      // bisa dipakai di assosiative array juga
      
      /*
      14. FOR LOOP PHP 
      Pengulangan : cara otomatis ketika ada hal yang ingin dilakukan berkali kali
      tentu ga efektif kalo manual 
      di php ada yg namanya loop dg for
      */

      /*for(variabel_awal(mulai); batas(syarat); perubahan()){
        echo "yang mau di print berkali kali";
      }
      */
      //setiap kita masuk diliat syaratnya
      // jika i lebih kecil dr x 
      // maka jalan ikuti syaratnya mis. kurang dr 10 jika true tambah satu 
      // masukan terus berulang ulang sampai kondisi terpenuhi
      echo "<br><br> FOR LOOP PHP <br>";
      for($i=0; $i<10; $i++){
        echo "--------------";
        echo "Akademi Ninja $i";
        echo "--------------<br>";
      };

      /*
      15. MENGELUARKAN HASIL ARRAY
      for loop bisa dimanfaatkan untuk ngeprint array
      */
      
      $hewan = ['wawan', 'budi', 'martin', 'lapet'];
      //          0         1        2        3
      echo "<br><br> FOR LOOP ARRAY <br>";
      // menghindari cara hitung manual
      // for($i=0; $i<4; $i++){ == for($i=0; $i<count($hewan); $i++){
      for($i=0; $i<count($hewan); $i++){
        echo "--------------";
        echo $hewan[$i];
        echo "--------------<br>";
      }
      //keuntungannya bisa ngurangin loopnya sesuai kemauan 
      
      
      /*
      16. FOREACH UNTUK ARRAY
      PHP punya satu jurus yang otomatis php bisa mengeluarkan array kita
      */
      $hewan1 = ['dorla', 'wawan', 'budi', 'martin', 'lapet'];
      echo "<br><br> FOREACH ARRAY <br>";
      foreach($hewan1 as $h){
        echo "--------------";
        echo $h;
        echo "--------------<br>";
      };
      //keuntungannya bisa ngeluarin semua

      /*
      17. FOREACH UNTUK ASSOSIATION ARRAY
      PHP punya satu jurus yang otomatis php bisa mengeluarkan array kita
      */

      $aku= array("nama"      => "Rachma", 
                  "umur"      => "20 Tahun",
                  "Hobi"      => "Memasak",
      );
      echo "<br><br> FOREACH ASSOSIATION ARRAY <br>";
      foreach($aku as $key => $values){
      echo $key ." : ". $values."<br>"; // PRINT KEY
      echo "--------------<br>";
      };

      /*
      18. WHILE DAN DO WHILE
      PHP punya satu jurus yang otomatis php bisa mengeluarkan array kita
      */
      // while(syarat) /selama syarat terpenuhi bariskode akan berjalan
      // do while
      
      $hewan2 = ['dorla', 'wawan', 'budi', 'martin', 'lapet'];
      $i = 0; // MULAI DARI MANA
      // hati2 klo looop tentuin batas dan perubahan nilai
      echo "<br><br> WHILE DAN DO WHILE <br>";
      echo "1. WHILE  <br>"; // syarat dulu baru kerja
      while($i < count($hewan2)){
        echo $hewan2[$i]."<br>";
        $i++; // PERUBAHAANNYA
      };

      echo "<br>2. DO WHILE  <br>"; // kerja dulu baru syarat min kerja 1 x 
      // meski syarat tidak terpenuhi
      $x = 0; // MULAI DARI MANA
      do{
        echo "---";
        echo $hewan2[$x]."<br>";
        $x++; // PERUBAHAANNYA
      }while($x < count($hewan2));

      /* 
      19. TIPE DATA BOOLEAN
      Unik karena : punya 2 kemungkinan saja (isinya)
      1. True 
      2. False
      digunakan untuk logika/ ambil keputusan 
      */
      $h = true;
      $h1 = false;
      echo "<br> BOOLEAN  <br>"; 
      echo $h."<br>";
      echo $h1."<br>";
      /* 
      20. IF DAN ELSE
      bisa menentukan keputusan 
      mis. apakah a benar jika a maka x 
           atau a salah jika a maka y
      mis. password benar ke menu utama
           password salah ke login lagi
      */
      $password = '123';
      $password1 = '12345';
      $password2 = '12345';

      echo "<br> IF DAN ELSE  <br>"; 
      echo "1. menguji satu var<br>";
      if($password == '123'){ // syarat yang diuji pke '=='
        echo ' Selamat datang! <br>';// boleh lebih dr satu barkod
      }else{
        echo 'Gagal, coba lagi <br>';
      };

      echo "<br>2. menguji var dg var<br>";
      if($password1 == $password2){ // syarat yang diuji pke '=='
        echo ' Selamat datang! <br>';// boleh lebih dr satu barkod
      }else{
        echo 'Gagal, coba lagi <br>';
      };
      ?> 
    </body>
  </html>

