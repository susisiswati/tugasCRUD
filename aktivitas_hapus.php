<?php
include ("config.php");
$id = $_GET['id'];
$perintah="delete from aktivitas where id='$id'";  
$hasil=mysql_query($perintah) or die (mysql_error());
if ($hasil){
echo "Data berhasil dihapus";
header("location:aktivitas_daftar.php");
}
else {
echo "Data Gagal dihapus";
}	    
?>
