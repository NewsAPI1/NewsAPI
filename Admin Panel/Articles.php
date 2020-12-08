<!DOCTYPE html>
<html>
<title>Inclick News</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="website.svg" type="image/x-icon" media="none"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="footer.css">
<style>
        html {
        scroll-behavior: smooth;
        transition: all 5s ease-in-out;
    }
    
    #top {
        outline: none;
        position: fixed;
        bottom: 0;
        right: 0;../NewsAPI/
        display: none;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        margin: 0 3em 3em 0;
        border-radius: 50%;
        font-size: 1.1rem;
        height: 2.7rem;
        width: 2.7rem;
        background-color: #dfe6e9;
        border: none;
        box-shadow: 2px 7px 4px 0 rgba(0, 0, 0, 0.2);
    }
    @media(min-width:993px){
        .w3-content{
            margin-left:300px;
        }
        .pagination{
            margin-left:10rem
        }
        footer{
            margin-left:-300px;width:1380px
        }
    }
    @media(max-width:670px){
        header .head{
            display:none
        }
        
        
    }
    body,h1,h2,h3,h4,h5 {
        font-family: "Raleway", sans-serif
    }
 

@media(max-width:980px) {
    * {
        transition: 0.3s;
    }
    .sec-1 {
        display: flex;
        flex-direction: column;
        padding: 30px 8px;
        justify-content: center;
        align-items: center;
    }
    .sec-1 ul li {
        text-align: center;
    }
    .sec-1 h2 {
        text-align: center;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .sec-3 li {
        display: inline-block;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        background-color: black;
    }
    .sec-3 ul li i {
        font-size: 20px;
        text-align: center;
        color: whitesmoke;
        padding-left: 12px;
    }
}
/* .w3-container{
    overflow: auto
} */
</style>
<body class="w3-light-grey">
<div id="container" id="google_translate_element">
		<h1 style="font-weight: bold;text-align: center;margin-top: 5rem;"><img src="website.svg" class="icon">InClick</h1>        
        <div style="border-top:0.2rem solid gray;margin:1rem 7rem;border-radius:1rem;box-shadow:0 3px 5px 0 rgba(0,0,0,0.2);"></div>
    </div>
<header id="google_translate_element">
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement('google_translate_element');
            }
        </script>

        <ul class="menu1">
            <input type="checkbox" id="chk">
            <label for="chk" class="show-btn">
                <i class="fa fa-bars"></i>
            </label>
            <label for="chk" class="hide-btn">
                <i class="fa fa-times"></i>
            </label>
            
            <li class="head"><a href="../NewsAPI/news1.php">Home</a></li>
            <li class="head"><a href="../NewsAPI/business.php">Business</a></li>
            <li class="head"><a href="../NewsAPI/entertainment.php">Entertainment</a></li>
            <li class="head"><a href="../NewsAPI/health.php">Health</a></li>
            <li class="head"><a href="../NewsAPI/science.php">Science</a></li>
            <li class="head"><a href="../NewsAPI/sports.php">Sports</a></li>
            <li class="head"><a href="../NewsAPI/technology.php">Technology</a></li>
            <li class="head"><a href="../NewsAPI/search.php">Search</a></li>
            <li class="head"><a href="../NewsAPI/CoronaNews.php">Coivd</a></li>
            <li class="head"><a href="../Admin%20Panel/Articles.php?page=1">Articles</a></li>
            
            <div class="sidebar">
                <ul class="menu">
                
                    <li>
                        <a href="../NewsAPI/news1.php"><img src="https://img.icons8.com/color/48/000000/top-menu.png" />Home</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/business.php"><img src="https://img.icons8.com/color/48/000000/refund.png" />Business</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/entertainment.php"><img src="https://img.icons8.com/color/48/000000/movie-projector.png" />Entertainment</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/health.php"><img class="health" src="https://img.icons8.com/plasticine/100/000000/hospital-room.png" />Health</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/science.php"><img src="https://img.icons8.com/color/48/000000/physics.png" />Science</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/sports.php"><img src="https://img.icons8.com/color/48/000000/tennis.png" />Sports</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/technology.php"><img src="https://img.icons8.com/color/48/000000/development-skill.png" />Technology</a>
                    </li>
                    <li>
                        <a href="../NewsAPI/search.php"><img src="https://img.icons8.com/doodle/48/000000/search--v1.png"/>Search</a>
                    </li>
                    <li>
                        <a href="../Admin%20Panel/Articles.php?page=1"><img src="https://img.icons8.com/color/48/000000/google-blog-search.png"/>Articles</a>
                    </li>
                </ul>
            </div>
            
        </ul>
    </header>
    <button onclick="topFunction()" id="top" title="Go to top"><i class="fa fa-angle-up"></i></button>
    <div class="w3-content" style="max-width:1400px">
        <?php
            include('connection.php');
            $page=$_GET['page'];
            if($page=="" || $page==1){
             $page1=0;
            }
            else{
               $page1=($page*3)-3; 
            }
            $query=mysqli_query($connection,"select * from news order by Id desc limit $page1,3 ");
            while($row=mysqli_fetch_array($query)){?>
            <div class="w3-row">
                <div class="w3-col l8 s12" style="position:static;">
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="images/<?php echo $row['Thumbnail'];?>" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b><?php echo $row['Title']; ?></b></h3>
                        <h5>Title description, <span class="w3-opacity"><?php echo $row['Date']; ?></span></h5>
                    </div>
                    <div class="w3-container">
                        <p><?php echo $row['Description']; ?></p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button style="margin:1rem"class="w3-button w3-padding-large w3-white w3-border"><b><a href="<?php echo $row['Link']; ?>" target="_blank">READ MORE &raquo;</a></b></button></p>
                            </div>

                        </div>
                    </div>
            </div>
            
            </div><?php }?>

    </div>   
    <div class="pagination"style="">
    <?php
        $sql=mysqli_query($connection,"select * from news");
        $count=mysqli_num_rows($sql);
        $a=$count/3;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) {?>
    <a class="page-link" href="Articles.php?page=<?php echo $b;?>"><button  class="w3-button w3-black w3-padding-large w3-margin-bottom"><?php echo $b; ?> &raquo;</button></a>
    <?php }?>
    </div>   
        </div>
        <footer id="google_translate_element">
    <section class="sec-1">
        <section class="about">
            <h2>About</h2>
            <p>We understand you don’t have time to go through newspaper everyday.
            </p>
        </section>
        <section class="link1">
            <h2>categories</h2>
            <ul>
                <li><a href="../NewsAPI/business.php">Business</a></li>
                <li><a href="../NewsAPI/entertainment.php">Entertainment</a></li>
                <li><a href="../NewsAPI/health.php">Health</a></li>
                <li><a href="../NewsAPI/science.php">Science</a></li>
                <li><a href="../NewsAPI/sports.php">Sports</a></li>
                <li><a href="../NewsAPI/technology.php">Technology</a></li>
            </ul>
        </section>
        <section class="link2">
            <h2>quick links</h2>
            <ul>
                <li><a href="../NewsAPI/aboutusnews.php">About Us</a></li>
                <li><a href="../NewsAPI/CoronaNews.php">Covid Tracker</a></li>
                <li><a href="../Admin%20Panel/Articles.php?page=1">Articles</a></li>
                <li><a href="../NewsAPI/Landingpage.php">Landing Page</a></li>

            </ul>
        </section>
        <section class="link3">
            <h2>contact us</h2>
            <ul>
                <li><i class="fa fa-home"></i><span>GLA University, Uttar Pradesh, India</span></li>
                <li><a href="https://icons8.com/icon/1iF9PyJ2Thzo/home">Icon by Icons8</a></li>
                <li>Icons made by <a href="https://www.flaticon.com/authors/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></li>
                <li><i class="fa fa-envelope"></i><span>inclicknews@gmail.com</span></li>
                <li><i class="fa fa-phone-square"></i><span>Mobile: 9*********</span></li>
            </ul>
        </section>
    </section>
    
    <section class="sec-3">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://github.com/NewsAPI1/NewsAPI"><i class="fa fa-github"></i></a></li>
        </ul>
    </section>
    <section class="sec-4">
        <p>Copyright &#169; 2020 All Rights Reserved by Inclick
        </p>
    </section>
</footer>
</div>
<script>
    var myVar;
    function myFunction() {
        myVar = setTimeout(showPage, 000);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("container").style.display = "block";
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    var mybutton = document.getElementById("top");
    window.onscroll = function() {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>