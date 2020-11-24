<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Admin_login.php');
$page='news';
include('include_Structure.php');
?>

<div style="width:40%;margin:1rem auto;">

    <table style="width:30%;margin:1rem auto"class="table table-bordered">
  
      <tr><th colspan="8"><a href="AddNews.php" style="color:#227093margin-bottom:1%"><i style="padding:0.4rem"class="fa fa-plus"></i>Add News</th></a></tr> 
      <tr>
         <th>Title</th>
         <th>Description</th>
         <th>Date</th>
         <th>Category</th>
         <th>Thumbnail</th>
         <th>Admin</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
        <?php
        include('connection.php');
        $query=mysqli_query($connection,"select * from news");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>

            <td><?php echo substr($row['Title'],0,20); ?></td>
            <td><?php echo substr($row['Description'],0,30 ); ?></td>
            <td><?php echo date("F jS ,y", strtotime($row['Date'])); ?></td>
            <td><?php echo $row['Category']; ?></td>
            <td><img class="img img-thumbnail" src="images/<?php echo $row['Thumbnail'];?>" alt="" width="150" height="150"></td>
            <td><?php echo $row['Admin'];?></td>
            <td><a class="btn btn-sm" href="UpdateNews.php?Id=<?php echo $row['Id'];?>"><i title="Edit"class="far fa-edit"></i></a></td>
            <td><a class="btn  btn-sm" href="deleteNews.php?Id=<?php echo $row['Id'];?>"><i title="Delete"class="far fa-trash"></i></a></td>

        </tr>
       <?php } ?>  
    </table>

  </div>