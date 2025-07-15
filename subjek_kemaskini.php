<?php 
include 'sambung.php'; 
session_start();
//sambung ke fail header
require 'header.php';
//DAPATKAN ID DARI URL
 
?>

<?php 
if (isset($_POST['submit'])){
   //dapatkan nilai variable yang di POST
   $nom_subjek = $_POST['nom_subjek'];      
   $subjek_baru = $_POST['subjek'];

   //query subjek 
   $query="INSERT INTO subjek (idsubjek,subjek) 
   	 values('$nom_subjek','$subjek_baru')";
   $insert_row=$hubung->query($query);

echo "<script>alert('Subjek baru telah ditambah'); 
window.location='daftar_subjek.php'</script>";
}


//get total topic
$query = "SELECT * FROM subjek";
$subjek = $hubung->query($query);
$total=$subjek->num_rows;
$next=$total+1;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
<?php include ("menu.php"); ?>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body background="light.jpg">
    <div id="container">
      <header>
        <div class="container">
          <h1>DAFTAR SUBJEK</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     
	     <form method="post" action="daftar_subjek.php">
			<p>
			<label>Nombor Subjek</label>
			<?php echo $next; ?>
			<input type="text" value="<?php echo $next; ?>" name="nom_subjek" hidden />
		   </p>
			<p>
			<label>Subjek / Mata Pelajaran</label>
			<input type="text" name="subjek" required />
		   </p>
		   <p>
			<input type="submit" name="submit" value="Simpan" />
		   </p>
	     </form>
	</div>
      </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2021, <?php echo $nama_sistem;?>
      </div>
    </footer>
  </body>
</html>