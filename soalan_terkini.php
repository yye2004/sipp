<?php require 'sambung.php'; ?>
<hr>
<table width="100%" border="1" align="center">
  <tr style='font-size:14px'>
    <td width="5%"><b>Bil.</b></td>
    <td width="17%"><b>Subjek</b></td>
	<td width="47%"><b>Topik</b></td>
	<td width="12%"><b>Format Soalan</b></td>
	<td width="7%"><b>Bil. Soalan</b></td>	
  </tr>
 <?php
	$no=1;
	$topik=mysqli_query($hubung,"SELECT * FROM subjek AS s 
	INNER JOIN topik AS t ON s.idsubjek = t.idsubjek 
	INNER JOIN soalan AS q ON t.idtopik = q.idtopik 	
	GROUP BY t.topik ORDER BY t.idtopik desc limit 0,10 ");	
	while ($infoTopik=mysqli_fetch_array($topik))
		{
	//Sambung ke table soalan
	$soalan=mysqli_query($hubung,"select COUNT(idtopik) as 'bil' from soalan where idtopik='$infoTopik[idtopik]' and jenis='$infoTopik[jenis]'");
	$infoSoalan=mysqli_fetch_array($soalan);		
		?>
  <tr style='font-size:14px'>
    <td><?php echo $no; ?></td>
	<td><?php echo $infoTopik['subjek']; ?></td>	<td><?php echo $infoTopik['topik']; ?></td>	
	<td><?php 
	if ($infoTopik['jenis']==1){
		echo "MCQ / TF";
	}else{
		echo "FIB";
	}?>
	</td>
	<td><?php echo $infoSoalan['bil']; ?></td>
  </tr>
  <?php $no++; } ?>
</table>
<br>
<center><font style='font-size:14px'>
* Rekod yang dipaparkan adalah 10 yang terkini sahaja *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font>
</center>