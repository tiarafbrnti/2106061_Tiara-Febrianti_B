<?php

    $koneksi = mysqli_connect("localhost", "root", "", "2106061_Tiara");

    if (!$koneksi) {
        echo"<script>alert('koneksi database gagal');</script>";
    }
?>
