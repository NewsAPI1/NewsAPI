<?php
 include('connection.php');
 $id=$_GET['Id'];
 $query=mysqli_query($connection,"delete  from news where Id='$id'");
  if ($query) {
  	echo "<script> alert('News deleted !')</script> ";
  	echo "<script >window.location='http://localhost/Inclick News/Admin Panel/News.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>