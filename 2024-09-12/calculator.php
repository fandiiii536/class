<form action=""  method="POST">
    <input type="number" name="bil1" placeholder="billangan 1">
    <input type="number" name="bil2" placeholder="billangan 2">
    <input type="number" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="kurang" value="kurang">
    <input type="submit" name="bagi" value="bagi">
</form>

<?php

    if (isset($_GET(["petambahan  "]))) {
    $bil1 = $_GET["bil1"];
    $bil2 = $_GET["bil2"];
    $hasil = $bil1 + $bil2;
    echo $hasil;
    }

?>