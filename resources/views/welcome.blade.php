<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    
    <title>VIZERK - HTML5 Website Template</title>
    
	<!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="css/animation.css">
    <!-- Main Stylesheet CSS -->

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body data-spy="scroll" data-offset="25">
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
       
     <!--/HEADER SECTION -->
    <header class="header">
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                    </div><!-- end navbar-header -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a data-scroll href="index-one-video-with-slider-content.html#home" class="int-collapse-menu">Home</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#features" class="int-collapse-menu">Features</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#about" class="int-collapse-menu">About</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#services" class="int-collapse-menu">Services</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#pricing" class="int-collapse-menu">Pricing</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#team" class="int-collapse-menu">Team</a></li>
                        <li><a data-scroll href="index-one-video-with-slider-content.html#works" class="int-collapse-menu">Works</a></li>
						<li><a data-scroll href="index-one-video-with-slider-content.html#contact" class="int-collapse-menu">Contact</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header><!-- end header -->
	
	

    
    <!--/SLIDER SECTION -->

     <section id="home" class="videobg clearfix text-center">
            <a id="volume" onclick="$('#bgndVideo').toggleVolume()"><i class="fa fa-volume-down"></i></a>
            <a id="bgndVideo" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=shKKtFVNQ6I',containment:'body',autoPlay:true, mute:false, startAt:33, opacity:1}">youtube</a>
        <div class="videooverlay">
            <div class="container">
                <div id="owl-intro" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="sliderbigtitle"><hr class="topline">Experience the <br> Clean and unique <br> One page Design<hr class="bottomline"></div>
                        <div class="slidersmalltitle"> EFFECTIVE BUSINESS SOLUTIONS <br> THAT MAKES YOUR BUSINESS FLY HIGH </div>
                    </div>
                    <div class="item">
                      <div class="sliderbigtitle"><hr class="topline">World Experience <br> Clean Design<hr class="bottomline"></div>
                    </div>
                </div>
                <span class="intro-icon"><a data-scroll-reveal="enter from the bottom after 0.3s" href="#features"><i class="fa fa-angle-down"></i></a></span>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!--/ Video Parallex  End -->   
    

    <!--/ FEATURE SECITON -->  
    <section id="features" class="feature-wrapper">
        <div class="container">
            <div data-scroll-reveal="enter from the bottom after 0.4s" class="feature-img">
                <img class="img-responsive" src="demos/home_01.png" alt=""> 
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="borderright">
                        <div data-scroll-reveal="enter from the left after 0.5s" class="features-widget text-right">
                            <img class="alignright" src="images/feature1.png" alt="">
                            <h3>ADVENTUROUS</h3>
                            <p>we love to do tasks that involve new ideas or methods</p>
                        </div>
                        <div data-scroll-reveal="enter from the left after 0.6s" class="features-widget text-right">
                            <img class="alignright" src="images/feature3.png" alt="">
                            <h3>MINDFULNESS</h3>
                            <p>We always pay close attention to our responsibilities</p>
                        </div>
                    </div><!--/end border right -->  
                 </div><!--/end column -->  
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="borderleft">
                        <div data-scroll-reveal="enter from the right after 0.5s" class="features-widget">
                            <img class="alignleft" src="images/feature2.png" alt="">
                            <h3>RESPONSIVE</h3>
                            <p>Making designs that & layouts that matters</p>
                        </div>
                    
                        <div data-scroll-reveal="enter from the right after 0.6s" class="features-widget">
                            <img class="alignleft" src="images/feature4.png" alt="">
                            <h3>GENUINE</h3>
                            <p>We are true to our clients and projects</p>
                        </div>
                    </div><!--/end border left -->  
                </div><!--/end column -->  
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end features -->
        
    
    <!--/ ABOUT SECTION -->   
    <section id="about" class="about-wrapper">
        <div class="container">
                    <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
                        <h2>About</h2>
                        <p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>
                        <hr>
                    </div><!-- end title -->
        
            <div class="row text-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div data-scroll-reveal="enter from the bottom after 0.4s" class="about-box">
                            <div class="about-border"> <img class="aligncenter" src="images/about1.png" alt=""></div>
                            <h3>RESPONSIVE DESIGN</h3>
                            <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                        </div>
                    </div><!-- end column -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
                                <div class="about-border"> <img class="aligncenter" src="images/about2.png" alt=""></div>
                                <h3>EXCELLENT FEATURES</h3>
                                <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                        </div>
                    </div><!-- end column -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
                                <div class="about-border"> <img class="aligncenter" src="images/about3.png" alt=""></div>
                                <h3>SIMPLE & CLEAN</h3>
                                <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                        </div>
                    </div><!-- end column -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
                                <div class="about-border"> <img class="aligncenter" src="images/about4.png" alt=""></div>
                                <h3>PARALLAX EFFECTS</h3>
                                <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                        </div>
                    </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    
            <div class="clearfix">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div data-scroll-reveal="enter from the left after 0.8s" class="how-box-head makebg1 text-right">
                        <h2>How We Do It</h2>
                        <h3>Phase#1</h3>
                    </div>
                </div>
            
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div data-scroll-reveal="enter from the right after 0.5s" class="how-box text-left">
                        <div class="how-border"> <img src="images/aboutbox1.png" alt=""></div>
                        <h3>Responsive Layout</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            </div><!-- end clearfix -->
            
            <div class="clearfix">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div data-scroll-reveal="enter from the right after 0.5s" class="how-box text-right">
                         <div class="how-border"> <img src="images/aboutbox2.png" alt=""></div>
                        <h3>Responsive Layout</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div data-scroll-reveal="enter from the left after 0.5s" class="how-box-head makebg2 text-left">
                        <h2>How We Do It</h2>
                        <h3>Phase#2</h3>
                    </div>
                </div>
            </div><!-- end clearfix -->
    </section><!-- End About Section -->
        
    
    <!--/ COUNT SECTION -->       
    <section id="count_parallax" class="parallax" style="background-image: url('demos/parallax_01.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="overlay">
            <div class="container">
                <div class="stat">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="milestone-counter">
                            <img src="images/count1.png" alt="" /><span class="stat-count highlight">  2562</span>
                            <div class="milestone-details">PROJECTS DELIVERD</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="milestone-counter">
                            <img src="images/count2.png" alt="" /><span class="stat-count highlight">  250+ </span>
                            <div class="milestone-details">AWARDS WON</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="milestone-counter">
                            <img src="images/count3.png" alt="" /><span class="stat-count highlight">  4832 </span>
                            <div class="milestone-details">GLASSES OF COCKTAIL</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="milestone-counter">
                            <img src="images/count4.png" alt="" /><span class="stat-count highlight">  860</span>
                            <div class="milestone-details">HAPPY CLIENTS WORLDWIDE</div>
                        </div>
                    </div>
                </div><!-- end stat -->
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section>  
       
    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
            <div class="title text-center">
                <h2>Services we offer</h2>
                <p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>
                <hr>
            </div><!-- end title -->
        
            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 0.3s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service1.png" alt=""></div>
                        <h3>Design & Development</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 0.6s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service5.png" alt=""></div>
                        <h3>VIDEO PRODUCTION</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 0.9s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service6.png" alt=""></div>
                        <h3>MOBILE APPS</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            </div> <!-- end row 1 -->
        
            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 1.2s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service2.png" alt=""></div>
                        <h3>MARKETING</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 1.5s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service4.png" alt=""></div>
                        <h3>24/7 SUPPORT</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 1.8s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><img src="images/service3.png" alt=""></div>
                        <h3>SOCIAL MEDIA</h3>
                        <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    </div>
                </div>
            </div> <!-- end row 2 -->
                   
    <!-- TESTIMONIAL SECTION -->              
            <div class="testimonial text-center">
                <h2 class="three" data-scroll-reveal="enter from the bottom after 0.2s">And What They Say</h2>
            </div><!-- end title -->
            
            <div id="testimonial" class="owl-carousel owl-theme text-center">
                <div class="testimonial"  data-scroll-reveal="enter from the bottom after 0.3s">
                    <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> Filiz Smith </h1>
                </div>
                <div class="testimonial">
                    <p>A dsfadsfads In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> Filiz Smith </h1>
                </div>
                <div class="testimonial">
                    <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> Filiz Smith </h1>
                </div>
            </div><!-- end #testimonial -->
            
            <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="btn next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div><!-- end customnav -->
       </div> <!-- end container -->
    </section><!-- Service and Testimonial End --> 
    
    
    <!--/ SKILL SECTION -->     
    <section id="skills_parallax" class="parallax" style="background-image: url('demos/parallax_02.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="overlay">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <span class="chart" data-bar-color="#fff" data-percent="50"><span class="percent"></span></span>
                        <h3>Graphic Design</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <span class="chart" data-bar-color="#fff" data-percent="70"><span class="percent"></span></span>
                        <h3>Web Development</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <span class="chart" data-bar-color="#fff" data-percent="99"><span class="percent"></span></span>
                        <h3>Identity</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <span class="chart" data-bar-color="#fff" data-percent="100"><span class="percent"></span></span>
                        <h3>CUSTOMER SUPPORT</h3>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!-- End  Skill parallax -->
     
        
    <!--PRICING SECTION  -->    
    <section id="pricing" class="dark-wrapper">
        <div class="container">
                        <div class="title text-center">
                            <h2>Pricing Structure</h2>
                        </div><!-- end title -->
            <div class="row text-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                        <div class="pricing-box">
                            <span class="hideme"><i class="fa fa-star"></i><i class="fa fa-star bigstar"></i><i class="fa fa-star"></i></span>
                            <div class="title"><h3>Standard</h3></div>
                            <div class="price">
                                <p class="price-value"><sub>$</sub> 99</p>
                                <p class="price-month">Per month</p>
                            </div> 
                            <ul class="pricing clearfix">
                                <li>10 Pages Website</li>
                                <li>1 Domain</li>
                                <li>2 Sub Domains</li>
                                <li>3 MySQL DBs</li>
                                <li>2 Emails</li>
                            </ul>
                            <a class="jtbtn" href="#">order now</a>
                        </div><!-- Pricing Box -->
                    </div><!-- Column 1 -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                        <div class="pricing-box">
                            <span class="hideme"><i class="fa fa-star"></i><i class="fa fa-star bigstar"></i><i class="fa fa-star"></i></span>
                            <div class="title"><h3>Premium</h3></div>
                            <div class="price">
                                <p class="price-value"><sub>$</sub>149</p>
                                <p class="price-month">Per month</p>
                            </div> 
                            <ul class="pricing clearfix">
                                <li>150 Mb Storage</li>
                                <li>1 Domain</li>
                                <li>2 Sub Domains</li>
                                <li>3 MySQL DBs</li>
                                <li>2 Emails</li>
                            </ul>
                            <a class="jtbtn" href="#">order now</a>
                        </div><!-- Pricing Box -->
                    </div><!-- Column 2 -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                        <div class="pricing-box">
                            <span class="hideme"><i class="fa fa-star"></i><i class="fa fa-star bigstar"></i><i class="fa fa-star"></i></span>
                            <div class="title"><h3>delux</h3></div>
                            <div class="price">
                                <p class="price-value"><sub>$</sub>199</p>
                                <p class="price-month">Per month</p>
                            </div> 
                            <ul class="pricing clearfix">
                                <li>150 Mb Storage</li>
                                <li>1 Domain</li>
                                <li>2 Sub Domains</li>
                                <li>3 MySQL DBs</li>
                                <li>2 Emails</li>
                            </ul>
                            <a class="jtbtn" href="#">order now</a>
                        </div><!-- Pricing Box -->
                    </div><!-- Column 3 -->
            
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                        <div class="pricing-box">
                            <span class="hideme"><i class="fa fa-star"></i><i class="fa fa-star bigstar"></i><i class="fa fa-star"></i></span>
                            <div class="title"><h3>corporate</h3></div>
                             <div class="price">
                                <p class="price-value"><sub>$</sub>299</p>
                                <p class="price-month">Per month</p>
                            </div> 
                                <ul class="pricing clearfix">
                                    <li>150 Mb Storage</li>
                                    <li>1 Domain</li>
                                    <li>2 Sub Domains</li>
                                    <li>3 MySQL DBs</li>
                                    <li>2 Emails</li>
                                </ul>
                            <a class="jtbtn" href="#">order now</a>
                        </div><!-- Pricing Box -->
                    </div><!-- Column 4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- End Pricing -->
     
    <!-- TEAM SECTION -->      
    <section id="team" class="team-wrapper">
        <div class="container">
                    <div class="title text-center">
                        <h2>Meet Our Team</h2>
                        <p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>
                        <hr>
                    </div><!-- end title -->
        
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                                <img class="aligncenter" src="demos/team1.jpg" alt="">
                                <h3>ANDREA SMITH</h3>
                                <p>Developer</p>
                            <div class="clearfix"></div>
                            <ul class="social clearfix">
                                <li><a class="facebook" href="#"  target="_blank"></a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="google" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                            </ul>
                    </div> <!-- end teambox -->
                </div> <!-- end column 1 -->
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                            <img class="aligncenter" src="demos/team2.jpg" alt="">
                            <h3>Dave SMITH</h3>
                            <p>Designer</p>
                        <div class="clearfix"></div>
                        <ul class="social clearfix">
                                <li><a class="facebook" href="#"  target="_blank"></a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="google" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                            </ul>
                    </div> <!-- end teambox -->
                </div> <!-- end column 2 -->
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                            <img class="aligncenter" src="demos/team3.jpg" alt="">
                            <h3>SARA SMITH</h3>
                            <p>Developer</p>
                        <div class="clearfix"></div>
                       <ul class="social clearfix">
                                <li><a class="facebook" href="#" target="_blank"></a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="google" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                            </ul>
                    </div> <!-- end teambox -->
                </div> <!-- end column 3 -->
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                            <img class="aligncenter" src="demos/team4.jpg" alt="">
                            <h3>William SMITH</h3>
                            <p>Marketing</p>
                        <div class="clearfix"></div>
                        <ul class="social clearfix">
                               <li><a class="facebook" href="#" target="_blank"></a></li>
                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                <li><a class="google" href="#" target="_blank"></a></li>
                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                     </ul>
                    </div> <!-- end teambox -->
                </div> <!-- end column 4 -->
				
				 
			
                <div class="title">
                    <h2>Got Some Great IDEAS to Start With ?</h2>
                    <p>Let's get together and start building those ideas...</p>
                    <a class="jtbtn" href="#">Contact us </a>
                </div><!-- end title -->
			
            </div><!-- end row 1 -->
        
           
        </div><!-- end container -->
    </section><!-- end team -->
    
    
    <!--/ PORTFOLIO SECTION -->     
    <section id="works" class="dark-wrapper">
        <div class="container">
            <div class="title text-center">
                <h2>Our Best Work</h2>
                <p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>
                <hr>
            </div><!-- end title -->
                 
             <div class="navigato_filter clearfix">
               <nav class="portfolio-filter" data-scroll-reveal="enter from the top after 0.4s">
                    <ul>
                        <li class="active"><a href="#" data-filter="*"><span></span>All Projects</a></li>
                        <li><a href="#" data-filter=".photography">Mobile </a></li>
                        <li><a href="#" data-filter=".webdesign">Web Design</a></li>
                        <li><a href="#" data-filter=".print">Print</a></li>
                        <li><a href="#" data-filter=".videos">Videos</a></li>
                    </ul>
                </nav>
             </div> <!-- end work nav -->
                 
				<div class="norow">
					<div class="masonry_wrapper" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="item entry item-h2 photography print">
                        	<img src="demos/work_01.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_01.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>
                        
                        <div class="item entry item-h2 webdesign print">
                        	<img src="demos/work_02.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_02.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>
                        
                        <div class="item entry item-h2 videos print">
                        	<img src="demos/work_03.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_03.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>
                        
                        <div class="item entry item-h2 photography">
                        	<img src="demos/work_04.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_04.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>
                        
                        <div class="item entry item-h2 videos">
                        	<img src="demos/work_05.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_05.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>

                        <div class="item entry item-h2 webdesign">
                        	<img src="demos/work_06.jpg" alt="" class="img-responsive">
                            <div class="hovereffect">
                                <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="demos/work_06.jpg"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                <div class="buttons">
                                    <h4>EUROPEAN WINTER</h4>
                                    <h5>WEB DESIGN, LOGO, PRINT, VIDEO</h5>
                                </div><!-- end buttons -->
                            </div><!-- end hovereffect -->
                        </div>
                                              
				</div><!-- end portfolio-masonry -->
			</div><!-- end row -->      
        </div> <!-- end Container-->      
    </section><!-- end work -->
    
    <!--/ FEATURE SECTION -->  
    <section id="featured_parallax" class="parallax" style="background-image: url('demos/parallax_01.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="20">
        <div class="overlay">
            <div class="container">
                <div class="featured-box" data-effect="slide-bottom">
                    <h3>VIZERK IS A FEATURED RICH CLEAN <br> & MODERN DESIGN</h3>
                    <img class="img-respnsive" src="images/banner.png" alt="">
                </div>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!--/ Featured Parallex -->  
      
    <!--/ CONTACT AND MAP SECTION -->  
   <section id="contact" class="contact-wrapper">
        <div class="title text-center">
                <h2>Contact Us</h2>
                <p>ETIAM DIGNISSIM LEO VESTIBULUM VOLUTPAT MORB</p>
                <hr>
        </div><!-- end title -->
        <div class="contact_tab text-center">
                    <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Contact Details</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Location Maps</a></li>
                    </ul>
           <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                        <p>Eget pede fringilla rutrum. Fusce eget tortor vel magna iaculis convallis. Mauris molestie magna. Mauris  Integer eget arcu. asiscing eleifend dui. Nullam lectus neque, 					                       blandit quis, mattis quis, varius eros. Proin porta pellentesque ante.Fusce In sagittis eros aliquam quis purus nunc ut turpis sed </p>
                        	<div id="message"></div>
                            <form id="contactform" action="contact.php" name="contactform" method="post" data-scroll-reveal="enter from the bottom after 0.4s">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-contact btn-primary">SUBMIT</button>
                                </div>
                            </form> <!-- End Form -->
                        </div> <!-- End Container -->
                    </div><!-- End Tab Pane -->
            
                            <!-- /Google Map -->     
                  <div class="tab-pane fade" id="tab2">
                   <div id="map"></div>
                  </div>   
            </div><!-- /end my tab content -->  
        </div><!-- /contact_tab -->  
    
        <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <img class="aligncenter" src="images/mail.png" alt="Email">
                        <h2>HELL@VIZERK.COM</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <img class="aligncenter" src="images/location.png" alt="Address">
                        <h2>ENVATO PTY LTD, MELBOURNE, AUSTRALIA </h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                        <img class="aligncenter" src="images/call.png" alt="Phone-no">
                        <h2>+8 VIZERK 6666 </h2>
                    </div>
                </div>
            </div> <!-- end title -->
        </div><!-- end container -->
        
    </section><!--/ Contact End -->
        
   <!--/ FOOTER SECTION-->  
    <section id="footer" class="footer-wrapper">
        <div class="container">
            <div class="title text-center"  data-scroll-reveal="enter from the bottom after 0.5s">
               <div class="logo-border"> <img src="images/logo.png" alt=""/></div>
                <div class="clearfix"></div>
                <ul class="social clearfix">
                    <li><a class="facebook" href="#" target="_blank"></a></li>
                    <li><a class="twitter" href="#" target="_blank"></a></li>
                    <li><a class="google" href="#" target="_blank"></a></li>
                    <li><a class="pinterest" href="#" target="_blank"></a></li>
                    <li><a class="dribbble" href="#" target="_blank"></a></li>
                 </ul>
                <p> © VIZERK MULTIPURPOSE ONE-PAGE DESIGN 
				<br>Preferred Hosting Partner - <a href="https://misshosting.com/hosting/" target="_blank">MissHosting.com,</a> Web Hosting at 1.00€ per month!</p>
                 <a data-scroll-reveal="enter from the bottom after 0.2s" href="index-one-video-with-slider-content.html#home"><i class="fa fa-angle-up"></i></a>
            </div>    <!-- end title -->
        </div>  <!-- end container -->
    </section><!--/ Footer  End --> 
     
    <!-- SECTION CLOSED -->
     
  
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.jigowatt.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/jquery.unveilEffects.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
	<script>
		(function ($) {
			var $container = $('.masonry_wrapper'),
				colWidth = function () {
					var w = $container.width(), 
						columnNum = 1,
						columnWidth = 0;
					if (w > 1200) {
						columnNum  = 3;
					} else if (w > 900) {
						columnNum  = 3;
					} else if (w > 600) {
						columnNum  = 2;
					} else if (w > 300) {
						columnNum  = 1;
					}
					columnWidth = Math.floor(w/columnNum);
					$container.find('.item').each(function() {
						var $item = $(this),
							multiplier_w = $item.attr('class').match(/item-w(\d)/),
							multiplier_h = $item.attr('class').match(/item-h(\d)/),
							width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
							height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
						$item.css({
							width: width,
							height: height
						});
					});
					return columnWidth;
				}
							
				function refreshWaypoints() {
					setTimeout(function() {
					}, 1000);   
				}
							
				$('nav.portfolio-filter ul li a').on('click', function() {
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector }, refreshWaypoints());
					$('nav.portfolio-filter ul li a').removeClass('active');
					$(this).addClass('active');
					return false;
				});
					
				function setPortfolio() { 
					setColumns();
					$container.isotope('reLayout');
				}
		
				isotope = function () {
					$container.isotope({
						resizable: true,
						itemSelector: '.item',
						masonry: {
							columnWidth: colWidth(),
							gutterWidth: 0
						}
					});
				};
			isotope();
			$(window).smartresize(isotope);
		}(jQuery));
	</script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	
	<script type="text/javascript">
			var revapi;
			jQuery(document).ready(function() {
			revapi = jQuery('.tp-banner-video').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				maxFullScreenHeight:"320",
				videoJsPath:"rs-plugin/videojs/",
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: ""
			 });
		   });	//ready
		</script>
    
   <!-- Animation Scripts-->
    <script src="js/scrollReveal.js"></script>
    <script>
            (function($) {
            "use strict"
                window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>
    
    <!-- Portofolio Pretty photo JS -->       
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            jQuery('a[data-gal]').each(function() {
                jQuery(this).attr('rel', jQuery(this).data('gal'));
            });  	
                jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
        })(jQuery);
    </script>
          
    <!-- Video Player o-->
    <script src="js/jquery.mb.YTPlayer.js"></script>    
    <script type="text/javascript">
      (function($) {
        "use strict"
          $(".player").mb_YTPlayer();
        })(jQuery);	
    </script>
    
</body>
</html>

