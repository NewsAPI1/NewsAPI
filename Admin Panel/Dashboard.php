<?php
session_start();
if ( $_SESSION['uname']==true) {
  # code...
}else
header('location:Admin_login.php');
$page='home';
include('include_Structure.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>

                </div>
                <h2 style="text-align:center">Welcome Back
                    <?php echo $_SESSION['uname'];?>                   
                </h2>
                <div style="background-color: #ff793f;margin:2rem auto"class="card">
                        <div class="text-center" style="font-family: 'Luckiest Guy', cursive;">
                        
                        <p class="card-text" >
                        <h6 style="color:#ff793f;padding:1rem;margin-top:-1rem;background-color:#cd6133"><i class='fa fa-chart-bar'></i>Total Newsfeeds</h6>
                        <p style="color:#cd6133"><?php
                            include("connection.php");
                            $uname=$_SESSION['uname'];
                            $query="SELECT COUNT(*) FROM `news`";
                            $result=mysqli_query($connection,$query);
                            $data = mysqli_fetch_array($result);
                            echo $data[0];
                        ?></p>
                        </p>
                        </div>
                    </div> 
                    <div style="background-color:#34ace0;margin:2rem auto;"class="card">
                        <div class="text-center" style="font-family: 'Luckiest Guy', cursive;">
                        
                        <p class="card-text" >
                        <h6 style="color:#34ace0;margin-top:-1rem;padding:1rem;background-color:#227093"><i class='fa fa-chart-bar'></i>Total Newsfeeds By You</h6>
                        <p style="color:#227093">
                        <?php
                            include("connection.php");
                            $uname=$_SESSION['uname'];
                            $query="SELECT COUNT(*) FROM `news` where Admin='$uname'";
                            $result=mysqli_query($connection,$query);
                            $data = mysqli_fetch_array($result);?>
                            <?php echo "$data[0]";
                        ?></p>
                        </p>
                        </div>
                    </div> 
            </main>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>