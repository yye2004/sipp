<?php
//WAJIB FAIL INI
require 'sambung.php'; 
//PERLUKAN FAIL INI
include 'header.php';

//semak sama ada data dengan ID guru nama telah dihantar
if (isset($_POST['idpengguna'])) {
	//pembolehubah untuk memegang data yang dihantar
	$idpengguna = $_POST['idpengguna'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jantina = $_POST['jantina'];
	$aras = $_POST['aras'];
	
	//tambah rekod baru ke dalam table
	$daftar= "INSERT INTO pengguna (idpengguna,password,nama,jantina,aras) 
	VALUES ('$idpengguna','$password','$nama','$jantina','$aras')";	
	
	
	// Melaksanakan pertanyaan baca dengan sambungan ke p.data
	$hasil = mysqli_query($hubung, $daftar);
	// semak untuk melihat jika ada sebarang rekod dalam pangkalan data
	if ($hasil) {
		echo "<script>alert('Pendaftaran pengguna baharu berjaya'); 
		window.location='login.php'</script>";
	}else{
		echo "<script>alert('Pendaftaran GAGAL'); 
		window.location='daftar_baru.php'</script>";
	}
	
}

?>

<html>
  <head>
<?php include 'menu1.php'; ?>
  </head>
    <body background="light.jpg">

    
      <center>
          <h2>PENDAFTARAN PENGGUNA BAHARU</h2>
      </center>
      <main>

<table width="40%" border="0" align="center">
  <tr>
	<td>

<!-- Papar Borang Pendaftaran -->	
<form method="POST">
	
	<label>Nombor Kad Pengenalan</label><br>
  <input onblur="checkLength(this)" type="text" name="idpengguna" 
  placeholder="12 digit TANPA tanda -" maxlength='12'size="25"
  onkeypress='return event.charCode >= 48 && event.charCode <= 57' 
  required autofocus />
  	<script>
		function checkLength(el) {
		if (el.value.length != 12) {
			alert("Nombor KP mesti 12 digit")
		}
		}
	</script>
	
	<br><label>Kata laluan</label><br>
	<input type="password" name="password" id="password" 
	placeholder="4 digit sahaja" size="10"
	maxlength='4' onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
	
	<br><label>Nama Pelajar</label><br>
	<input type="text" name="nama" placeholder="Nama Penuh Anda" size="70" required >
	
	<br>
	<label>Jantina</label><br>
	<select name="jantina">
		<option value="">---Pilih---</option>
		<option value="LELAKI">LELAKI</option>
		<option value="PEREMPUAN">PEREMPUAN</option>
	</select>
	
	<br><label>Aras Pengguna</label><br>
	<select name="aras">
		<option value="">---Pilih---</option>
		<option value="PELAJAR">PELAJAR</option>
		<option value="GURU">GURU</option>
	</select>
	<br>	
	
<br><input type="reset" value="Reset">	
<button type="submit">Daftar</button><br><br>
*Sila pastikan maklumat anda betul sebelum membuat pendaftaran.

  <h5>*Sekiranya sudah mendaftar, <a href="login.php">klik untuk log masuk sini.</a></h5></br>

</form>	
</td>
</tr>
</table>

      </main>
<?php include 'footer.php';?>
  </body>
</html>