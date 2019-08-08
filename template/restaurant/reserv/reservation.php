<!DOCTYPE html>
<html>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../../vendor/autoload.php';













?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Reservation</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<style>
.booking-form .form-header h1 {
	color: #e75b1e;
}
.booking-form .submit-btn {
	background-color: #e75b1e;
}
</style>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Réserver ICI</h1>
						</div>
						<form method="POST" action="">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nom complet</span>
										<input class="form-control" type="text" name="form_name" placeholder="nom">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email" placeholder="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Numero de télephone</span>
								<input class="form-control" type="tel" name="phone" placeholder="ex: +33 06 11 58 31 40">
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">La Date</span>
										<input class="form-control" name="date-picker" type="date" required>
									</div>
								</div>
								<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Nombre de personnes</span>
											<select class="form-control" name="no_of_persons">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-3">
											<div class="form-group">
												<span class="form-label">Occasion</span>
												<select class="form-control" name="occasion">
													<option value="annif">Anniversaire</option>
													<option value="marige">Mariage</option>
													<option value="event">Evennement</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Plat</span>
												<select class="form-control" name="preferred_food">
													<option value="pizza">Pizza</option>
													<option value="salade">Salade</option>
													<option value="patte">Patte</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">L'heure</span>
												<select class="form-control" name="time-picker1">
													<option value="00">00</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control" name="time-picker2">
													<option value="05">05</option>
													<option value="10">10</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="25">25</option>
													<option value="30">30</option>
													<option value="35">35</option>
													<option value="40">40</option>
													<option value="45">45</option>
													<option value="50">50</option>
													<option value="55">55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn" name="send">Enregistrer</button>
							</div>

<?php

