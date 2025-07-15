<?php
session_start();
//sambung ke pangkalan data
include "sambung.php";


//Dapatkan ID dari URL
$pelajar_hapus = $_GET['idpengguna'];

//Hapus rekod pengguna semasa
$hapuskan1 = mysqli_query($hubung,"DELETE FROM pengguna WHERE idpengguna='$pelajar_hapus'");

//Hapus rekod perekodan semasa
$hapuskan2 = mysqli_query($hubung,"DELETE FROM perekodan WHERE idpengguna='$pelajar_hapus'");

 //Papar mesej jika berjaya hapus
 echo "<script>alert('Hapus Pelajar berjaya'); 
 window.location='pelajar_senarai.php'</script>";

 
?>