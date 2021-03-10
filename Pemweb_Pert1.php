<!DOCTYPE html>
<html>
  <head>
    <title> Belajar PHP </title>
    <meta charset="utf-8">
    </head>
    <body>
        Hallooooo...

        <!-- Tag dasar PHP fungsi Echo  -->
        <?php for($i=0; $i<5; $i++):?>
          <?php if($i %2 === 0):?>
            <h2>Hello World</h2>
          <?php else: ?>
            <h2>Hello World</h2>
          <?php endif; ?>
        <?php endfor; ?>

        <?php
        $nama = 'Agus';
        var_dump ($nama);

        $siswa = array(
              'nama' 		=> array ('Alfa', 'Beta', 'Charlie'),
              'jurusan' 	=> 'Informatika',
              'semester'	=> 1,
              1 => 'Jakarta',
              2 => 'Surabaya'
            );
            
        echo '<pre>';  var_dump($siswa); echo '</pre>';
        ?>

        <?php 
        $arr =['Pemrograman', 'Websetie', 'Kelas B', 'Semester 4'];
        foreach ($arr as $value){
          echo $value. " ";
        } 
        ?>

        <?php 

        $murids = [
            [
              'nm'=> 'Naruto',
              'nim'=> '192410101007',
              'usia'=> '24',
            ],
            [
              'nm'=> 'Sasuke',
              'nim'=> '192410101007',
              'usia'=> '24',
            ],
          ];
        ?>

        <h1>Data Mahasiswa</h1>
        <table>
          <thead>
            <tr>
              <th>Nama</th>
              <th>Nim</th>
              <th>Usia</th>
            </tr>
          </thead>
          <!-- <tbody> -->
            <? foreach ($murids as $murid) : ?>
              <tr>
                <td><? echo $murid['nm'] ?></td>
                <td><? echo $murid['nim'] ?></td>
                <td><? echo $murid['usia'] ?></td>
              </tr>
            <? endforeach; ?>
          <!-- </tbody> -->
        </table>

    </body>
  </html>
