<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Inclick News</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <!--Extra cdn that i've added-->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!--upto here-->
    <link href="Landingpage.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Inclick</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Inclick News/NewsAPI/news1.php">Read Now</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IndianFlag.jpg" class="img">

                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="ttt"><u>Indian Flag</u></h1>
                            <p id="sss"> National Flag, the saffron color represents courage and sacrifice, white color represents peace and green color represents prosperity. In the middle of the white strip is Ashok Chakra which is blue in color and has 24 spokes.
                                It represents cycle of life and continuity. The length to width ratio of the flag is 3:2.</p>
                            <!--            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <img src="Parliament.jpg" class="img">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1><u>Parliament</u></h1>
                            <p>Parliament of India is the supreme legislative authority in India Indian Parliament is divided into two houses – Lok Sabha and Rajya Sabha Indian Parliament is one of the biggest and has a very intricate architecture ..</p>
                            <!--            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Red-Fort.jpg" class="img">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>The Red Fort</h1>
                            <p>The Red Fort is the most popular forts in India. It was constructed under the leadership of Shah Jahan and since then has been home to various nobles and kings. Today, the Red Fort is an important landmark and is used for the
                                Prime Minister’s address to the nation on Independence Day.</p>
                            <!--            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <section class="testimonials">
                <div class="container">
                    <h1 id="heading1">What People are saying!</h1>
                    <div class="row">

                        <div class="col-md-4 text-center">
                            <div class="profile">
                                <img src="siddharth.jpeg" class="user">
                                <blockqoute>
                                    My experience of Inclick has been awesome.The surveys are interesting and vary in the content matter.It delivers news on the latest stories, sport, entertainment, business, technology.They are posting news without any ads on website and the best part
                                    is that we can save our favourite news.
                                </blockqoute>
                                <h3>Siddharth Rai</h3>
                            </div>
                        </div>

                        <div class="col-md-4 text-center">
                            <div class="profile">
                                <img src="mansi.jpeg" class="user">
                                <blockqoute>
                                    Inclick News is best news portal in India as it covers all exclusive current headlines, Latest news, breaking news on business, sports, health and lots of categories you can find there.You just have to select the category of that particular news and huraah!
                                    You can enjoy your news.The application also sends you notifications for sport updates and some important headlines also.
                                </blockqoute>
                                <h3>Mansi Verma</h3>
                            </div>
                        </div>


                        <div class="col-md-4 text-center">
                            <div class="profile">
                                <img src="tanya.jpeg" class="user">
                                <blockqoute>
                                    Hey guys.I stopped reading newspaper nowadays instead I am preferring to read it online on Inclick news.Firstly,I would like to mention that it has various categories such as Technology News,Headlines and much more.So it is very easy to go through and
                                    read the news without any hassle.
                                </blockqoute>
                                <h3>Tanya Goyal</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Explore an array of news categories, all in one place.</h2>
                    <p class="lead"> As you can see,it has various categories such as Headlines, Sports, Entertainment and many more.So it is very easy to read the news.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="hehe2.png">


                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Browse through the section of your choice and discover trending news topics.</h2>
                    <p class="lead">The layout of content on the home page is focused on providing categorized links to specific content. An image is included for the lead story.</p>
                </div>
                <div class="col-md-5">
                    <img src="hehe1.png">

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
    </main>
    <?php 
include('footer_structure.php')?>