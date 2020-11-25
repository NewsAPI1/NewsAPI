<?php
  include('connection.php');
 
 if (isset($_POST['submit'])) {
     
     $user_email=$_POST['user_email'];
     $message=$_POST['message'];

     $query=mysqli_query($connection,"insert into feedback(user_email,message)values('$user_email','$message')");
 
     if($query){
          echo "<script> alert('Feedback Uploaded')</script>";
          echo "<script >window.location='http://localhost/Inclick News/NewsAPI/news1.php' ;</script>";
     }else{
          echo "<script> alert('Please try Again')</script>";
          echo "<script >window.location='http://localhost/Inclick News/NewsAPI/news1.php' ;</script>";
     }
 }
 
 
 
   ?>