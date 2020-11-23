<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="icon" href="website.svg" type="image/x-icon" media="none"> 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@100;400&family=Kumbh+Sans&display=swap" rel="stylesheet">
</head>
<style>
    *{
        padding:0;margin:0;box-sizing:border-box;transition: all 0.3s
    }
    body {
    font-size: .875rem;
    font-family: 'Gayathri', sans-serif;
    font-family: 'Kumbh Sans', sans-serif;
    outline: none;
    
    
}
.contain{
    height:40rem;width:38rem;margin:5rem auto;
    box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.5);border-radius:10px;
}
.contain:hover{

transform: scale(1.1);
}
.form-group{
    padding:1rem 1.5rem;
}
label{
    font-size:1.5rem;    color: gray;
    
}

input{
    margin:0.5rem 0rem
}
button{
    margin:1rem 2rem;
    width:90%;border:none;
    color: rgb(64, 85, 22);font-size:1rem;
    background-color: yellowgreen;outline:none;
    box-shadow: 0 1rem rgb(107, 145, 31);font-family: 'Luckiest Guy', cursive;
}
button:hover{
    background-color: yellowgreen;
    box-shadow: 0 0.8rem rgb(124, 167, 39);
    transform: translateY(2px);
}
button:active{
    background-color: yellowgreen;
    box-shadow: 0 0.8rem rgb(124, 167, 39);
    transform: translateY(3px);
}
h2{
    text-align: center;color:black;
    background: linear-gradient(to right, #192a56, 
    #487eb0, #487eb0, #487eb0); 
            -webkit-text-fill-color: transparent; 
            -webkit-background-clip: text; 
    padding:3rem;font-family: 'Luckiest Guy', cursive;
}
h1{text-align: center;font-weight:800}
</style>
<body>
<h1><img style="width:8rem;height:8rem;margin:1rem"src="website.svg" class="icon">Inclick News</h1>
    <div class="contain">
        
        <h2 style="text-align:center">Admin Panel</h2>
        <form action="admin_login.php" method="post">
            <div class="form-group">
            <label for="uname">User Name</label>
                <input type="text" name="uname" class="form-control" id="uname">
                
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
                
            </div>

            <button style="border-radius:20px;"type="submit" name="submit"class="btn">Login</button>
        </form>
    </div>
</body>

</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $query=mysqli_query($connection,"select * from admin_login where Username='$uname' and password='$password'");
    if($query){
        if(mysqli_num_rows($query)>0){
            $_SESSION['uname']=$uname;
            header('location:Dashboard.php');
            
        }
        else{
            echo "<script> alert('Invalid Username or Password');</script>";
        }
    }
}
?>