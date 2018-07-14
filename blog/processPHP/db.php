<?php

$connection=mysqli_connect('localhost','root','','blog_sushant');
//$connection=mysqli_connect('127.0.0.1:52484','azure','6#vWHD_$','blog_sushant');

//testing connection

if(mysqli_connect_errno()){
  echo "problem with db connection".mysqli_connect_error();
}

 ?>
