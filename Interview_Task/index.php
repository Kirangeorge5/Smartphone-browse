<?php
include('./include/connect.php');
include('./functions/functions.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
     
.card-img-top{
    width: 100%;
    height: 200px;
    object-fit: contain;
}

.card{
    border: none;
}
.ul.navbar-nav{
    border: 2px solid;
}
.logo{
    width: 60px;
    height: 60px;
}
.ul.navbar-nav{
    border: 2px solid black;
}
.box{
  width: 1400px;
  display: flex;
  background-color: white;
  border-radius: 30px;
  align-items: center;
  padding: 0px;
  border: 1px solid #dddddd;
  float: left;
}
.box>i{
  font-size: 20px;
  color:#777;
}
.box>input{
  flex: 1;
  height: 40px;
  border: none;
  outline:none;
  font-size: 18px;
  padding-left: 10px;
}
#login{
  font-size: 17px;
}
#searchbar{
  font-size: 14px;
}

#border_row{
  border-top: 1px solid black;
}
#products{
  border-left: 1px solid black;
}

/* #products{
  font-size: 14px;
} */
     </style>
<body>
    <div class="container-fluid mh-100">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2 pt-1">
               <a class="navbar-brand"><img src="./images/logo.jpg" alt="" class="logo">Tech Haven</a>
                </div>
                <div class="col-md-9 pt-2">
                <form class="d-flex" role="search" action="" method="get">
                <div class="box">
                <input type="search" class="form-control " id="searchbar" placeholder="Type any item name to search" name="search_data">
                <button type="submit" class="btn btn-link" name="search_data_product"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                </form>
                </div>
                <div class="col-md-1 pt-3">
                <a class="navbar-brand" id="login" href="#"><i class="fa-solid fa-right-to-bracket"></i>Login</a>

                </div>
              </div>
            </div>
          </nav>
 
          <div class="row mh-100 " id="border_row">
            <div class="col-md-2 text-dark p-0">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark"><h4>Brand Name</h4></a>
                    </li>

                    
                
                    <?php 
                    sidenavbrands();
                     ?>
  
                    <li class='nav-item'>
                      <a href='index.php?all' class='nav-link'>All Products</a>
                  </li>
                </ul>


            </div>
            <div class="col-md-10" id="products">
                <div class="row">
                <?php
                if(isset($_GET['search_data_product'])){
                  searchdata();
                }else{
                  allproducts();
                }
                
                getbrands();
              
              ?>
                </div>

            </div>
          </div>






<!-- 

          <div class="bg-info p-3 text-center">
            <p>All rights reserved</p>
          </div> -->




    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>