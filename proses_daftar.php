<?php
    require_once 'classes/proses.php';
    $peserta = new Peserta();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $asal = $_POST['asal'];
    
        if($peserta->create($nama, $email, $asal)){
            require 'mail.php';
            echo "<script>alert('Pendaftaran Berhasil!! Silakan cek email Anda');window.location='daftar.php'</script>";
        }else{
            echo "<script>alert('Gagal Menyimpan Data');window.location='daftar.php'</script>";
        }
    }else{
        echo "Data Tidak Valid";
    }
?>