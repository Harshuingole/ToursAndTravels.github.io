<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once 'head.php' ;?>
</head>
<body>

	<?php require_once 'menu.php' ;?>


			
<!--ur services-->	
	<div class="content-our" id="our" style="background-color: white;">
		<h3 style="color: #1c2a48;font-size: 40px;font-family: bold" class=" wow fadeInUp animated">Contact Us</h3>
		<div class="row">
		<div class="container">
			<div class="col-md-4 services boot-padding wow fadeInLeft animated" data-wow-delay=".6s">	
				<div class="content-ic">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<img src="img/icons/loc1.png" height="100px" width="130px" alt="s1">
					</div>
				</div>	

				<h4>Location</h4>
				<p>A-106,Shanti Sadan Apt,Opp I.N.Tekrawala School,Palanpur Patiya,Surat-395005.</p>
			</div>
			
			<div class="col-md-4 services boot-padding wow fadeInUp animated" data-wow-delay=".8s">	
				<img src="img/icons/e1.png" height="100px" width="130px" alt="s1">
				<h4>  Email Address </h4>
				<p>dreamholidaysandvacations@gmail.com</p>
			</div>
			
			<div class="col-md-4 services boot-padding wow fadeInRight animated" data-wow-delay=".6s">	
				<img src="img/icons/ph.png" height="100px" width="130px" alt="s1">
				<h4> Phone Number</h4>
				<p>8849499903 <i class="fa fa-whatsapp" style="font-size:24px;color: green" ></i>&nbsp;,
                       9924587092,
                       756754562</p>
			</div>


     	  <div class="clearfix"></div>
		</div>


		<!--from start-->
<div class="row wow fadeInUp animated" style="background-color:#1c2a48" >
	<div class=" services boot-padding wow fadeInLeft animated" data-wow-delay=".6s">	
		<br><br>
		<?php 

if (isset($_POST['btnsend'])) {

	extract($_POST);
	$n=$m->dml("insert into tblclient(clname,clemail,clmsg,clsub)values('$txtname','$txtemail','$txtsub','$txtmsg')");
	# code...
}

		 ?>
<p style="color: #ffecb3;text-align: center; font-family: bold;font-size: 25px"><b>Get In Touch With Us</b></p>
		<div class="login-bottom">
					<form action="#" method="post">
						<input type="textbox" name="txtname" size="120" placeholder="Your Name" >	
						<input type="text" name="txtemail" placeholder="Your Email" >					
						<input type="text" name="txtsub" class="text" placeholder="Subject" >
						<textarea  name="txtmsg" placeholder="Message"></textarea>
						<input type="submit" name="btnsend" value="Send">
					</form>
				</div></div></div>
<!--from End-->


		</div>





		<!--map start-->
<div class="row">
	
<div class="col-md-12">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.5743254785707!2d72.79057021399878!3d21.209062485900933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04c2537dbee05%3A0xdac84f3ff123cfcc!2sShanti%20Sadan%20Apartment%2C%20Rander%20Rd%2C%20Ramdevnagar%20Society%2C%20Pushpak%20Society%2C%20Palanpur%20Patia%2C%20Surat%2C%20Gujarat%20395009!5e0!3m2!1sen!2sin!4v1584292630245!5m2!1sen!2sin" width="1400" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

</div>

<!--map end-->
	</div>



	<?php require_once 'footer.php' ;?>

</body>
</html>