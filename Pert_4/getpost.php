<?php 
//7. GET dan POST
// if (isset($_GET['submit']) ){
//     echo $_GET['nama'];
// }
//harus hati2 krn nilainya akan muncul di url 
// bisa buat pagenation


// 8. contoh login 
$user = 'Rachma';
$password = '12345';
if ( isset($_POST['submit']) ){
    // echo $_POST['nama'];

    if($_POST['nama'] == $user &&
       $_POST['password'] == $password){
            // echo 'berhasil login';

            // memindahkan halaman/masuk
            header('Location: pp.php?nama='.$POST['nama']);
            header('Location: pp.php?nama='.$user);
        }else{
           echo 'gagal login';
        }
}
?>

<form action="getpost.php" method="post">
<!-- <form action="pp.php" method="get"> -->
<!-- <form action="" method="post"> -->
<!-- kmn mau ngarahin action -->
<!-- ngarahin ke halaman yang sama
<form action="" method="get"> penulisan 1
<form action="getpost.php" method="get">penulisan 2 -->
    <input type="text" name="nama">
    <input type="password" name="password" >
    <input type="submit" name="submit">
</form>