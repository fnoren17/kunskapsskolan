@extends("layouts/master")

@section("pageheader")
   

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Smartlog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/main.css">



@endsection

@section("body")
    <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area-2">

        <div class="container">
            <div class="row space-100">
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Smartlog</h2>
                        <p>We set out to help Kunskapskolan with increasing usage of study strategies and improve user experience while using Loggboken.</p>
                        <div class="header-button">
                            <a href="#" class="btn btn-border-filled">Read our report</a>
                            <a href="/prototype" class="btn btn-border page-scroll">Try the prototype</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="intro-img">
                        <img class= "img-container"src="img/head.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- Header Section End -->

    <!-- features Section Start -->
    <div id="app-features" class="section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">features</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="content-left text-right">
                        <div class="box-item left">
                <span class="icon">
                  <i class="lni-check-mark-circle"></i>
                </span>
                            <div class="text">
                                <h4>User Experience</h4>
                                <p>Our solution improves user experience while using Kunskapsskolans platform.</p>
                            </div>
                        </div>
                        <div class="box-item left">
                <span class="icon">
                  <i class="lni-check-mark-circle"></i>
                </span>
                            <div class="text">
                                <h4>Intelligence</h4>
                                <p>Our clever product collects crucial data that can help improve learning among students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="show-box">
                        <img src="img/data3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="content-right text-left">
                        <div class="box-item right">
                <span class="icon">
                  <i class="lni-check-mark-circle"></i>
                </span>
                            <div class="text">
                                <h4>Opportunities</h4>
                                <p>The data can be used by professionals and teachers to make targeted efforts to improve their educational quality.</p>
                            </div>
                        </div>
                        <div class="box-item right">
                <span class="icon">
                  <i class="lni-check-mark-circle"></i>
                </span>
                            <div class="text">
                                <h4>Analyzing</h4>
                                <p>The data can be anlyzed in order to imporove the every student's experience of learning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features Section End -->

    <!-- Features Section Start -->
    <div id="features-two" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                        <img class="img-fluid" src="img/loggbok.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
                        <div>
                            <p class="btn btn-subtitle">Current Look</p>
                            <h3>This is how loggboken looks today</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Section End -->

    <!-- Awesome Screens Section Start -->
    <section id="screenshots" class="screens-shot section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">Current Problems</p>
            </div>
            <div class="row">
                <p class="problem">Students are supposed to select strategies and evaluate them as they go about their education and learning at school. Strategies are not selected or evaluated by students today much due to how Loggboken is designed.<br /><br>
                    No data and feedback can be collected and taken in by the team of pedagogical experts that develop these strategies for the students.<br /><br>
                    Loggboken could be a huge tool that can help teachers and improve educational quality. But there is still improvements that needs to be made.</p>
            </div>
        </div>
    </section>
    <!-- Awesome Screens Section End -->
    <section id="design-process" class="section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">Design Process</p>
            </div>
            <div class="row">
                <img src="img/designprocess.png" alt="">
            </div>
        </div>
    </section>

    <section id="design-process" class="screens-shot section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">User studies</p>
            </div>
            <div class="row">
                <p class="problem">
                    We had to understand the actual users of Loggboken. For that we all went and participated at one of Kunskapsskolans schools. <br><br>
                    We found that the students did not use the strategy tool at all. The ones who did use strategies in their studies prefered to keep them on paper rather than on the platform or did not formally use them at all. <br><br>
                    We realized that the biggest issue with the current application was that <b>the current design was not intuitive and simple to use.</b>
                </p>
            </div>
        </div>
    </section>
    <section id="progress">
        <div id="features-two" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid" src="img/focus.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
                            <div>
                                <h3>Focus Groups</h3>
                                <p>We performed focus group interviews at Kunskapsskolan Nacka where the students could comment and discuss their thoughts with each other and with us under a relaxed setting.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.9s">
                            <div>
                                <h3>Intuituve</h3>
                                <p>A simple design solution was a key point taken away from the focus group interviews. It was clear that objects and functionalities would need to be rearranged and simplified for more clarity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img-thumb wow fadeInLeft" data-wow-delay="1.2s">
                            <img class="img-fluid" src="img/intuitive.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid" src="img/thinking.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
                            <div>
                                <h3>Evaluable</h3>
                                <p>As one of the main problems of the current design is that no feedback or evaluation of strategies are sent in by students we needed to see what students had to say about this <b>before</b> a prototype was created.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="progress" class="screens-shot section">
        <div id="features-two" class="section">
            <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">Machine Learning</p>
            </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid" src="img/segm.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
                            <div>
                                <h3>Collecting data for decision making</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="progress" class="section">
        <div id="features-two" class="section">
            <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">To Summarize</p>
                <h2>Three Pillars</h2>
                <p>By asking what the students felt we improve experience for the end users. By listening to what central management needs, we collect data for future decision-making.</p>
            </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <h3>Motivate Students</h3>
                        <p>Our solution motivates students to pick a strategy because they are recommended by peers and teachers.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <h3>Targeted Strategies</h3>
                        <p>The strategy suggestions are based on teacher input and feedback from students for each specific subject at each specific step</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <h3>Collect Insights</h3>
                        <p>Analyzing different user behavior and characteristics such as, what school, what grade and so on could tell us if a certain strategy is prefered in one school over another and other relationships etc. This information is crucial to any business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="design-process" class="screens-shot section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle">Model Selection</p>
                <h3>Recommendation System</h3>
                
            </div>
            
            <div class="row">
                
                <p class="problem">
                We created a tag-based recommendation system as foundation to suggest strategies for different users. Based on previous feedback from teachers and peers the smart algorithm suggests a selection of strategies for a specific subject and step to the students. With the goal of improving usage of the strategy selection field while also increasing the quality of Loggboken in general by turning it into a potentially powerful data collection tool.
                </p>
            </div>
        </div>
    </section>

    <!-- Team section Start -->
    <section id="team" class="section">
        <div class="container">
            <div class="section-header">
                <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Team</p>
                <h2 class="section-title">Our Team</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="#">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-thumb">
                            <img src="img/team/robban.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Robert Bojs</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="mailto:frcarls@kth.se">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-thumb">
                            <img src="img/team/carls.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Fredrik Carls</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="#">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-thumb">
                            <img src="img/team/benny.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Benny Feng</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
            <a href="mailto:ricjohan@kth.se">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-thumb">
                            <img src="img/team/rickard.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Rickard Johansson</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="mailto:erlunds@kth.se">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb">
                            <img src="img/team/lurre.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Erik Lundsten</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <a href="mailto:madosh@kth.se">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb">
                            <img src="img/team/farre.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Farzana Madoosh</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center">
            <a href="mailto:felixnor@kth.se">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb">
                            <img src="img/team/norre.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Felix Norén</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="mailto:rumman@kth.se">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb">
                            <img src="img/team/phille.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Philip Rumman</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <a href="mailto:eriktors@kth.se">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-thumb">
                            <img src="img/team/torsten.jpg" alt="">
                        </div>
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Erik Thorstensson</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Team section End -->





    <!-- download Section Start -->


    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
        
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-info float-left">
                                <p style="color:white;">This project was done during the course DH2655 Cooperative IT Design/DH2465 Computer Science, Bussiness and Management at KTH during autumn term 2018. Thanks to Björn Thuresson and Henrik Blomgren for supervision.</p>
                            </div>
 
                        </div>
                    </div>
                </div>
           
            <!-- Copyright Start  -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-info float-left">
                                <p>&copy; 2020 - Designed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div>
                            <div class="float-right">
                                <ul class="footer-social">
                                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->
        </section>
        <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

    </body>


@endsection