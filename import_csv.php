<?php
//WAJIB FAIL INI
require 'sambung.php'; 
//TERIMA FAIL POST
 if(isset($_POST["import"])){
$filename=$_FILES["file"]["tmp_name"];		
if($_FILES["file"]["size"] > 0){
$file = fopen($filename, "r");
while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
{
//TAMBAH DALAM P.DATA		
$import = "INSERT INTO pengguna (idpengguna,password,nama,jantina,aras) 
values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','PELAJAR')";
//MSG POP UP JIKA GAGAL
$tambah = mysqli_query($hubung,$import);
if(!isset($tambah)){
 echo "<script>alert('Pindah naik fail CSV gagal'); 
 window.location='import_daftar.php'</script>";	
 }
//MSG POP UP JIKA BERJAYA				
else {
 echo "<script>alert('Pindah naik fail CSV berjaya'); 
 window.location='pelajar_senarai.php'</script>";	
				}
	         }
	         fclose($file);	
		 }
	}	 
 ?>