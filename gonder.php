<?php
       require_once('nikolais/conekto.php');


       $ip = $_SERVER['REMOTE_ADDR'];
       $dsorgusu=("Select * from basvuru where id='".$ip."' ");
       $dsorgusql = mysqli_query($con, $dsorgusu);
       $rowmow = mysqli_fetch_array($dsorgusql);
       if($rowmow=='".$ip."')
       { header("Refresh: url=index.php"); }


       if(isset($_POST['isim']))
       {
		   
		   

		   
		   
		   
		   
       $alank = $_POST['alan'];
       $name = $_POST['isim'];
       $yerk = $_POST['yer'];
       $eposta = $_POST['email'];
       $discord = $_POST['discord'];
       $sunucular = $_POST['sunucular'];
       $yetkili = $_POST['yetkili'];
       $roller = $_POST['roller'];
       $bahset = $_POST['bahset'];
       $ip = $_SERVER['REMOTE_ADDR'];

       $alank = addslashes($alank);
       $name = addslashes($name);
       $yerk = addslashes($yerk);
       $eposta = addslashes($eposta);
       $discord = addslashes($discord);
       $sunucular = addslashes($sunucular);
       $yetkili = addslashes($yetkili);
       $roller = addslashes($roller);
       $bahset = addslashes($bahset);






       $kayitet = ("insert into basvuru (alan, isim, yer, email, discord, sunucular, yetkili, roller, bahset, ip) values ('$alank', '$name', '$yerk', '$eposta', '$discord', '$sunucular', '$yetkili', '$roller', '$bahset', '$ip') ");
       $kayitgonder = mysqli_query($con,$kayitet);
     }
     else { header("Refresh: url=index.php"); echo "Başvuru yollamadınız ki?";}
       ?>

       <!DOCTYPE html>
<html lang="tr">
<head>
  <title>Victim Roleplay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
if($kayitgonder){
header('Location:basarili.php');
}
else {
echo '
  <div class="alert alert-danger">
    <strong>Hata!</strong> Yollamaya çalıştığınız formu gönderemedik. Lütfen Sedat ile iletişime geçiniz.<br>
    <i> Sizleri tekrardan form alanına yönlendiriyorum. </i>
  </div>';
  header("Refresh: 5; url=index.php");
}
?>


</body>
</html>
