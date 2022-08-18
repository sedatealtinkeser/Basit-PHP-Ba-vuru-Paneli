<?php
// developed by Sedatefe Altınkeser aka NikolaiS

session_start();

$DATABASE_HOST = 'HOSTNAME';
$DATABASE_USER = 'HOST USERNAME';
$DATABASE_PASS = 'HOST PASS';
$DATABASE_NAME = 'DATABASE NAME';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$con->set_charset("utf8");
if ( mysqli_connect_errno() ) {
	exit('Bağlantınız Başarısız: ' . mysqli_connect_error());
}


?>
