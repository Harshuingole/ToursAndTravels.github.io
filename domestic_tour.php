<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once 'head.php' ;?>
</head>
<body>

	<?php require_once 'menu.php' ;?>


	<div class="content-our" id="our" style="background-color: white;">
		<h3 style="color: #1c2a48;font-size: 40px;font-family: bold" class=" wow fadeInUp animated">Domestic Tours</h3>
		<div class="row">
		<div class="container">
			<?php

 			 $q=$m->runquery("select * from tblpaackage where  ptid=3");

  			while ($b=mysqli_fetch_array($q))

			   {
			      extract($b);
			      $_SESSION["packid"]=$b["packid"];
			    
			      ?>
			

				<div class="col-md-4   wow fadeInRight animated" data-wow-delay=".8s">
						<div class="grid-effect">
							<figure class="effect-ruby" style="border-radius: 50%;height: 290px;width: 280px">
								<img src="Admin/Package/<?php echo $b['packimage'];?>" height="200px" width="300px"  >
								<figcaption>
									<br><br>
									<h5 style="font-size: 20px;" class="text-center"><span><?php echo $b['packname']; ?></span></h5>
										
										
									</figcaption>	
									
							</figure>
								
						</div>
					</div>



			

			<?php
			}
			?>	

     	  <div class="clearfix"></div>
		</div>

		</div>
	</div>



	<?php require_once 'footer.php' ;?>

</body>
</html>