<?php 
require 'sambung.php'; 
require 'keselamatan.php';
include 'header.php';
?>

<html>
<head><?php include 'menu.php'; ?></head>
  <body background="light.jpg">
      <center>
          <h2>SENARAI PELAJAR BERDAFTAR</h2>
      </center>
      <main>

<table width="70%" border="1" align="center" style='font-size:16px'>
  <tr>
    <td width="5%"><b>Bil.</b></td>
    <td width="10%"><b>ID Pelajar</b></td>
    <td width="7%"><b>Password</b></td>
    <td width="20%"><b>Nama Pelajar</b></td>	
	<td width="15%"><b>Jantina</b></td>
	<td width="5%"><b>Tindakan</b></td>
  </tr>
 <?php
 
  $data1=mysqli_query($hubung,"SELECT * FROM pengguna WHERE aras='PELAJAR' ORDER BY nama ASC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['idpengguna']; ?></td>
	<td><?php echo $info1['password']; ?></td>
	<td><?php echo $info1['nama']; ?></td>
	<td><?php echo $info1['jantina']; ?></td>	
    <td><a href="hapus_pelajar.php?idpengguna=<?php echo $info1['idpengguna'];?>" onclick="return confirm('AWAS!, Semua rekod yang berkaitan akan dihapuskan, Anda Pasti?')"><button>HAPUS</button></a></td>
	
  </tr>
  <?php $no++; } ?>
</table>

	</div>
      </main>
    <center>
		<font style='font-size:14px'>
	  * Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
		</font>
    </center>
  </body>
</html>