<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'header.php';?>
<?php require_once 'menu.php';?>

<?php


date_default_timezone_set("Asia/Calcutta");
$d=date("y/m/d h:i:s");

if (isset($_POST['btnservice'])) 
{
  extract($_POST);
  
   $sr=$m->file("Services");

   $m->dml("insert into tblservice(srname,srdesc,srimage,srdate)values('$txtsname','$txtsdesc','$sr','$d')");

   ?>
   <script type="text/javascript">
     alert("Services Inserted...");
        </script>
   <?php
}

?>



<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4">Add Services</p>

   
  <input type="text" class="form-control mb-4" name="txtsname" placeholder="Services Name">
   <input type="text" class="form-control mb-4" name="txtsdesc" placeholder="Services Description">

    
         <input type="file" class="form-control mb-4" name="fileToUpload" id="fileToUpload">

   
<input type="submit" class="btn btn-info my-4 btn-block" name="btnservice" value="Add Services">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
