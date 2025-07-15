<?php
session_start();
//sambung ke pangkalan data
include "sambung.php";


//Dapatkan ID dari URL
$guru_terhapus = $_GET['idpengguna'];

	//Sambung ke table topik
	$topik=mysqli_query($hubung,"SELECT * FROM topik WHERE idpengguna='$guru_terhapus'");
	$infoTopik=mysqli_fetch_array($topik);
	
	//Sambung ke table soalan
	$soalan=mysqli_query($hubung,"SELECT * FROM soalan WHERE idtopik='$infoTopik[idtopik]'");
	$infoSoalan=mysqli_fetch_array($soalan);

	//Sambung ke table pilihan
	$pilihan=mysqli_query($hubung,"SELECT * FROM pilihan WHERE idtopik='$infoTopik[idtopik]'");
	$infoPilihan=mysqli_fetch_array($pilihan);

//Variable
$delete1=$infoTopik['idpengguna'];
$delete2=$infoTopik['idtopik'];

//Hapus rekod topik semasa
$hapuskan1 = mysqli_query($hubung,"DELETE FROM topik WHERE idpengguna='$guru_terhapus'");

$hapuskan2 = mysqli_query($hubung,"DELETE FROM pengguna WHERE idpengguna='$guru_terhapus'");

//Hapus rekod soalan semasa
$hapuskan3 = mysqli_query($hubung,"DELETE FROM soalan WHERE idtopik='$delete2'");

//Hapus rekod pilihan semasa
$hapuskan4 = mysqli_query($hubung,"DELETE FROM pilihan WHERE idtopik='$delete2'");

//Hapus rekod perekodan semasa
$hapuskan5 = mysqli_query($hubung,"DELETE FROM perekodan WHERE idtopik='$delete2'");

 //Papar mesej jika berjaya hapus
 echo "<script>alert('Hapus Guru berjaya'); 
 window.location='guru_senarai.php'</script>";


?>