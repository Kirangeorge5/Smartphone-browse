<?php
include('./include/connect.php');

function allproducts(){
    global $con;
    if(!isset($_GET['brand'])){
        $select="Select * from product order by rand()";
        $result=mysqli_query($con,$select);
        $num=mysqli_num_rows($result);
        // $row=mysqli_fetch_assoc($result);
        // echo $row['product_']
        echo "<p>Showing results: $num</p>";
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_brand=$row['brand_name'];
          $product_model=$row['model_name'];
          $product_image=$row['product_image'];
          echo " <div class='col-md-3 '>
          <div class='card border-0'>
              <img src='./Admin/product_images/$product_image' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title text-center'>$product_model</h5>
                <p class='card-text text-center'>$product_brand</p>
               </div>
            </div>
      </div>";

        }
    
}

    }





function allbrands(){
  global $con;
  if(isset($_GET['all'])){
    $select="Select * from product order by rand()";
        $result=mysqli_query($con,$select);
        $num=mysqli_num_rows($result);
        // $row=mysqli_fetch_assoc($result);
        // echo $row['product_']
        echo "<p>Showing results: $num</p>";
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_brand=$row['brand_name'];
          $product_model=$row['model_name'];
          $product_image=$row['product_image'];
           echo "<div class='col-md-3 '>
          <div class='card border-0'>
              <img src='./Admin/product_images/$product_image' class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title text-center'>$product_model</h5>
                <p class='card-text text-center'>$product_brand</p>
               </div>
            </div>
      </div>";

        }
    
  }
}



function getbrands(){
    global $con;
    if(isset($_GET['brand'])){
        $brand=$_GET['brand'];
        $select="Select * from product where brand_name like '%$brand%'";
        $result=mysqli_query($con,$select);
        $num=mysqli_num_rows($result);
        echo "<p>Showing results: $num</p>";
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_brand=$row['brand_name'];
            $product_model=$row['model_name'];
            $product_image=$row['product_image'];
 
            echo "<div class='col-md-3'>
            <div class='card border-0'>
                <img src='./Admin/product_images/$product_image' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title text-center'>$product_model</h5>
                  <p class='card-text text-center'>$product_brand</p>
                 </div>
              </div>
        </div>";
  
          }

    }
};


function sidenavbrands(){
    global $con;
    $select_brands="Select * from brand";
                    $result_brands=mysqli_query($con,$select_brands);
                    while($row_data=mysqli_fetch_assoc($result_brands)){
                      $brand_name=$row_data['brand_name'];
                      echo "<li class='nav-item'>
                      <a href='index.php?brand=$brand_name' class='nav-link text-dark'>$brand_name</a>
                  </li>";
                    }

}





function searchdata(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search=$_GET['search_data'];
    $search_query="Select * from product where model_name like '%$search%'";
    $result=mysqli_query($con,$search_query);
    $num=mysqli_num_rows($result);
    if($num==0){
      echo "<h2 class='text-center text-danger'>No results match</h2>";
    }
    echo "<p>Showing results: $num</p>";
    while($row=mysqli_fetch_assoc($result)){
      $product_id=$row['product_id'];
      $product_brand=$row['brand_name'];
      $product_model=$row['model_name'];
      $product_image=$row['product_image'];
      echo "<div class='col-md-3 '>
      <div class='card border-0'>
          <img src='./Admin/product_images/$product_image' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title text-center'>$product_model</h5>
            <p class='card-text text-center'>$product_brand</p>
           </div>
        </div>
  </div>";

    }
} 
      
  } 






?>
