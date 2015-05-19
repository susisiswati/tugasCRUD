<html>
<head>
<title>DAFTAR AKTIVITAS</title>
</head>
<body>
<table width="100%" border="0" cellpadding="1" cellspacing="1" background="../kendal/gambar/header.png">
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
</table>

<?php
include ("config.php");
?>
</head>
<body>
<table width="600" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="7" bgcolor="#FFFFFF"><div align="center"><font color="#000000">DAFTAR AKTIVITAS</font></div></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#FFFFFF"><div align="center">
      <hr />
    </div></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#FFFFFF"><div align="right"><a href="aktivitas_edit.php?id=<?php echo $lihat['id'] ?>"><a href="aktivitas_tambah.php"><img src='gambar/tambah.png'/></a></div></td>
  </tr>
  <tr>
        <td width="25" bgcolor="#0AC8D4">No</td>
        <td width="100" bgcolor="#0AC8D4">Aktivitas</td>
        <td width="150" bgcolor="#0AC8D4">Desktripsi</td>
        <td width="125" bgcolor="#0AC8D4">Tanggal Deadline</td>
        <td width="50" bgcolor="#0AC8D4">Status</td>
        <td width="50" bgcolor="#0AC8D4">Edit</td>
        <td width="50" bgcolor="#0AC8D4">Hapus</td>
      </tr>
      <?php
			$query=mysql_query("select * from aktivitas");
			$no=1;
			while($lihat=mysql_fetch_array($query)){
			?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $lihat['aktivitas'] ?></td>
        <td><?php echo $lihat['deskripsi'] ?></td>
        <td><?php echo $lihat['tgl_deadline'] ?></td>
        <td><?php echo $lihat['status'] ?></td>
        <td><div align="center"><a href="aktivitas_edit.php?id=<?php echo $lihat['id'] ?>"><img src='gambar/ubah.png'/></a></div></td>
        <td><div align="center"><a href="aktivitas_hapus.php?id=<?php echo $lihat['id'] ?>"><img src='gambar/hapus.png'/></a></div></td>
      </tr>
      <?php
			}
		?>
    </table>
</body>
</html>