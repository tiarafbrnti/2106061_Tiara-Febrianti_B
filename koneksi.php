<?php

    $koneksi = mysqli_connect("localhost", "root", "", "uts");

    if (!$koneksi) {
        echo"<script>alert('koneksi database gagal');</script>";
    }
?>
