<?php 

$user = 'Rachma';
$password = '12345';

if ( isset($_POST['submit']) ){


    if($_POST['nama'] == $user &&
       $_POST['password'] == $password){

        // cookie
        // setcookie(key, nilai, expire)
        // contoh remember me pd fb
        setcookie('nama_user', $_POST['nama'],time()+120);

        // setcookie('nama_user', $_POST['nama'],time()-120); hapus otomatis

            // header('Location: pp.php?nama='.$POST['nama']);
            header('Location: cookies.php');
        }else{
           echo 'gagal login';
        }
}
?>

<form action="cookie.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password" >
    <input type="submit" name="submit">
</form>