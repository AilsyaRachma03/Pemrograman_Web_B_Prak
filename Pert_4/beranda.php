<?php require_once('header.php');?>

      <main>
        Selamat datang di Bikini Bottom, 
        disini tempat untuk mengenal biota laut di kartun spongebob

        <h2>Implode dan Explode</h2>
        <?php
          $pekerjaan = ['programmer', 'designer', 'manager'];
          $pelajaran = 'html css javascript jquery php';
         // echo $pekerjaan; //error

         //implode(separator, array)
         echo 'IMPLODE'.'<br>';
         echo implode(" | ", $pekerjaan).'<br>';

        // explode(separator, variabel, jumlah yang diinginkan)
         echo 'EXPLODE'.'<br>';
         print_r(explode(" ", $pelajaran) );
        ?>

        <h2> Fungsi Date </h2>
        <?php

          echo date('d - M - Y');
        ?>

        <h2> Trim dan Strip</h2>
        <?php
          $text = '  ini dari user ';
          echo 'TRIM <br>';
          echo 'sebelum'.$text.'disini';
          echo '<br>';
          echo 'sesudah'.trim($text).'disini'; //hapus keduanya
          echo '<br>';
          echo 'sesudah'.ltrim($text).'disini';//hapus kiri
          echo '<br>';
          echo 'sesudah'.rtrim($text).'disini';//hapus kanan



          $text2 ="<script>alert('Hallo Bikini Bottom ')</script>";
          $text3 ="<b> Halo </b> Semuanya";
          echo '<br><br> STRIP <br>';

          // membuat string => array
          echo strip_tags($text2).'<br>';
          echo strip_tags($text2).'<br>';

          //Pengecualian tag tertentu
          echo $text3.'<br>';
          echo strip_tags($text3, '<b>').'<br>';
        ?>
      </main>
      
<?php require_once('footer.php');?>

