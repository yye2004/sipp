<?php
//sambung ke pangkalan data
include "sambung.php";
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if (isset($_POST['idpengguna'])) {
	//pembolehubah untuk memegang data yang dihantar
	$user = $_POST['idpengguna'];
	$pass = $_POST['password'];
	//arahan sql akan dilaksanakan
	$query = mysqli_query($hubung, "SELECT * FROM pengguna WHERE idpengguna='$user' AND password='$pass'");
	 $row = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) == 0||$row['password']!=$pass)
    {
    //papar mesej gagal login
	echo "<script>alert('ID Pengguna atau Katalaluan yang salah'); 
	window.location='login.php'</script>";
    }
    else
    {
    $_SESSION['idpengguna']=$row['idpengguna'];
    $_SESSION['level'] = $row['aras'];
   
    //buka page utama berdasarkan level login    
           header("Location: index2.php");
    }    
}
?>