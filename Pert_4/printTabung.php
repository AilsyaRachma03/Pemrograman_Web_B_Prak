<?php 
require 'Tabung.php';
// echo $_GET;
// $_POST['nama'] = "Uzumaki Naruto"
// var_dump($_GET);

// if (isset($_POST['submit_btn'])) {
//     if (strlen($_POST['diameter']) > 0) {
//         echo "login !";
//     } else {
//         echo "Isi diameter terlebih dahulu";
//     }
// }
// $luas = 0;
// $volume = 0;

$tabung = new Tabung;
if (isset($_POST['button_sbm'])) {
//    $diameter = $_POST['diameter']; 
//    $tinggi = $_POST['tinggi']; 
//    $r = $diameter / 2;


//    $luas = 3.14 * $diameter *$tinggi;
//    $volume = 3.14 * $r *$r *$tinggi;

//    echo "Diameter $diameter <br/>";
//    echo "Tinggi $tinggi <br/>";


    $tabung-> setDiameter($_POST['diameter']);
    $tabung-> setTinggi($_POST['tinggi']);
}


?>

 <?php //echo isset($_GET['nama']) $_GET[['nama'] : ''; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <h1> Nama  </h1> -->

<!-- <form action="" method="post">
    <input type="text" name="diameter" value="7">
    <button name="submit_btn"> Submit </button>-->

</form>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_sbm'>Hitung</button>

        <hr>

    </form>

    
    <ul>
            <li>Luas Sisi : <?php echo $tabung->getLuas(); ?></li>
            <li>Volume : <?php ?></li>
    </ul>
</body>
</html>