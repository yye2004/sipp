<?php
session_start();
//tamatkan sesi
session_destroy();
//lencongkan ke fail utama
header("location:index.php");
?>