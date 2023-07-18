<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once 'head.php' ;?>
</head>
<body>

	<?php require_once 'menu.php' ;?>

<!-- banner start hear -->
	<div class="banner"  style="background-color: #ffecb3;">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<img src="img/Banner/bhutan.jpeg"  alt="">
						<div class="caption">
							
						</div>
					</li>
					<li>
						<img src="img/Banner/nepal.jpeg" alt="">
						<div class="caption">
						
						</div>
					</li>
					<li>
						<img src="img/Banner/Dubai.jpeg"  alt="">
						<div class="caption">
							
						</div>
					</li>
				</ul>
				<img src="img/shadow-2.png" style="width: 100%;">
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
<!-- banner end hear -->

<!-- content start hear -->
	<div class="content" style="background-color: #ffecb3;">
		<div class="container wow fadeInDown animated">
		
			
			
			<div class="grid" id="travel">
				<h3 style="color: #1c2a48;font-size: 40px;font-family: bold">Our Tour </h3>
				
				<div class="grid1">
					<div class="row">
					<br><br>
					<!--first Three tour-->
				<?php
				 $q=$m->runquery("select * from tblpaacktype where ptid BETWEEN 1 AND 4");

  				while ($b=mysqli_fetch_array($q))

			 	  {
			      extract($b);
			      $_SESSION["ptid"]=$b["ptid"];
			    
			      ?>
				
					<div class="col-md-3 image-6c boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby" style="border-radius: 50%;height: 300px;width: 290px">
								<img src="Admin/Package_Type/<?php echo $b['ptimage'];?>" height="200px" width="290px"  >
									<figcaption>
											<br><br>
									<h5 style="font-size: 20px;" class="text-center"><span><?php echo $b['ptname']; ?></span></h5>
									</figcaption>		
							</figure>
						</div><br>
					</div>
					<?php
				}
					?>
</div>
<!--second Three tour-->
<div class="row">
					<?php
				 $q=$m->runquery("select * from tblpaacktype where ptid BETWEEN 5 AND 9");

  				while ($b=mysqli_fetch_array($q))

			 	  {
			      extract($b);
			      $_SESSION["ptid"]=$b["ptid"];
			    
			      ?>
				
					<div class="col-md-3 image-6c boot-padding wow fadeInRight animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby" style="border-radius: 50%;height: 300px;width: 290px">
								<img src="Admin/Package_Type/<?php echo $b['ptimage'];?>" height="200px" width="290px"  >
									<figcaption>
											<br><br>
									<h5 style="font-size: 20px;" class="text-center"><span><?php echo $b['ptname']; ?></span></h5>
									</figcaption>		
							</figure>
						</div><br>
					</div>
					<?php
				}
					?>
</div>
					<Br>

					<!--Remainning All Tour-->
					<?php
				 $q=$m->runquery("select * from tblpaacktype where ptid BETWEEN 10 AND 100");

  				while ($b=mysqli_fetch_array($q))

			 	  {
			      extract($b);
			      $_SESSION["ptid"]=$b["ptid"];
			    
			      ?>
				
					<div class="col-md-4 image-6c boot-padding wow fadeInLeft animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby" style="border-radius: 50%;height: 300px;width: 290px">
								<img src="Admin/Package_Type/<?php echo $b['ptimage'];?>" height="200px" width="290px"  >
									<figcaption>
											<br><br>
									<h5 style="font-size: 20px;" class="text-center"><span><?php echo $b['ptname']; ?></span></h5>
									</figcaption>		
							</figure>
						</div><br>
					</div>
					<?php
					}
					?>
					
				  <div class="clearfix"></div>
				</div>
				
				
				
			</div>	
		</div><br>	
	</div>
	

	<!-- content start hear -->
	<div class="content" style="background-color: #ffecb3;">
		<br>
		<div class="container wow fadeInDown animated">
	
			<div class="grid" id="travel">
				<h3 style="color: #1c2a48;font-size: 20px;font-family: bold">Explore your Favourite Destination with Dream Holidays & Vacations</h3>

				<h3 style="color: #1c2a48;font-size: 40px;font-family: bold"> Top Trending Locations  </h3>
				
				<div class="grid1">
					<div class="row">
					<br><br>


					<!--Remainning All Tour-->
					<?php
				 $q=$m->runquery("select * from tblpaackage where packid BETWEEN 2 AND 7");

  				while ($b=mysqli_fetch_array($q))

			 	  {
			      extract($b);
			      $_SESSION["ptid"]=$b["ptid"];
			    
			      ?>
				
					<div class="col-md-2 image-6c boot-padding wow fadeInUp animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby" style="border-radius: 25%;height: 150px;width: 150px">
								<img src="Admin/Package/<?php echo $b['packimage'];?>"   >
									<figcaption>
											
									<h5 style="font-size: 13px;" class="text-center"><span><?php echo $b['packname']; ?></span></h5>
									</figcaption>		
							</figure>

						</div><br>

					</div>

					<?php
				}
					?>
					
					
					
				  <div class="clearfix"></div>
				</div>
				
				
				
			</div>	
		</div><br>	
	</div>
	

	<?php require_once 'footer.php' ;?>

</body>
</html>