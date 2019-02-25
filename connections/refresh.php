<?php 

session_start();
session_unset();
session_destroy();

echo "<script> alert('File successfully refreshed')</script>";

 ?>