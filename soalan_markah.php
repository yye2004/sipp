<?php 
//WAJIB FAIL INI
require 'sambung.php'; 
require 'keselamatan.php';
//PERLUKAN FAIL INI
include 'header.php';

?>

<?php

   //query soalan 
   $query="INSERT INTO perekodan (idperekodan,idpengguna,idtopik,jenis,skor,catatan_masa) 
   	 values(NULL,'$_SESSION[idpengguna]','$_SESSION[pilih_topik]','$_SESSION[jenis_soalan]','$_SESSION[score]',NULL)";
   $insert_row=$hubung->query($query);
 ?>

<html>
  <body background="light.jpg">
      <center>
          <h1>SOALAN TAMAT</h1>
      </center>
      <main>
<table width="70%" border="0" align="center">
	<tr>
		<td>

	     <p>Tahniah! Anda telah selesai menjawab semua soalan</p>
	     <p>Bilangan Betul: <?php echo $_SESSION['score']; ?></p>
	    </td>
	</tr>
	<tr>
		<td>
		<button onclick="window.location.href='soalan_papar.php?n=1'">Cuba Lagi</button>
		<button onclick="window.location.href='index2.php'">Tamat</button>
		<button onclick="window.location.href='skor_individu.php'">Prestasi</button>
		<?php $_SESSION['score']=0; ?>
		</td>
	</tr>
</table
<?php include 'footer.php';?>
  </body>
</html>