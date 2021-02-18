<?php
session_start();
if ( $_SESSION['uname']==true) {  
}else
header('location:Admin_login.php');
$page='category';
include('include_Structure.php');
?>
<div style=" width: 70%; margin-left: 25%; margin-top:5%">
<form action="" method="post" name="categoryform" onsubmit=" return validateform() ">
<?php
include('connection.php');
$id=$_GET['Id'];
$query="select * from category where Id='$id'";
$query1=mysqli_query($connection,$query);
$arrdata=mysqli_fetch_array($query1);
$category =$arrdata['CategoryName'];
$description=$arrdata['Description'];
if (isset($_POST['submit'])) {

        $ids=$_GET['Id'];
         $category =$_POST['category'];
         $description=$_POST['description'];    
         $update="update category set Id=$ids,CategoryName='$category' , Description='$description' where Id=$ids ";
         $res=mysqli_query($connection,$update);
         if($res){
             echo "<script>alert('Category Updated Successfully !')</script>";
             echo "<script >window.location='http://localhost/Inclick news/Admin Panel/Categories.php' ;</script>";    
         }else{
             echo "<script>alert('Category Not Update')</script>";
         }   
}
?>
<h1>Update Categories</h1>
<hr>
<div class="form-group">
    <label> Category:</label>
    <input type="text" value="<?php echo $category;?>" placeholder="Enter Category Name " name="category" class="form-control">

</div>
<div class="form-group">
    <label>Description:</label>
    <textarea class="form-control" placeholder="Enter Category Description" rows="5" name="description" id="comment"><?php echo $description;?></textarea>
</div>
<input type="submit" name="submit" class="btn btn-primary" value="Update">
</form>
<script>
    function validateform() {
        var x = document.forms['categoryform']['category'].value;
        if (x == "") {
            alert('Category Must Be Filled Out !');
            return false;
        }
        var y=document.forms['categoryform']['description'].value;
                if(y==""){
                    alert('Description Must Be Filled Out !');
                    return false;
                    
                }
    }
    
</script>

</div>