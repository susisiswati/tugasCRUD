<html>
<head>
<title>TAMBAH PRODUK</title>
</head>

<body>
<?php
include ("config.php");
$id = $_GET['id'];
$query = mysql_query("select * from aktivitas where id=$id");
while ($q = mysql_fetch_array($query)) {
    ?>
<table width="100%" border="0" cellpadding="1" cellspacing="1" background="../kendal/gambar/header.png">
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
</table>

    <form action="aktivitas_update.php" method="post">
  <table width="400" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><div align="center"><font color="#000000">EDIT AKTIVITAS BARU</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <hr />
      </div></td>
    </tr>
    <tr>
      <td>ID</td>
      <td><input name="id" type="text" id="id" value="<?php echo $q['id'] ?>" readonly></td>
    </tr>
    <tr>
      <td width="150">Aktivitas</td>
      <td><input name="aktivitas" type="text" id="aktivitas" value="<?php echo $q['aktivitas'] ?>"></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td><input name="deskripsi" type="text" id="deskripsi" value="<?php echo $q['deskripsi'] ?>"></td>
    </tr>
    <tr>
      <td>Tanggal Deadline</td>
      <td><input name="tgl_deadline" type="text" id="tgl_deadline" value="<?php echo $q['tgl_deadline'] ?>"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="status" value="<?php echo $q['status'] ?>"></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#0AC8D4"><label>
        <input name="simpan" type="submit" id="simpan" value="Simpan" />
      </label>
        <label>
        <input name="batal" type="reset" id="batal" value="Batal" />
      </label></td>
    </tr>
  </table>
</form>
    <?php
}
?>
</body>
</html>