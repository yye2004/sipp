<?php
require 'sambung.php'; 
require 'keselamatan.php';
//Dapatkan ID dari URL
$del_subjek = $_GET['idsubjek'];
$delete1=mysqli_query($hubung,"SELECT * FROM subjek AS s
		INNER JOIN topik AS t ON s.idsubjek = t.idsubjek
		INNER JOIN soalan AS q ON t.idtopik = q.idtopik
		INNER JOIN perekodan AS r ON t.idtopik = r.idtopik
		INNER JOIN pilihan AS c ON q.idsoalan = c.idsoalan
		WHERE s.idsubjek=$del_subjek");
$infoDel=mysqli_fetch_array($delete1);

$delete1=$del_subjek;
$delete2=$infoDel['idtopik'];

//Hapus rekod subjek semasa
$hapuskan1 = mysqli_query($hubung,"DELETE FROM subjek WHERE idsubjek='$delete1'");

//Hapus rekod topik semasa
$hapuskan2 = mysqli_query($hubung,"DELETE FROM topik WHERE idsubjek='$delete1'");

//Hapus rekod soalan semasa
$hapuskan3 = mysqli_query($hubung,"DELETE FROM soalan WHERE idtopik='$delete2'");

//Hapus rekod pilihan semasa
$hapuskan4 = mysqli_query($hubung,"DELETE FROM pilihan WHERE idtopik='$delete2'");

//Hapus rekod perekodan semasa
$hapuskan5 = mysqli_query($hubung,"DELETE FROM perekodan WHERE idtopik='$delete2'");


 //Papar mesej jika berjaya hapus
 echo "<script>alert('Subjek telah berjaya dihapuskan'); 
 window.location='subjek_senarai.php'</script>";

 
?>