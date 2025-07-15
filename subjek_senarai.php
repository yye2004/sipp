<?php 
require 'sambung.php'; 
require 'keselamatan.php';
include 'header.php';
?>

<html>
  <head>
<?php include 'menu.php'; ?>
  </head>
  <body background="light.jpg">
      <center>		
          <h2>SENARAI SUBJEK BERDAFTAR</h2>
      </center>
      <main>

<table width="60%" border="1" align="center" style='font-size:16px'>
  
  <tr>
    <td width="2%"><b> Bil.</b></td>
    <td width="30%"><b> Nama Subjek</b></td>
	<td width="17%"><b> Tindakan</b></td>
  </tr>
 <?php
 $no=1; 
  $data1=mysqli_query($hubung,"SELECT * FROM subjek ORDER BY subjek ASC") ;	
               
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['subjek']; ?></td>
    <td align="center">
	<a href="edit_subjek.php?idsubjek=<?php echo $info1['idsubjek'];?>" onclick="return confirm('Anda Pasti?')"><button>EDIT Nama Subjek</button></a>
	<a href="hapus_subjek.php?idsubjek=<?php echo $info1['idsubjek'];?>" onclick="return confirm('AWAS!!!, Topik,Soalan dan jawapan akan dihapuskan. Anda Pasti?')"><button>HAPUS Subjek</button> </a></td>
	
  </tr>
  <?php $no++; } ?>
</table>
      </main>


    <center>
      <font style='font-size:14px'>
	  * Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
	  
	  </br>
	  </br>
	  <tr>
    <td colspan="3" valign="middle" align="right"><b>
	<a href="subjek_daftar.php"><button>JIKA HENDAK DAFTAR SUBJEK BAHARU, KLIK SINI</button></a></b></td>    
  </tr> 
  
</font>
    </center>
  </body>
</html>