<?php

$con=mysqli_connect("localhost","root","");
if (!$con)
{
  die('<h1>Connection error :'.mysqli_error($con).'</h1>');
}

mysqli_select_db($con,"library");

?>