<?php
/* membuat koneksi*/
$koneksi = mysqli_connect("localhost", "root", "", "2106152_rina");

/* cek koneksi*/
if($koneksi) {
    // echo "database terhubung";
    echo "<script> alert('database terhubung');</script>";
}