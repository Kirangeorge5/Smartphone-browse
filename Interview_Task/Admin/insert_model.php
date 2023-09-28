<?php
include('../include/connect.php');
if(isset($_POST['insert_model'])){
  $model_title=$_POST['model_title'];

  $select_query="Select * from model where model_name='$model_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('this model is present inside the database')</script>";
  }
  else{

  $insert_query="insert into model (model_name) values('$model_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('model has been inserted successfully')</script>";
  }
}
}

?>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="model_title" placeholder="Enter models" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="border-0 p-2 my-3  bg-info" name="insert_model" value="Insert model" >
</div>
</form>