include("../includes/connection.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'lezoomail@gmail.com';
$mail->Password = 'ht1234567890';
$mail->setFrom('lezoomail@gmail.com', 'Le ZOO');
$mail->Subject = 'Confirmer votre email';

if(isset($_POST['send'])){
    $full_name = htmlentities(mysqli_real_escape_string($con,$_POST['form_name']));
    $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
    $num_person = htmlentities(mysqli_real_escape_string($con,$_POST['no_of_persons']));
    $date = htmlentities(mysqli_real_escape_string($con,$_POST['date-picker']));
	$hr = htmlentities(mysqli_real_escape_string($con,$_POST['time-picker1']));
	$mn = htmlentities(mysqli_real_escape_string($con,$_POST['time-picker2']));
    $pref_food = htmlentities(mysqli_real_escape_string($con,$_POST['preferred_food']));
    $occasion = htmlentities(mysqli_real_escape_string($con,$_POST['occasion']));
	$link =md5(md5(md5($email)));
	$rand =rand(3,17);
	$link=str_repeat($link,$rand);
	$link =md5(md5(md5($link)));
	$link=str_repeat($link,$rand);
	$time=$hr.":".$mn;
	$month = date('m');
	$month = (int)date('m');
	$mon= $date[5].$date[6];
	$verify_mon=(int)$mon;
	$sec = $date[0].$date[1].$date[2].$date[3];
	$verify=(int)$sec;
	$current_y=(int)date("Y");
	$link_mail="http://localhost/website/template/restaurant/reserv/confirm.php?link=$link";

	$body_html="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

	<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
	<head>
	<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
	<meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
	<meta content='width=device-width' name='viewport'/>
	<!--[if !mso]><!-->
	<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
	<!--<![endif]-->
	<title></title>
	<!--[if !mso]><!-->
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
	<!--<![endif]-->
	<style type='text/css'>
			body {
				margin: 0;
				padding: 0;
			}
	
			table,
			td,
			tr {
				vertical-align: top;
				border-collapse: collapse;
			}
	
			* {
				line-height: inherit;
			}
	
			a[x-apple-data-detectors=true] {
				color: inherit !important;
				text-decoration: none !important;
			}
		</style>
	<style id='media-query' type='text/css'>
			@media (max-width: 670px) {
	
				.block-grid,
				.col {
					min-width: 320px !important;
					max-width: 100% !important;
					display: block !important;
				}
	
				.block-grid {
					width: 100% !important;
				}
	
				.col {
					width: 100% !important;
				}
	
				.col>div {
					margin: 0 auto;
				}
	
				img.fullwidth,
				img.fullwidthOnMobile {
					max-width: 100% !important;
				}
	
				.no-stack .col {
					min-width: 0 !important;
					display: table-cell !important;
				}
	
				.no-stack.two-up .col {
					width: 50% !important;
				}
	
				.no-stack .col.num4 {
					width: 33% !important;
				}
	
				.no-stack .col.num8 {
					width: 66% !important;
				}
	
				.no-stack .col.num4 {
					width: 33% !important;
				}
	
				.no-stack .col.num3 {
					width: 25% !important;
				}
	
				.no-stack .col.num6 {
					width: 50% !important;
				}
	
				.no-stack .col.num9 {
					width: 75% !important;
				}
	
				.video-block {
					max-width: none !important;
				}
	
				.mobile_hide {
					min-height: 0px;
					max-height: 0px;
					max-width: 0px;
					display: none;
					overflow: hidden;
					font-size: 0px;
				}
	
				.desktop_hide {
					display: block !important;
					max-height: none !important;
				}
			}
		</style>
	</head>
	<body class='clean-body' style='margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #F5F5F5;'>
	<!--[if IE]><div class='ie-browser'><![endif]-->
	<table bgcolor='#F5F5F5' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #F5F5F5; width: 100%;' valign='top' width='100%'>
	<tbody>
	<tr style='vertical-align: top;' valign='top'>
	<td style='word-break: break-word; vertical-align: top;' valign='top'>
	<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color:#F5F5F5'><![endif]-->
	<div style='background-color:transparent;'>
	<div class='block-grid' style='Margin: 0 auto; min-width: 320px; max-width: 650px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #D4E9F9;'>
	<div style='border-collapse: collapse;display: table;width: 100%;background-color:#D4E9F9;background-image:url('images/Didier-Gemignani-Table-1348x900.jpg');background-position:top center;background-repeat:no-repeat'>
	<!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:transparent;'><tr><td align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:650px'><tr class='layout-full-width' style='background-color:#D4E9F9'><![endif]-->
	<!--[if (mso)|(IE)]><td align='center' width='650' style='background-color:#D4E9F9;width:650px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;' valign='top'><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:30px;'><![endif]-->
	<div class='col num12' style='min-width: 320px; max-width: 650px; display: table-cell; vertical-align: top; width: 650px;'>
	<div style='width:100% !important;'>
	<!--[if (!mso)&(!IE)]><!-->
	<div style='border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;'>
	<!--<![endif]-->
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding-right: 10px; padding-left: 15px; padding-top: 20px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif'><![endif]-->
	<div style='color:#EBEBEB;font-family:'Lato', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:20px;padding-right:10px;padding-bottom:10px;padding-left:15px;'>
	<div style='line-height: 14px; font-family: 'Lato', Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; color: #EBEBEB;'>
	<p style='line-height: 45px; text-align: center; font-size: 12px; margin: 0;'><span style='font-size: 38px;'><strong>LE Zoo</strong></span></p>
	</div>
	</div>
	<!--[if mso]></td></tr></table><![endif]-->
	<div align='center' class='button-container' style='padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
	<!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'><tr><td style='padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px' align='center'><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='#' style='height:37.5pt; width:220.5pt; v-text-anchor:middle;' arcsize='30%' stroke='false' fillcolor='#fc7318'><w:anchorlock/><v:textbox inset='0,0,0,0'><center style='color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:20px'><![endif]--><a href='$link_mail' style='-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #fc7318; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; width: auto; width: auto; border-top: 1px solid #fc7318; border-right: 1px solid #fc7318; border-bottom: 1px solid #fc7318; border-left: 1px solid #fc7318; padding-top: 5px; padding-bottom: 5px; font-family: 'Lato', Tahoma, Verdana, Segoe, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;' target='_blank'><span style='padding-left:50px;padding-right:50px;font-size:20px;display:inline-block;'>
	<span style='font-size: 16px; line-height: 32px;'><span style='font-size: 20px; line-height: 40px;'><strong>confirmer votre email</strong></span></span>
	</span></a>
	<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
	</div>
	<!--[if (!mso)&(!IE)]><!-->
	</div>
	<!--<![endif]-->
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
	</div>
	</div>
	</div>
	<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	</td>
	</tr>
	</tbody>
	</table>
	<!--[if (IE)]></div><![endif]-->
	</body>
	</html>";































	$mail->Body =$body_html;
	$mail->AddAddress($email);
	if($verify<$current_y){

		echo"<br><br><div class='alert alert-danger' role='alert'>
			Date incorrecte!
		</div>";
		exit();
	}else{
		echo"<br><br><div class='alert alert-info' role='alert'>
		vérifier votre email
	  </div>";
	}
    $query="INSERT INTO reservation(full_name, email, phone, num_person, date, time, pref_food, occasion, status, auth_link, save_date) VALUES ('$full_name','$email','$phone','$num_person','$date','$time','$pref_food','$occasion','NO','$link',NOW())";
    if(mysqli_query($con,$query)){
		$mail->Send();
		//echo "<script>window.open('../index.php', '_self')</script>";
    }
}























?>




						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>