<form action="" method="POST">
    <input type="text" name="nama" placeholder="masukan nama"> 
    <input type="text" name="alamat" placeholder="masukan alamat">
    <input type="email" name="email" placeholder="masukan email"> 
    <input type="password" name="password" placeholder="masukan password">
    <input type="submit" value="kirim" name="tombol">


</form> 
<?php               

    // echo "belajar PHP"; 
    if (isset($_POST["tombol"])) {

    $nama = $_POST ["nama"];
    $alamat = $_POST ["alamat"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];

    echo $nama = $nama;
    echo $alamat = $alamat;
    echo $email = $email;
    echo $password = $password;



}
?>