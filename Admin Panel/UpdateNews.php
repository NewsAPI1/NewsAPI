<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Admin_login.php');
$page='news';
include('include_Structure.php');
?>
<div style=" width: 70%; margin-left: 25%; ">
<form action="" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
<?php
include('connection.php');
$id=$_GET['Id'];
$query="select * from news where Id =$id";
$query1=mysqli_query($connection,$query);
$row=mysqli_fetch_array($query1);
$admin=$row['Admin'];
$id=$row['Id'];
$link=$row['Link'];
$title=$row['Title'];
$description=$row['Description'];
$date=$row['Date'];
$thumbnail=$row['Thumbnail'];
$category=$row['Category'];

if (isset($_POST['submit'])) {
    $id=$_GET['Id'];
    $link=$_POST['link'];
	$title=$_POST['title'];
	$description=$_POST['description'];
    $date=$_POST['date'];
    
	$thumbnail=$_FILES['thumbnail']['name'];
	$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
	$category=$_POST['category'];
	move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

    $update="update news set Id=$id,Title='$title',Link='$link',Description='$description',Date='$date',Category='$category',Admin='$admin',Thumbnail='$thumbnail' WHERE ID=$id";
    $res=mysqli_query($connection,$update);
	if ($res) {
		 echo "<script>alert('News update Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Inclick News/Admin Panel/News.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>


         
			<h1>Update News</h1>
            <hr>
            <div class="form-group">
            <label for="admin">Admin</label>
            <input type="text" class="form-control" disabled value="<?php echo $admin;  ?> ">

        </div>
		  <div class="form-group">
		    <label for="uname"> Title:</label>
		    <input type="text" value="<?php echo $title; ?>" placeholder="Title..." name="title" class="form-control" id="uname">
		  </div>
          <div class="form-group">
            <label  > Link:</label>
            <input type="text" value="<?php echo $link; ?>"placeholder="Link..." name="link" class="form-control"  >
        </div>
		  <div class="form-group">
			  <label for="comment">Description:</label>
			 	 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"><?php echo $description; ?> </textarea>
			</div>

			<div class="form-group">
		    <label for="uname"> Date:</label>
		    <input type="date"  name="date" value="<?php echo $date ;?>" class="form-control" id="uname">
		  </div>

           <div class="form-group">
		    <label for="uname"> Thumbnail:</label>
		    <input type="file" value="<?php echo $thumbnail; ?>"  name="thumbnail" class="form-control img-thumbnail" id="uname">
		    <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt=""  width="300">
		  </div>
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
		    <div class="form-group">
		    <label for="uname"> Category:</label>
		     
               
		        <select class="form-control"  name="category" >
		       <?php
                include('connection.php');
                  $query=mysqli_query($connection,"select * from category");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
		        	 
                 <?php } ?>
		        </select>
		  </div>

		  <input type="submit" name="submit" class="btn btn-primary" value="Update">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
        //  if (x=="") {
        //   	alert('Title Must Be Filled Out !');
        //   	return false;
        //   }
        //   if (y=="") {
        //   	alert('Description Must Be Filled Out !');
        //   	return false;
        //   }
        //    if (y.length<10) {
        //   	alert('Description Atleast 100 character !');
        //   	return false;
        //   }
          
       }
 
		</script>

  </div>


