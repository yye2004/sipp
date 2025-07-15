<?php 
include "sambung.php"; 
session_start();
//sambung ke fail header
require('header.php');
//DAPATKAN ID SUBJEK


$topik_pilihan = $_GET['idtopik'];
$_SESSION['pilihan'] = $topik_pilihan;

//SAMBUNG KE TABLE
$result = mysqli_query($hubung, "SELECT * FROM topik WHERE idtopik='$topik_pilihan'");
while($res = mysqli_fetch_array($result))
{
//Paparkan nilai asal
$papartopik = $res['topik'];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
<?php include ("menu.php"); ?>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body background="light.jpg">
    <div id="container">
      <header>
        <div class="container">
		
		
          <h1>Senarai soalan bagi topik <?php echo $papartopik; ?></h1>
	</div>
      </header>


      <main>

<table width="100%" border="1" align="center">
  <tr>
    <td width="5%"><b>Bil.</b></td>
    <td width="70%"><b>Soalan</b></td>
	<td width="25%"><b>Tindakan</b></td>
  </tr>
 <?php
 
  $data1=mysqli_query($hubung,"SELECT * FROM soalan WHERE idtopik='$topik_pilihan'");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
			$bil_rekod=mysqli_num_rows($data1);	
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['soalan']; ?></td>
    <td>
	<a href="hapus_soalan.php?idsoalan=
	<?php echo $info1['nom_soalan'];?>">Jawab </a>
  	
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