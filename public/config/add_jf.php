<?php
// session_start();
include "koneksi.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $alasan = $_POST['alasan'];

    $query = mysqli_query($conn, "INSERT INTO `jobfair` (`nama`,`instansi`,`kota`,`email`,`nohp`,`alasan`) 
                                            VALUES ('$nama','$instansi','$kota','$email','$nohp','$alasan')");

    if ($query) {

        echo "<script>alert('Register sukses');
        location.href='registered_jf.php';</script>";
    } else {
        echo "<script>alert('Gagal register');
        location.href='../regist_jf.php';</script>";
    }
}
