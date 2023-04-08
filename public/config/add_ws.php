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

    $nomor_acak = round(microtime(true));

    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $tipe_file = $_FILES['file']['type'];

    $file_baru = $nomor_acak . '_' . $file;


    $query = mysqli_query($conn, "INSERT INTO `workshop` (`nama`,`instansi`,`kota`,`email`,`nohp`,file,`alasan`) 
    VALUES ('$nama','$instansi','$kota','$email','$nohp','$file_baru','$alasan')");


    if ($query) {

        if ($tipe_file == "application/pdf") {
            @move_uploaded_file($file_tmp, "../file/" . $file_baru);
        } else {
            echo "<script>alert('Maaf format file file selain PDF tidak di dukung');
            location.href='../regist_ws.php';</script>";
        }

        echo "<script>alert('Register sukses');
            location.href='registered_ws.php';</script>";
    }
}
