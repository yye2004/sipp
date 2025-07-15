<?php
//setup for database

$host="localhost";
$user="root";
$password="";
$database="sppdb_yinger";

$hubung=mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
	echo "Proses sambung ke pangkalan data gagal";
	exit();
}

//SETUP HERE FOR YOUR SYSTEM
$nama_sekolah="SMJK JIT SIN<BR>
				Jalan Binjai, Taman Sri Rambai,<BR>
				14000 Bukit Mertajam, <BR>
				PULAU PINANG.";
$nama_sistem="SiPP - SISTEM PENGURUSAN PENILAIAN";
$motto1=" E-LEARNING SYSTEM";
$motto2="PELBAGAI JENIS SUBJEK ATAU TOPIK UNTUK RAMAI GURU FORMAT PELBAGAI";
$footer="SiPP ; An E-learning system";
$logo="logo.png";
$lencana="lencana.png";

?>