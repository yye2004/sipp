<?php 
//WAJIB FAIL INI
require 'sambung.php'; 
require 'keselamatan.php';
//PERLUKAN FAIL INI
include 'header.php';
?>

<?php 
if (isset($_POST['submit'])){
   //dapatkan nilai variable yang di POST     
   $subjek_baru = $_POST['subjek'];

   //query subjek 
   $query="INSERT INTO subjek (subjek) 
   	 values('$subjek_baru')";
   $insert_row=mysqli_query($hubung,$query);	 

echo "<script>alert('Subjek baharu telah berjaya ditambah'); 
window.location='subjek_senarai.php'</script>";
}


//JUMLAH SUBJEK
$query = "SELECT * FROM subjek";
$subjek = mysqli_query($hubung,$query);
$total=mysqli_num_rows($subjek);
$next=$total+1;
?>


<html>
  <head>
<?php include 'menu.php'; ?>
  </head>
  <body background="light.jpg">
      <center>
          <h2>DAFTAR SUBJEK</h2>
	</div>
      </center>
      <main>
<table width="70%" border="0" align="center">
  <tr>
	<td>	  
	     
	     <form method="post">

			<tr>
			<td align="right">BIL:</td>
			<td><?php echo $next; ?></td>
			</tr>			

			<tr>
			<td align="right">NAMA SUBJEK:</td>
			<td><input type="text" name="subjek" size="40%" required /></td>
			</tr>
			
			<tr>
			<td></td>
			<td><input type="submit" name="submit" value="DAFTAR" /></td>
			</tr>
	     </form>
		</td>
	</tr>
</table>
      </main>

<?php include 'footer.php';?>
  </body>
</html>