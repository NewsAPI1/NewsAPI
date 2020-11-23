<?php
 include('connection.php');
 $id=$_GET['Id'];
 $query=mysqli_query($connection,"delete  from category where Id='$id'");
  if ($query) {
  	echo "<script> alert('Category deleted !')</script> ";
  	echo "<script >window.location='http://localhost/Inclick News/Admin Panel/Categories.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>