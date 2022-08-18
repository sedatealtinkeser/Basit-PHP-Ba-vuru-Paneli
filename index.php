<?php
       require_once('nikolais/conekto.php');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Başvurular</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="gonder.php">
				<span class="contact100-form-title">
                          <img class="resp" src="images/logo.png">
				</span>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Başvurmak İstediğiniz Alan</span>
					<div>
						<select class="js-select2" name="alan">
              <option value="Beta Tester">Beta Test Ekibi</option>
							<option value="Oyun Yetkilisi">Oyun Yetkilisi</option>
							<option value="Developer">Geliştirici(Developer)</option>
							<option value="Grafiker">Grafiker</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Lütfen isim ve soyisim giriniz.">
					<span class="label-input100">İsim - Soyisim: *</span>
					<input class="input100" type="text" name="isim" placeholder="İsim ve Soyisim Giriniz...">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Lütfen yaşadığınız yeri giriniz...">
					<span class="label-input100">Yaşadığınız Yer: *</span>
					<input class="input100" type="text" name="yer" placeholder="Yaşadığınız Yer...">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Lütfen E-Postanızı Giriniz...">
					<span class="label-input100">E-Posta: *</span>
					<input class="input100" type="email" name="email" placeholder="E-Postanız... ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100"  data-validate = "Lütfen Discord Adresinizi Giriniz">
					<span class="label-input100">Discord: (bknz: NikolaiS#0287)</span>
					<input class="input100" type="text" name="discord" placeholder="Discord İsim ve Etiket">
				</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Lütfen alanı doldurunuz...">
						<span class="label-input100">Daha Önce Oynadığınız Sunucular: *</span>
						<input class="input100" type="text" name="sunucular" placeholder="Oynadığınız Sunucular...">
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Lütfen alanı doldurunuz...">
						<span class="label-input100">Daha Önce Yetkili Olduğunuz Sunucular: *</span>
						<input class="input100" type="text" name="yetkili" placeholder="Yetkili Olduğunuz Sunucular...">
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Lütfen alanı doldurunuz...">
						<span class="label-input100">Yaptığınız Roller: *</span>
						<input class="input100" type="text" name="roller" placeholder="Rolleriniz...">
					</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Lütfen Alanı Doldurunuz...">
					<span class="label-input100">Bize Kendinizden Bahseder misiniz?:</span>
					<textarea class="input100" name="bahset" placeholder="Ben buyum..."></textarea>
				</div>

				<p>Dikkat! Sizlere ulaşabilmemiz için <b>E-Posta ve Discord</b> adresiniz kesinlikle doğru olmalı ve başvuruyu gönderdikten 1 hafta içerisinde değiştirmemelisiniz.<br>
				Değiştirmeniz veya ulaşım yollarından size ulaşamamamız durumunda başvurunuz geçersiz kılınacaktır.<br> Teşekkürler.</p>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Gönder
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
	<script src="js/main.js"></script>

</body>
</html>
