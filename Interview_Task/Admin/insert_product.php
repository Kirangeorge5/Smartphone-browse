<?php
    include('../include/connect.php');

    if(isset($_POST['insert_product'])){
        
        $product_brand=$_POST['product_brand'];
        $product_model=$_POST['product_model'];
        
        //accessing image
        $product_image=$_FILES['product_image']['name'];

        //accessing image temporary name
        $temp_image=$_FILES['product_image']['tmp_name'];


        move_uploaded_file($temp_image,"./product_images/$product_image");

        $insert_products="insert into product (brand_name,model_name,product_image) values('$product_brand','$product_model','$product_image')";
        $result=mysqli_query($con,$insert_products);
        if($result){
            echo "<script>alert('Product inserted successfully')</script>";
        }

        


    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<div class="container">
    <h1 class="text-center">Insert Products</h1>
    <form action="" method="post" enctype="multipart/form-data"> 

        <!-- <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product-title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required='require'>
        </div> -->

        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_brand" id="" class="form-select">
                <option value="">Select a Brand</option>
                <?php 
                $select="Select * from brand";
                $result=mysqli_query($con,$select);
                while($row=mysqli_fetch_array($result))
                {
                    $brand_name=$row['brand_name'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_name'>$brand_name</option>";
                }
                ?>
                <!-- <option value="">Brand 1</option>
                <option value="">Brand 2</option>
                <option value="">Brand 3</option> -->
            </select>
        </div>





 




        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_model" id="" class="form-select">
            <option value="">Select a Model</option>
            <?php 
                $select="Select * from model";
                $result=mysqli_query($con,$select);
                while($row=mysqli_fetch_array($result))
                {
                    $model_name=$row['model_name'];
                    $model_id=$row['model_id'];
                    echo "<option value='$model_name'>$model_name</option>";
                }
                ?>
        </select>
        </div>


        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image" required="required">
        </div>



        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" class="btn btn-info mb-3 px-3" name="insert_product" value="Insert Products">
        </div>
        

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>