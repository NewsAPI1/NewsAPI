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
    <form action="" enctype="multipart/form-data" method="post"name="categoryform" onsubmit=" return validateform() ">
        <h1>Add News</h1>
        <hr>
        
        <div class="form-group">
            <label for="admin">Admin</label>
            <input type="text" class="form-control" disabled value="<?php echo $_SESSION['uname'];  ?> ">

        </div>
        <div class="form-group">
            <label  > Title:</label>
            <input type="text" placeholder="Title..." name="title" class="form-control"  >
        </div>
        <div class="form-group">
            <label  > Link:</label>
            <input type="text" placeholder="Link..." name="link" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
        </div>
        <div class="form-group">
            <label  > Date:</label>
            <input type="date" name="date" class="form-control"  >
        </div>
        <div class="form-group">
            <label  > Thumbnail:</label>
            <input type="file"  name="thumbnail" class="form-control img-thumbnail">     
            <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt=""  width="300">
        </div>
        <div class="form-group">
            <label  > Category:</label>
            <select class="form-control" name="category">
         <?php
          include('connection.php');
            $query=mysqli_query($connection,"select * from category");

          while($row=mysqli_fetch_array($query)){

              
              ?>
               <option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
               
           <?php } ?>
          </select>
        </div>




        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
    <script>
        function validateform() {
            var x = document.forms['categoryform']['title'].value;
            var y = document.forms['categoryform']['description'].value;
            var z = document.forms['categoryform']['date'].value;
            var w = document.forms['categoryform']['category'].value;
            // if (x == "") {
            //     alert('Title Must Be Filled Out !');
            //     return false;
            // }
            // if (y == "") {
            //     alert('Description Must Be Filled Out !');
            //     return false;
            // }

        }
    </script>
</div>
<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $title=$_POST['title'];
    $link=$_POST['link'];
	$description=$_POST['description'];
    $date=$_POST['date'];
    
	$thumbnail=$_FILES['thumbnail']['name'];
    $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($tmp_thumbnail,"images/$thumbnail");
	$category=$_POST['category'];
	$admin=$_SESSION['uname'];
    $query1=mysqli_query($connection,"insert into news(Title,Link,Description,Date,Category,Thumbnail,Admin)values('$title','$link','$description','$date','$category','$thumbnail','$admin')");
    if ($query1) {
      	echo "<script>alert('News uploaded Successfully !!')</script>  ";
    }else{
        echo "<script>alert('Please Try Again!!')</script>  ";
    }
}
?>