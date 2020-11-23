<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Admin_login.php');
$page='feedback';
include('include_Structure.php');

?>

<div style=" width:40%; margin-left: 25%; margin-top:2%">
  	   
         <h1>Feedback</h1>
         <hr>

   <table class="table">
     <tr>

           <th>Email</th>
             <th>Feedback</th>
             <th>Delete</th>
     </tr>
<?php
include('connection.php');


$query=mysqli_query($connection,"select * from Feedback ");

while ($row=mysqli_fetch_array($query)) {

?>
       <tr style="text-align: center;">
       <td><?php echo $row['user_email'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><a href="delete_feedback.php?Id=<?php echo $row['Id'];?>"><i title="Delete"class="far fa-trash"></i></a></td>
   </tr>
   <?php } ?>
</table>


     
</div>