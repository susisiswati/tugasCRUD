<html>
<head>
<title>TAMBAH AKTIVITAS BARU</title>
</head>

<body>
<table width="100%" border="0" cellpadding="1" cellspacing="1" background="../kendal/gambar/header.png">
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
</table>

    <form action="aktivitas_simpan.php" method="post">
  <table width="400" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><div align="center"><font color="#000000">TAMBAH AKTIVITAS BARU</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <hr />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right"><a href="aktivitas_daftar.php?id=<?php echo $lihat['id'] ?>"><img src='gambar/menu.png'/></a></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="150">Aktivitas</td>
      <td width="250"><input name="aktivitas" type="text"></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td><textarea name="deskripsi"></textarea></td>
    </tr>
    <tr>
      <td>Tanggal Deadline</td>
      <td><input type="text" name="tgl_deadline"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="status"></td>
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
</body>
</html>
