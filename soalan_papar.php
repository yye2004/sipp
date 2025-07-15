<?php 
require 'sambung.php'; 
include 'header.php';
?>
<?php session_start(); ?>
<?php
	//DAPATKAN ID TOPIK
	$topik_pilihan=$_SESSION['pilih_topik'];
	$jenis=$_SESSION['jenis_soalan'];	
	//TABLE TOPIK
	$dataTopik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik=$topik_pilihan");
	$getTopik=mysqli_fetch_array($dataTopik);
	
	//TOTAL SOALAN
	$query = "SELECT * FROM soalan WHERE idtopik=$topik_pilihan AND jenis=$jenis";
	$results = mysqli_query($hubung,$query);
	$total=mysqli_num_rows($results);

	//TETAPKAN NOM SOALAN
	$number = (int) $_GET['n'];

	// DAPATAN SOALAN
	$query = "SELECT * FROM soalan WHERE nom_soalan = $number AND idtopik=$topik_pilihan AND jenis=$jenis";

	//PAPAR RESULAT
	$result = mysqli_query($hubung,$query);
	$question = mysqli_fetch_assoc($result);
	// PILIHAN JAWAPAN
	$query = "select * from pilihan where nom_soalan = $number AND idsoalan='$question[idsoalan]'";
	//PAPARKAN
	$choices = mysqli_query($hubung,$query);
 ?>

<html>
  <body background="light.jpg">
      <center>
           <h2>TOPIK: <?php echo $getTopik['topik'];?></h1>
      </center>
      <main>

<table width="70%" border="0" align="center">
	<tr>
		<td>
		<hr>
		<?php  
		//RESPON TAS JAWAPAN BETUL ATAU TIDAK
		if($number == 1){
			echo"Sila baca soalan dengan teliti";
		}else{
			$jawapan=$_GET['semakan'];
			if($jawapan=="TEPAT"){
			echo "Tahniah, jawapan bagi soalan ";
			echo $number-1;
			echo " adalah <font color='blue' size='+3'>TEPAT</font>";	
			}else{
			echo "Maaf, jawapan bagi soalan ";
			echo $number-1;
			echo " adalah <font color='red' size='+3'>SALAH</font>";
			}	
		}
		?>
		</td>	
	</tr>
	<tr>
		<td>
			<hr>		
        Soalan <?php echo $number; ?> dari <?php echo $total; ?>
		<br><br>

	   <?php echo $question['soalan'] ?>
	   <br>
	   <?php
	   if ($question['gambarajah']==NULL){
		}else{
		echo "<img src='gambar/".$question['gambarajah']."' width='50%' height='50%'/>"; 
		}
		?>
	 
	</p>
	<form method="post" action="soalan_semak.php"> 
	    <?php
		if ($question['jenis']==1){
			?>
		  <ul>
		  <?php
	        while($row=mysqli_fetch_assoc($choices)):
			?>
		<li><input name="choice" type="radio" value="<?php echo $row['idpilihan']; ?>" required />
		  <?php echo $row['pilihan_jawapan'];?>
		</li>
		<?php
		endwhile;
		?>
	      </ul>
	     
		<?php
		}else{
		?>	
		<input type="text" name="idJAWAPAN" placeholder="Taip Jawapan Di sini" size='70%'>	
		<?php	
		}
		?>		
			<input type="submit" value="HANTAR" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />  
		  <input type="hidden" name="jenis_soalan" value="<?php echo $question['jenis']; ?>" />
		  <input type="hidden" name="idsoalan" value="<?php echo $question['idsoalan']; ?>" />

	</form>
		</td>
	</tr>		
</table>
<?php include 'footer.php';?>
  </body>
</html>