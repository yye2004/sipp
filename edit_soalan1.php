<?php 
//WAJIB FAIL INI
require 'sambung.php'; 
require 'keselamatan.php';
//PERLUKAN FAIL INI
include 'header.php';
?>

 <?php
//DAPATKAN ID SAOALN
$soalan_terpilih = $_GET['idsoalan'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$pilihSoalan = mysqli_query($hubung, "SELECT * FROM soalan  
	WHERE idsoalan=$soalan_terpilih");
while($dataSoalan = mysqli_fetch_array($pilihSoalan))
{	

//Paparkan nilai asal
	$nom_soalan = $dataSoalan['nom_soalan'];
	$soalan= $dataSoalan['soalan'];
    $gambarajah = $dataSoalan['gambarajah'];
}

?>
<html>
  <head><?php include 'menu.php'; ?></head>
    <body background="light.jpg"><center><h2>KEMASKINI SOALAN</h2></center>
  <main>
  <table width="70%" border="0" align="center">
	<tr>
		<td>
		<form action="edit_soalan1_save.php" method="POST" enctype="multipart/form-data">
		
	    <p>
		<label>Soalan ke-<?php echo $nom_soalan; ?></label>
		<input type="text" name="idsoalan" value="<?php echo $soalan_terpilih; ?>" readonly hidden>
		
		</p>
	    <p>
		<label>Soalan</label>
		<textarea id="paparan_soalan" name="paparan_soalan" rows="7" cols="105" autofocus ><?php echo $soalan; ?></textarea>
		</p>
		<p>
		<label>Gambar<br>
		<?php
		if ($gambarajah==NULL){
		echo "-TIADA-";
		}else{
		echo "<img src='gambar/".$gambarajah."' width='30%' height='30%'/>"; 
			}
		?>
		<input type="text" name="gambarAsal" value="<?php echo $gambarajah; ?>" readonly hidden>
		<br>
		<br><small style="color:red">*Jika perlu</small></label>
		<input type="file" name="gambar"/>
		</p>
		<p>
		<input type="submit" name="submit" value="KEMASKINI" onclick="history.back()" />
		
		<input type="button" value="BATAL" onclick="history.back()"/>
		</p>
	    </form></td></tr>
		</table>
      </main>
<?php include 'footer.php';?>
  </body>
</html>