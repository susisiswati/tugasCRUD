<?php
include ("config.php");

$aktivitas = $_POST['aktivitas'];
$deskripsi = $_POST['deskripsi'];
$tgl_deadline = $_POST['tgl_deadline'];
$status = $_POST['status'];
$input = mysql_query("insert into aktivitas values('','$aktivitas','$deskripsi','$tgl_deadline','$status')");
if ($input) {
    header("location:aktivitas_daftar.php");
} else {
    echo "gagal";
}
?>