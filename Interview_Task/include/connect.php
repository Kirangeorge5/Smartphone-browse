<?php

$con=mysqli_connect('localhost','root','','smartphones');
// if($con){
//     echo "connection successfull";
// }else{
//     die(mysqli_error($con));
// }
if(!$con){
    echo "error connecting to MySQL: ".mysqli_connect_error();
    die;
}

?>