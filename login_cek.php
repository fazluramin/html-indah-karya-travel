<?php

    $email=$_POST['email'];
    $pass=$_POST['password'];


    if($email == 'admin@admin.com' && $pass == 'admin'){
        echo "<script language='javascript'> alert('Selamat Datang Admin...'); document.location='dashboard_admin.php'; </script>";
    }
    elseif($email == 'member@gmail.com' && $pass == 'member'){
        echo "<script language='javascript'> alert('Selamat Datang Member...'); document.location='dashboard_member.php'; </script>";
    }
    elseif($email == 'pimpinan@pimpinan.com' && $pass == 'pimpinan'){
        echo "<script language='javascript'> alert('Selamat Datang Pimpinan...'); document.location='dashboard_pimpinan.php'; </script>";
    }
    else {
        echo "<script language='javascript'> alert('Maaf, Username & Password yang anda masukkan Salah... Silahkan periksa kembali. Terima kasih'); history.back(); </script>";
    }


?>