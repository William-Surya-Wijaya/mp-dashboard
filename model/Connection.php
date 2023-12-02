<?php
$host = "williamsuryawijaya.my.id";
$username = "williams_mp_dashboard";
$password = "dashboard";
$database = "williams_mp_dashboard";

$koneksi = mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_errno();
}