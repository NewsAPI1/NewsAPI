<?php
    include("connection.php");
    $id=$_GET['Id'];
    $query="delete from Feedback where Id=$id";
    $query1=mysqli_query($connection,$query);
    echo"<script>window.location='http://localhost/Inclick News/Admin Panel/Feedback.php'</script>"
?>
