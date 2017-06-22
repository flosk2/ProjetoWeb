<?php
require_once 'config.php';

 header("Access-Control-Allow-Origin: *");
 $conn = mysqli_connect("$localMysql","$usuarioMySql","$senhaMySql","$bancoDeDados") or die ("Não conectado.");
 //$conn = mysqli_connect("mysql.hostinger.com.br","u354548780_root","446758","u354548780_dbtst") or die ("Não conectado.");
?>