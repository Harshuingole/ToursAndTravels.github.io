
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
$c=date("y/m/d h:i:s");

if (isset($_POST['btnpackage'])) 
{
  extract($_POST);

  $Package=$m->file("Package");
 

  $n=$m->dml("insert into tblpaackage(packname,packimage,ptid,packdate)values('$txtpname','$Package','$ddlptype','$c')");
  ?>
  <script type="text/javascript">
    alert("Packages Inserted..");
  </script>
  <?php

}

?>



<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">


    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">
    <p class="h4 mb-4">Add Package </p>

    <br>


    <select class="form-control" name="ddlptype">
      <option>--Select Package Type--</option>
      <?php
      $q1=$m->runquery("select * from tblpaacktype");
      while ($r1=mysqli_fetch_array($q1)) 
      {
        extract($_POST);
        ?>
        <option value="<?php echo $r1["ptid"];?>">
          <?php echo $r1["ptname"];?>
          </option>
          <?php
            }
        ?>
    </select>
    <br>






  
 
 
 
      <input type="text" class="form-control mb-4" name="txtpname" placeholder="Enter  Package Name">
 

   


   <input type="file" class="form-control mb-4" name="fileToUpload" id="fileToUpload" >


   
    
<input type="submit" class="btn btn-info my-4 btn-block" name="btnpackage" value="Add Package ">
        
</form>
<!-- Default form register -->

</div>
<div class="col-md-2"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
