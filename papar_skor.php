<?php 
include "sambung.php"; 
session_start();
//sambung ke fail header
require('header.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body background="light.jpg">
    <div id="container">
      <header>
        <div class="container">
		
		
          <h1>Senarai Topik Bagi Subjek <?php echo $paparsubjek; ?></h1>
	</div>
      </header>


      <main>

<table width="100%" border="1" align="center">
  <tr>
    <td width="5%"><b>Bil.</b></td>
    <td width="70%"><b>Nama</b></td>
	<td width="25%"><b>Topik</b></td>
		<td width="25%"><b>Markah</b></td>
  </tr>
 <?php
 
  $data1=mysqli_query($hubung,"SELECT * FROM topik WHERE idsubjek='$subjek_pilihan'");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
			$bil_rekod=mysqli_num_rows($data1);	
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['topik']; ?></td>
    <td>
	<a href="tambah_soalan.php?idtopik=
	<?php echo $info1['idtopik'];?>">Tambah </a>|
	<a href="papar_soalan.php?idtopik=
	<?php echo $info1['idtopik'];?>">Papar </a>

	</td>
  </tr>
  <?php $no++; } ?>
</table>

	</div>
      </main>


    <footer>
      <div class="container">
      <div align="center" class="style15">* Senarai Tamat *<br />Jumlah Rekod:<?php echo $bil_rekod; ?></div>
      </div>
    </footer>
  </body>
</html>