<?php
//tampilin di user
    require 'Kubus.php';

    // $kubus = new Kubus;
    // $kubus->sisi = 4;
    // echo $kubus->getLuas();

    $kubus = new Kubus;
    $kubus->setSisi(4);
    $kubus->getLuas();
    echo $kubus->getLuas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubus</title>
</head>
<body>
<ul>
        <br><!-- kasih spasi biar rapi  -->
        <li> <b>Panjang Sisi: </b> <?php echo ($kubus->getSisi())?></li>
        <br>
        <li> <b> Luas  : </b> <?php echo $kubus->getLuas() ?></li>
        <br>
        <li> <b> Volume : </b> <?php   echo $kubus->getVolum() ?></li>
        <br>

    </ul>
</body>
</html>