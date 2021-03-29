<!-- fucntion : sekumpulan kode  -->
<!-- agar kode lebih powerfull dan readable dan reusable -->
<!-- di php ada beberapa macam function -->
<!-- 1. built in = sudah disediakan php mis echo  -->
<?php 
echo(date('Y'));
echo"<br>";
echo(date('y'));
echo"<br>";
echo('Test');
echo"<br>";
?>
<!-- 2. user defined  -->
<!-- A -->
<?php 
// parameter = aturan 
function printMyName(){
    echo 'My Name is Naruto';
}
printMyName();
echo"<br>";
?>
<!-- B -->
<?php 
function printMyName_($name){
    echo "My Name is $name";
}
printMyName_('Gue Kece');
echo"<br>";
?>


<!-- C -->
<!-- memberi defaulr parameter agar tidak eror -->
<?php 
function printMyName_a($name ="Lupa Kasih Nama"){
    echo "My Name is $name";
}
printMyName_a();
echo"<br>";
?>

<!-- 3. Return Funct -->
<!-- A -->
<?php
date('y'); //Mengembalikan nilai cuma ga ditampilin
echo(date('y')); //nampilin 
echo"<br>";
?>

<!-- B -->
<?php 
$n = date('Y');
echo($n);
echo"<br>";
?>

<!-- B -->
<!-- PAKAI RETURN LEBIH REUSEABLE -->
<?php
function printNumA(){
    return 5;
}

function printNumB(){
    return 9;
}

function printNumC(){
    echo 45;
}


echo(printNumA());
echo"<br>";
echo(printNumA()*printNumB());
// nilainya bisa digunain lagi 
echo"<br>";
echo(printNumA()*printNumB()*printNumA());"<br>";
// prefer gunain return dui funct dan echo buat ngeprint
// karena bisa reusable berkali kali 
// klo echo semua dioperasiin gabisa (yg dikembaliin berupa string)
?>
 

 <!-- 15:15 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOC</title>
    <style type="text/css">
    </style>
</head>
<body>
    <h1><?php printMyName() ?></h1>
    <h1><?php printMyName_('Bangun dong') ?></h1>
    <h1><?php printMyName_a() ?></h1>
</body>
</html>