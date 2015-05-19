<?php
include ("config.php");
$id = $_POST['id'];
$aktivitas = $_POST['aktivitas'];
$deskripsi = $_POST['deskripsi'];
$tgl_deadline = $_POST['tgl_deadline'];
$status = $_POST['status'];

$perintah = mysql_query("update aktivitas set aktivitas='$aktivitas',deskripsi='$deskripsi',tgl_deadline='$tgl_deadline',status='$status'  where id='$id'");
if ($perintah) {
    header("location:aktivitas_daftar.php");
} else {
    echo "gagal mengupdate data";
}
?>