<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Admin_login.php');
$page='category';
include('include_Structure.php');

?>

<div style=" width: 70%; margin-left: 25%; margin-top:2%">
  	    <div class="text-left">
  	    
  	    	
   </div>
    <table class="table table-bordered">
    <tr><th colspan="4"><a href="Addcategories.php" style="margin-bottom:1%"><i style="padding:0.4rem"class="fa fa-plus"></i>Add Category</a> </th></tr>   
    <tr>
         
         <th>Category Name</th>
         <th>Description</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
        <?php
        include('connection.php');
        $query=mysqli_query($connection,"select * from category");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>
          
           <td><?php echo $row['CategoryName'];?></td>
            <td><?php echo substr($row['Description'],0,100 );?></td>
            <td> <a href="Update.php?Id=<?php echo $row['Id']; ?>"><i title="Edit"class="far fa-edit"></i></a></td>
            <td> <a href="Delete.php?Id=<?php echo $row['Id']; ?>" ><i title="Delete"class="far fa-trash"></i></a></td>
        </tr>
       <?php } ?>  
    </table>

  </div>