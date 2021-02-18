<!DOCTYPE html>
<html>

<head>
    <title>Inclick News</title>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@100;400&family=Kumbh+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="website.svg" type="image/x-icon" media="none">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="header.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="footer.css" rel="stylesheet" />
    <link href="search.css" rel="stylesheet" />
</head>
<style>
    html {
        scroll-behavior: smooth;
        transition: all 5s ease-in-out;
    }
    
    #top {
        outline: none;
        position: fixed;
        bottom: 0;
        right: 0;
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
    
    #top:hover {
        transform: scale(1.1);
        transition: all .3s
    }
    
    .icon-bar {
        position: fixed;
        left: 5%;
        top: 95%;
        -webkit-transform: translateY(-90%);
        -ms-transform: translateY(-90%);
        transform: translateY(-90%);
    }
    
    .icon-bar .open-button {
        outline: none;
        border: none;
        border-radius: 50%;
        display: block;
        text-align: center;
        height: 2.7rem;
        width: 2.7rem;
        color: white;
        background-color: #dfe6e9;
        font-size: 20px;
        margin-left: 2rem;
        box-shadow: 2px 7px 4px 0 rgba(0, 0, 0, 0.2);
    }
    
    .open-button:hover {
        transform: scale(1.1);
        transition: all .3s
    }
    
    .chat-popup {
        outline: none;
        height: 5rem;
        margin-bottom: 18rem;
        margin-left: -3rem;
        width: 15rem;
        position: fixed;
        bottom: 0;
        z-index: 9;
    }
    
    .form-container {
        transition: all 0.3s ease;
        outline: none;
        padding: 10px;
        background-color: #CAD3C8;
        border-radius: 1rem;
        box-shadow: 2px 7px 4px 0 rgba(0, 0, 0, 0.2);
    }
    
    .form-container label {
        margin: 0rem 5rem;
        color: #2C3A47;
        outline: none;
    }
    
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0 1rem 0;
        outline: none;
        border: none;
        background: #f1f1f1;
        resize: none;
        min-height: 200px;
    }
    
    .form-container textarea:focus {
        background-color: #ddd;
    }
    
    .form-container input {
        background-color: #f1f1f1
    }
    
    .form-container input:focus {
        background-color: #ddd;
    }
    
    .form-container .btn {
        background-color: #192a56;
        color: whitesmoke;
        outline: none;
        height: 3rem;
        width: 1rem;
        border: none;
        cursor: pointer;
        width: 20%;
        border-radius: 50%;
        margin-bottom: 0.5rem;
        margin-left: 2.5rem;
        opacity: 0.8;
        box-shadow: 2px 7px 4px 0 rgba(0, 0, 0, 0.2);
    }
    
    .btn:hover {
        transform: scale(1.1);
        transition: all .3s
    }
    
    .form-container i {
        color: whitesmoke;
    }
    
    .form-container .cancel {
        background-color: #c23616;
    }
    
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }
    
    .email {
        width: 100%;
        border: none;
        outline: none;
        padding: 5px;
    }
</style>

<body onload="myFunction()">

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
            <li><a href="CoronaNews.php">Coivd</a></li>
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
    <div id="loader"></div>
    <div id="container" id="google_translate_element" style="display:none">
        <h1><img src="website.svg" class="icon">InClick</h1>
        <div style="border-top:0.2rem solid gray;margin:1rem 7rem;border-radius:1rem;box-shadow:0 3px 5px 0 rgba(0,0,0,0.2);"></div>
        <div class="icon-bar">
            <button class="open-button" onclick="openForm()"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
            <div class="chat-popup" style="display: none" id="myForm">
                <form class="form-container" action="../Admin%20Panel/Add_Feedback.php" method="post">
                    <label><b>Feedback</b></label>
                    <input name="user_email" placeholder="Enter Your Email Address" class="email">
                    <textarea placeholder="Type message.." name="message" required></textarea>
                    <button value="" type="submit" name="submit" value="" class="btn"><i class="fa fa-paper-plane"></i></button>
                    <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-times" aria-hidden="true"></i>
                </button>
                </form>
            </div>
        </div>
        <button onclick="topFunction()" id="top" title="Go to top"><i class="fa fa-angle-up"></i></button>