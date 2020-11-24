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
    @media(max-width:630px){
        .menu1 .head{
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
</style>
<body class="w3-light-grey">
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
            <li><a href="news1.php">Home</a></li>
            <li><a href="business.php">Business</a></li>
            <li><a href="entertainment.php">Entertainment</a></li>
            <li><a href="health.php">Health</a></li>
            <li><a href="science.php">Science</a></li>
            <li><a href="sports.php">Sports</a></li>
            <li><a href="technology.php">Technology</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="../Admin%20Panel/Articles.php?page=1">Articles</a></li>
            <div class="sidebar">
                <ul class="menu">
                    <li>
                        <a href="news1.php"><img src="https://img.icons8.com/color/48/000000/top-menu.png" />Home</a>
                    </li>
                    <li>
                        <a href="business.php"><img src="https://img.icons8.com/color/48/000000/refund.png" />Business</a>
                    </li>
                    <li>
                        <a href="entertainment.php"><img src="https://img.icons8.com/color/48/000000/movie-projector.png" />Entertainment</a>
                    </li>
                    <li>
                        <a href="health.php"><img class="health" src="https://img.icons8.com/plasticine/100/000000/hospital-room.png" />Health</a>
                    </li>
                    <li>
                        <a href="science.php"><img src="https://img.icons8.com/color/48/000000/physics.png" />Science</a>
                    </li>
                    <li>
                        <a href="sports.php"><img src="https://img.icons8.com/color/48/000000/tennis.png" />Sports</a>
                    </li>
                    <li>
                        <a href="technology.php"><img src="https://img.icons8.com/color/48/000000/development-skill.png" />Technology</a>
                    </li>
                    <li>
                        <a href="search.php"><img src="https://img.icons8.com/doodle/48/000000/search--v1.png"/>Search</a>
                    </li>
                    <li>
                        <a href="../Admin%20Panel/Articles.php?page=1"><img src="https://img.icons8.com/color/48/000000/google-blog-search.png"/>Articles</a>
                    </li>
                </ul>
            </div>
            
        </ul>
    </header>
    