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
        3. BELAJAR VARIABEL 
        Variabel : cara kita menyimpan nilai 
        */

        //Penulisan Pertama 
        // $nama = "Akademi Ninja";
        // $y_1 = 123 ;//variabel tidak bisa dimulai dg angka 
        
        // echo "<h1>$nama</h1>"; 
        // echo "<h5>$y_1</h5>";

        //Penulisan Kedua 
        // echo "Hallooooo... ". $nama ."<br>";
        // echo "Member"

        /* 
        4. TIPE DATA STRING 
           Tipe data : jenis dari nilai yang kita punya 
           string : tipe data text/kata/bukan angka
        */
      //   $nama = "Akademi Ninja Konoha";
      //   $nama1 = 'Siswanya bernama Genin';
      //   $nama2 = 'Tim Kakashi';
      //   $nama3 = 'Naruto, Sasuke, Sakura';
      //   $nama4 = '1000';
      //   $nama5 = '100';
      //   echo "STRING";
      //   echo "<br>";
      //   echo $nama  ." ".$nama1."<br>"; // penulisan tak perlu tanda kutip langsung dolar namanya
      //   echo "Selamat datang di Pendaftaran $nama"."<br>";//digabung dengan text lain
      //   echo "Selamat datang di Pendaftaran \$nama"; // bukan ngeprint valuenya
      //   echo "<br>";
      //   echo $nama2. $nama3;
      //   echo $nama4. $nama5;
      //   echo "<br>";
      //   echo "<br>";
        /* 
        5. TIPE DATA ANGKA
           Tipe data : jenis dari nilai yang kita punya 
           INT : tipe data angka
           FLOAT : tipe data angka koma
           PHP.net
        */
      //   //int
      //   $x = 1000000000;
      //   $y = 1000000000000;
      //   echo "INTEGER";
      //   echo "<br> gajiku sebesar Rp. $x"."<br>". "tabunganku sebesar Rp. $y"."<br>";
      //   echo $x + $y;
      //   echo "<br>";
      //   echo "<br>";

      //   //float
      //   $a = 3.33;
      //   $b = 3.48;
      //   $c = 4.00;
      //   echo "FLOAT";
      //   echo "<br>";
      //   echo $a + $b +$c;
      //   echo "<br>"; 
      //   echo 10.81 / 3;  
      /*  
        5. OPERATOR MATH
        + * - / % = mod ++=NAMBAH 1  --= NGURANG 1
     */
      //   $angka = 100;
      //   $angka1 = 200;
      //   $angka2 = 5;
      //   $angka3 = 300;
      //   $angka4 = 2;
      //   echo "<br>";
      //   echo "<br>";
      //   echo "OPERATOR MATH";
      //   echo "<br>";
      //   echo $angka3 - $angka * $angka4;
      //   echo "<br>";
      //   //nama = nilai
      //   $test = $angka1 + $angka +10;
      //   echo $test;
      //   echo "<br>";
      //   //mau ngerubah nilai sebelumnya
      //   $angka = $angka + $angka4;    
      //   echo $angka;
      //   echo "<br>";
      //   $angka1 /= $angka4;
      //   echo $angka1;
      //   // ++ dan --
      //   echo "<br>";
      //   $angka3++;
      //   echo $angka3;
      //   echo "<br>";
      //   $angka2--;
      //   echo $angka2;

      /* 7. METODE MATH 
       Metode Math : Metode yang berisikan func untuk mengolah angka
      */
        //int
        $x = 1000000000;
        $y = 1000000000000;
        //float
        $o = 1.00;
        $a = 3.33;
        $b = 3.48;
        $c = 4.00;
        echo "METODE MATH";
        echo "<br>";

        echo "1. ROUND";
        echo "<br>";
        echo "Membulatkan Jika x,a a < 5 maka a dibulatkan kebawah 
        dan jika x,a a>5 maka dibulatkan keatas";
        echo "<br>";
        echo $b." = ". round($b)."<br>"."<br>";

        echo "2. RAND"."<br>";
        echo "Rand(min, max)"."<br>";
        echo "Menghasilkan angka acak dengan parameter min dan max"."<br>";
        echo "Angka keberuntungan hari ini adalah"." = ". rand(0, 10)."<br>";
        echo "Angka keberuntungan hari ini adalah"." = ". rand($o, $c)."<br>"."<br>"; 
        // 0 termasuk juga 

        echo "3. MAX"."<br>";
        echo "Max(a, b, c, n, ....)"."<br>";
        echo "melihat beberapa kemungkinan di parameter dan mencari angka terbesarnya"."<br>";
        echo "Angka terbesar adalah"." = ". max(0, 10, 11, 30, 2)."<br>"; 
        echo "Angka terbesar adalah"." = ". max($a, $b, $c)."<br>"."<br>";

      /* 8. METODE STRING  
       Metode String :  metode yang berfungsi untuk mengolah huruf atau kata
      */
      $teks ="Rachma Ailsya";
      $kalimat ="Ibu Pergi ke Pasar dan Ayah membaca koran sambil minum kopi di teras";
      $hai = "Hai Sayang ";
      
      echo "METODE STRING";
      echo "<br>";

      echo "1. strlen"."<br>"."Menghitung banyak jumlah huruf dr kata/kalimat"."<br>";
      echo "strlen(\$namavariabel)"."<br>";
      echo  strlen($teks)."<br>"."<br>";
      //spasi dihitung

      echo "2. str_word_count"."<br>"."Menghitung banyak jumlah kata dari kalimat"."<br>";
      echo "str_word_count(\$namavariabel)"."<br>";
      echo  str_word_count($kalimat)."<br>"."<br>";
      
      echo "3. str_replace"."<br>"."Mengganti kata"."<br>";
      echo "str_replace(find, replace \$namavariabel)"."<br>";
      echo  str_replace("Ayah", "Kakak", $kalimat)."<br>"."<br>";
      
      echo "4. str_repeat"."<br>"."Mengulang kata"."<br>";
      echo "str_repeat(text, times)"."<br>";
      echo  str_repeat("Hai ", 10)."<br>"."<br>";

      echo "5. gabungin str_replace dan str_repeat"."<br>"."gabunguin kata dan Mengulang kata"."<br>";
      echo "str_repeat(str_replace(find, replace, \$nama_variabel), times)"."<br>";
      echo  str_repeat(str_replace("Hai","Hallo", $hai ), 9)."<br>"."<br>";

      echo "6. str_shuffle"."<br>"."Mengacak kata / kalimat"."<br>";
      echo "str_shuffle(text)"."<br>";
      echo  str_shuffle($teks)."<br>"."<br>";

      /*
      9. PENGENALAN  ARRAY
      Array : tipe data dimana bisa punya beberapanilai dalam variabel
      Anggap array seperti kotak
      */
      //penulisan pertama
      $kotak = array('jack', 'elizabeth', 'william', 'jack');
      //penulisan kedua
      $tempat = ['Semeru', 'Lawu', 'Bromo'];

      //cara memanggil
      echo "ARRAY PHP"."<br>";
      echo $kotak."<br>";
      print $kotak."<br>";
      print_r($kotak)."<br>";
      echo "ada nomor kotakan index dan tau cara ngambil datanya
      <br> Bagaimana cara menyimpan tanpa ada kotak index <br><br> CARANYA :<br>";

      //caranya ngeprint beberapa aja 
      echo $kotak[0]."<br>";
      echo $kotak[1]."<br>";
      echo $kotak[2]."<br>";

      //caranya ngeprint beberapa aja
      echo $tempat[0]."<br>";
      echo $tempat[1]."<br>";
      echo $tempat[2]."<br>"; 

      /*
      10. METODE ARRAY
      array_unique = yang sama diambil satu aja, 
      _reverse = dibalik dari belakang,
      shuffle = acak ,
      count = jumlah dari array kita, 
      sort = 
      */
      echo "<br>"."METODE ARRAY PHP"."<br>";
      echo "1.array_unique"."<br>"."print_r(array_unique(\$nama_var))"."<br>";
      print_r(array_unique($kotak));

      echo "<br>"."<br>"."2.array_reverse"."<br>"."print_r(array_reverse(\$nama_var))"."<br>";
      print_r(array_reverse($kotak));

      echo "<br>"."<br>"."3.shuffle"."<br>"."1). shuffle(\$nama_var) <br>";
      echo "2) print_r(\$nama_var)"."<br>";
      shuffle($tempat);
      print_r($tempat);

      echo "<br>"."<br>"."4.count"."<br>"."count(\$nama_var))"."<br>";
      echo count($kotak);

      echo "<br>"."<br>"."5.sort"."<br>"."1). sort(\$nama_var) <br>";
      echo "2) print_r(\$nama_var)"."<br>";
      sort($kotak);
      print_r($kotak);
      ?> 
    </body>
  </html>

