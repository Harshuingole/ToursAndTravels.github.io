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
		<h3 style="color: #1c2a48;font-size: 40px;font-family: bold" class=" wow fadeInUp animated">Our services</h3>
		<div class="row">
		<div class="container">
			<?php

 			 $q=$m->runquery("select * from tblservice");

  			while ($b=mysqli_fetch_array($q))

  				 {
   				   extract($b);
      
    			  ?>
			
				<div class="col-md-4 services boot-padding wow fadeInLeft animated " data-wow-delay=".6s">	
					<div class="content-ic">
						<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
							<img src="Admin/Services/<?php echo $b['srimage'];?>" height="100px" width="100px">
						</div>
					</div>	

					<h4 style="font-size: 20px"><?php echo $b['srname'];?></h4>
					<p><?php echo $b['srdesc'];?></p><br>
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