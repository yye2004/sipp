<?php 
require 'sambung.php'; 
include 'header.php';
?>

<html>
<head><?php include 'menu1.php' ?></head>
<body background="light.jpg">
   <center><h2>LOG MASUK PENGGUNA</h2></center>
      <main>

<table width="70%" border="0" align="center">
  <tr>
	<td align="center">

 <form action="proseslogin.php" method="post">
 Nombor Kad Pengenalan:<br>
  
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
  <br><br>
 Katalaluan: <br>
  <input type="password" name="password" 
  placeholder="4 Digit" maxlength='4'size="10"
  onkeypress='return event.charCode >= 48 && event.charCode <= 57' 
  required>
  <br><br>
  <button type="submit">Daftar Masuk</button>
  <button type="reset">Reset</button>
  <br>
  <h5>*Sekiranya belum mendaftar, <a href="daftar_baharu.php">klik untuk daftar di sini.</a></h5></br>
 </form>

		</td>
	</tr>
</table>
      </main>
<?php include 'footer.php';?>
  </body>
</html>