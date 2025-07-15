<?php 
require 'sambung.php'; 
require 'keselamatan.php';
include 'header.php';
?>

<html>
<head><?php include 'menu.php'; ?></head>
  <body background="light.jpg">
    <center><h2>SENARAI SUBJEK</h2></center>
      <main>
<table width="70%" border="1" align="center" style='font-size:16px'>
  <tr>
    <td width="5%"><b>Bil.</b></td>
    <td width="25%"><b>Subjek</b></td>
	<td width="20%"><b>Pengurusan Topik dan Soalan</b></td>
	<td width="15%"><b>Topik</b></td>
  </tr>
 <?php
	$no=1;
	$data1=mysqli_query($hubung,"SELECT * FROM subjek");		      
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['subjek']; ?></td>
    <td>
	<a href="papar_topik.php?idsubjek=
	<?php echo $info1['idsubjek'];?>"><button>PAPAR Topik dan Soalan</button></a>
	</td>
	<td>
	<a href="tambah_topik.php?idsubjek=
	<?php echo $info1['idsubjek'];?>"><button>CIPTA Topik Baharu</button></a>
	</td>
	
  </tr>
  <?php $no++; } ?>
</table>
      </main>
	  <center>
		<font style='font-size:14px'>
	  * Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
		</font>
    </center>
<?php include 'footer.php';?>
  </body>
</html>