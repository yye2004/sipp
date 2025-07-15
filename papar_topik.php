<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
//Get idsubjek
$subjek_pilihan=$_GET['idsubjek'];
$guru=$_SESSION['idpengguna'];
//connect to table
$result=mysqli_query($hubung,"SELECT * FROM subjek WHERE idsubjek='$subjek_pilihan'");
while ($res=mysqli_fetch_array($result)){
    $paparsubjek=$res['subjek'];
}
?>

<html>
    <head><?php include 'menu.php'; ?></head>
     <body background="light.jpg">
        <h2 style="text-align: center;">SENARAI TOPIK: SUBJEK <?=$paparsubjek; ?></h2>
        <main>
            <table width="70%" border="1" align="center" style="font-size: 16px;">    
                <tr>
                    <td width="3%">Bil.</td>
                    <td width="27%">Nama Topik</td>
                    <td width="25%">Tambah Soalan</td>
                    <td width="20%">Pengurusan Soalan</td>
                    <td width="25%">Topik</td>
                </tr>
                <?php
                $no=1;
                $data1=mysqli_query($hubung,"SELECT * FROM topik WHERE idsubjek='$subjek_pilihan' AND idpengguna='$guru'");
                while($info1=mysqli_fetch_array($data1)):
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $info1['topik']; ?></td>
                    <td>
                        <a href="soalan_baru1.php?idtopik=<?=$info1['idtopik'];?>"><button>TAMBAH MCQ</button></a>
                        <a href="soalan_baru2.php?idtopik=<?=$info1['idtopik'];?>"><button>TAMBAH FIB</button></a>
                    </td>
					
                    <td><a href="papar_soalan.php?idtopik=<?=$info1['idtopik'];?>&jenis_soalan=1"><button>KEMASKINI SOALAN</button></a>
					</td>
					
                    <td>
                        <a href="edit_topik.php?idtopik=<?=$info1['idtopik'];?>"><button>EDIT TOPIK</button></a>
                        <a href="hapus_topik.php?idtopik=<?=$info1['idtopik'];?>"><button>HAPUS TOPIK</button></a>
                    </td>
                </tr>
            <?php $no++; 
            endwhile; ?> 
        </table>
        </main>
		<center>
        <p style="font-size:14px;">Senarai telah tamat di sini. <br>
            Jumlah Rekod:<?= $no-1; ?>
        </p>
		</center>
        <?php include 'footer.php'; ?>
    </body>
</html>