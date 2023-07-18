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
if (isset($_POST['btnptype'])) 
{
  extract($_POST);
  
   $pt=$m->file("Package_Type");

   $m->dml("insert into tblpaacktype(ptname,ptimage)values('$txtptype','$pt')");

   ?>
   <script type="text/javascript">
     alert("Package Type Inserted...");
        </script>
   <?php
}

?>



<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4">Add Package Type</p>

   
  <input type="text" class="form-control mb-4" name="txtptype" placeholder="Package Type Name">

     <br>
         <input type="file" class="form-control mb-4" name="fileToUpload" id="fileToUpload">
<br>
   
<input type="submit" class="btn btn-info my-4 btn-block" name="btnptype" value="Add Package Type">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
