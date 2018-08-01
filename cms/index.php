<?php 
//Tải file kết nối CSDL
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <meta name="keywords" content="NgThuc's Website, ngthuc.com, Nguyên Thức, ngthuc, Lê Nguyên Thức, lê nguyên thức, nguyên thức, Nguyên Thức là ai?, nguyên thức là ai?, lê nguyên thức là ai?, Lê Nguyên Thức là ai?">
    <meta name="description" content="Ngthuc's Resume and Portfolio">
    
	<meta name="author" content="Minh Nghia" />
    <link rel="author" href="https://plus.google.com/u/0/103766222043968890044">
    <link rel="publisher" href="https://plus.google.com/u/0/103766222043968890044">

    <meta property="og:site_name" content="Nguyen Thuc">
    <meta property="og:type" content="website">
    <meta property="og:title" content="NgThuc's Website">
    <meta property="og:description" content="NgThuc's Resume and Portfolio">
    <meta property="og:url" content="http://ngthuc.com/">
    <link rel="icon shortcut" href="/favicon.ico">

    <title>Nguyên Thức</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./public/resources/vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./public/resources/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/resources/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="public/resources/vendor/sinister/sinister.css">

    <link rel="stylesheet" type="text/css" href="./public/resources/css/style.min.css">
	
	<!--Google Analyst-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-84266655-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!--Google Analyst End-->
</head>
<body>

<section id="homepage">
    <canvas id="homepage-canvas"></canvas>
    <div class="home-overlay"></div>
    <div class="homapage-content">
        <nav class="navbar navbar-default" role="navigation" id="home-menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" id="menu-toggle">
                        <span class="fa fa-bars"></span>
                    </button>
                    <h1><a class="navbar-brand" href="#">Nguyen Thuc</a></h1>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="current"><a href="index.php">Home</a></li>
                        
                        <li><a href="#intro">About</a></li>
                        <li><a href="#my-work">My work</a></li>
                        <li><a href="#experience">Resume</a></li>
                        <!--li><a href="#last-work">Portfolio</a></li-->
			            <li><a href="#contact">Contact</a></li>
			            <li><a href="https://blog.ngthuc.com">Blog</a></li>
                        <li><a href="https://tkb.ngthuc.com">Schedule</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="home-user text-center">
            <h2>Nguyen Thuc</h2>
            <p>
                <a href="#">#Web Developer</a>
                <!--a href="#">#Web Designer</a-->
            </p>
        </div>
    </div>
</section>
<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 hidden-xs">

            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="intro-content wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                    <h4>Hi, I'm Nguyen Thuc, a web developer in Can Tho City.</h4>
                    <p>Now, I'm a student at CTU, and a freedom developer. I want to more for knowlegde, food and travel.</p>
                    <p>If you have love for something, you will do it. And I'm trying to do that with what I love.</p>
                    <!--a href="#" class="btn btn-danger btn-hire-me">Hire me !</a-->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="my-work">
    <div class="container">
        <div class="my-work-heading text-center">
            <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">My working process</h3>
            <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">This is the way I build my application...</p>
        </div>
        <div class="my-work-body">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="work-item wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.1s">
                        <div class="wi-content text-center">
                            <i class="material-icons">aspect_ratio</i>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="work-item wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.0s">
                        <div class="wi-content text-center">
                            <i class="material-icons">mode_edit</i>
                            <p>Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="work-item wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
                        <div class="wi-content text-center">
                            <i class="material-icons">done_all</i>
                            <p>Testing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="work-item wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="wi-content text-center">
                            <i class="material-icons">launch</i>
                            <p>Launch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="experience">
                    <div class="ex-block wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                        <div class="ex-block-heading">
                            <h3>Work Experience</h3>
                        </div>
                        <div class="ex-block-body">
                            <!--<div class="ex-block-item">-->
                            <!--    <p class="heading">daydanthanhtuan.com</p>-->
                            <!--    <p class="time">Aug 2016 - Sep 2016</p>-->
                            <!--    <p class="desc">-->
                            <!--        Project Manager and Fullstack Developer-->
                            <!--    </p>-->
                            <!--</div>-->
                            <!--<div class="ex-block-item">-->
                            <!--    <p class="heading">tuongminhanh.com.vn</p>-->
                            <!--    <p class="time">Mar 2017 - Oct 2017</p>-->
                            <!--    <p class="desc">-->
                            <!--        Employee Deployment and Maintenance-->
                            <!--    </p>-->
                            <!--</div>-->
                            <div class="ex-block-item">
                                <p class="heading">Can Tho University Student Sciences Research</p>
                                <p class="time">Jun 2017 - Dec 2017</p>
                                <p class="desc">
                                    Project Manager and Web/API module development. Has experience for RFID in fact 
                                </p>
                            </div>
                            <div class="ex-block-item">
                                <p class="heading">vienquyhoach.cantho.gov.vn</p>
                                <p class="time">Dec 2017 - Mar 2018</p>
                                <p class="desc">
                                    Project Manager and Deployment
                                </p>
                            </div>
                            <div class="ex-block-item">
                                <p class="heading">Private My Project</p>
                                <p class="time">Jan 2016 - present</p>
                                <p class="desc">
                                    Using CodeIgniter - PHP MVC - AJAX - JSON - RestAPI - MySQLi - NodeJS - Express - Laravel - VueJS
                                </p>
                            </div>
                            <!--div class="ex-block-item">
                                <p class="heading">bits.vn</p>
                                <p class="time">Mar 2015 - May 2015</p>
                                <p class="desc">
                                    PHP Developer. Convert PSDs to HTML. Build website using CodeIgniter Framework.
                                </p>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="education">
                    <div class="ex-block wow bounceInDown" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="ex-block-heading">
                            <h3>Education</h3>
                        </div>
                        <div class="ex-block-body">
                            <div class="ex-block-item">
                                <p class="heading">Can Tho University</p>
                                <p class="time">Sep 2014 - Dec 2018</p>
                                <p class="desc">
                                    Learn Infomation Technology (Software Engineering)
                                </p>
                            </div>
                            <div class="ex-block-item">
                                <p class="heading">Cantho University Software Center</p>
                                <p class="time">Dec 2017 - Mar 2018</p>
                                <p class="desc">
                                    Learn Advanced Web Development (Laravel & AngularJS module)
                                </p>
                            </div>
                            <div class="ex-block-item">
                                <p class="heading">Self learning</p>
                                <p class="time">Aug 2015 - present</p>
                                <p class="desc">
                                    Learn Web
                                </p>
                            </div>
                            <!--<div class="ex-block-item">-->
                            <!--    <p class="heading">Freetuts.net</p>-->
                            <!--    <p class="time">Jan 2016 - present</p>-->
                            <!--    <p class="desc">-->
                            <!--        Learn PHP - JS - CodeIgniter Framework-->
                            <!--    </p>-->
                            <!--</div>-->
                            <!--<div class="ex-block-item">-->
                            <!--    <p class="heading">Khoapham.vn</p>-->
                            <!--    <p class="time">Jan 2017 - Jan 2018</p>-->
                            <!--    <p class="desc">-->
                            <!--        Learn Basic NodeJS - Express Framework-->
                            <!--    </p>-->
                            <!--</div>-->
                            <!--div class="ex-block-item">
                                <p class="heading">QHonline.edu.vn</p>
                                <p class="time">Jun 2014 - Dec 2014</p>
                                <p class="desc">
                                    Learn PHP and CodeIgniter Framework at qhonline.edu.vn
                                </p>
                            </div-->
                        </div>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section id="last-work">
    <div class="container">
        <div class="lw-heading text-center">
            <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s"> My Lastest Works</h3>
            <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Collection of website i was built</p>
        </div>
        <div class="lw-body">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="0.6s" >
                        <div class="ImageWrapper">
                            <a href="http://daydanthanhtuan.com/" target="_blank">
                                <img class="img-responsive" src="public/resources/images/lastwork/daydanthanhtuan.png"  alt="">
                                <div class="PStyleHe"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="0.8s" >
                        <div class="ImageWrapper">
                            <a href="http://tuongminhanh.com.vn/" target="_blank">
                                <img class="img-responsive" src="public/resources/images/lastwork/tuongminhanh.png"  alt="">
                                <div class="PStyleHe"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="0.9s" >
                        <div class="ImageWrapper">
                            <a href="#" target="_blank">
                                <img class="img-responsive" src="public/resources/images/lastwork/nckh2017.png"  alt="">
                                <div class="PStyleHe"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="0.7s" >
                        <div class="ImageWrapper">
                            <a href="https://www.vienquyhoach.cantho.gov.vn/" target="_blank">
                                <img class="img-responsive" src="public/resources/images/lastwork/vienquyhoach.png"  alt="">
                                <div class="PStyleHe"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-3 col-sm-3 col-xs-6">-->
                <!--    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="1.0s" >-->
                <!--        <div class="ImageWrapper">-->
                <!--            <a href="#">-->
                <!--                <img class="img-responsive" src="public/resources/images/lastwork/05.png"  alt="">-->
                <!--                <div class="PStyleHe"></div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3 col-sm-3 col-xs-6">-->
                <!--    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="1.1s" >-->
                <!--        <div class="ImageWrapper">-->
                <!--            <a href="#">-->
                <!--                <img class="img-responsive" src="public/resources/images/lastwork/06.png"  alt="">-->
                <!--                <div class="PStyleHe"></div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3 col-sm-3 col-xs-6">-->
                <!--    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="1.2s" >-->
                <!--        <div class="ImageWrapper">-->
                <!--            <a href="#">-->
                <!--                <img class="img-responsive" src="public/resources/images/lastwork/01.png"  alt="">-->
                <!--                <div class="PStyleHe"></div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3 col-sm-3 col-xs-6">-->
                <!--    <div class="lw-item wow flipInX" data-wow-duration="2s" data-wow-delay="1.3s" >-->
                <!--        <div class="ImageWrapper">-->
                <!--            <a href="#">-->
                <!--                <img class="img-responsive" src="public/resources/images/lastwork/01.png"  alt="">-->
                <!--                <div class="PStyleHe"></div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!--div class="contact-form">
                    <h3>Leave A MESSAGE</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtName" placeholder="Name*">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="txtEmail" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtSubject" placeholder="Subject*">
                        </div>
                        <div class="form-group">
                            <textarea name="txtMessage" class="form-control" rows="6"></textarea>
                        </div>
                        <button class="btn-submit btn btn-danger pull-right">Hire me !</button>
                        <div class="clearfix"></div>
                    </form>
                </div-->
				
				<div class="contact-info">
					<div class="contact-block">
						<h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">Social Network</h3>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Fan Page: <a href="https://www.facebook.com/vn.ngthuc">https://www.facebook.com/vn.ngthuc</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">Facebook: <a href="https://www.facebook.com/lenguyenthuc">https://www.facebook.com/lenguyenthuc</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Messenger: <a href="https://m.me/lenguyenthuc">https://m.me/lenguyenthuc</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">Twitter: <a href="https://twitter.com/pk_over">https://twitter.com/pk_over</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">Google+: <a href="https://goo.gl/ZAtrg9">https://plus.google.com/u/0/+LêNguyênThức</a></p>
					</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <!--div class="contact-block">
                        <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">Address</h3>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s"> Aipisicing elit. Sint pariatur in dolor a delectus, ratione.</p>
                    </div-->
                    <div class="contact-block">
						<h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">Work</h3>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">vCard: <a href="https://ngthuc.com/en/">https://ngthuc.com/en/</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">GitHub: <a href="https://github.com/ngthuc/">https://github.com/ngthuc/</a></p>
						<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">LinkedIn: <a href="#">LinkedIn (<i>Unknow</i>)</a></p>
					</div>
                    <div class="contact-block">
                        <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">Contact</h3>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Phone: (+84) 1 678 911 202</p>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">Phone: (+84) 907 355 924</p>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Email: <a href="mailto:me@ngthuc.com">me@ngthuc.com</a></p>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">Website: <a href="https://ngthuc.com">https://ngthuc.com</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<footer id="footer">
	<div class="container">
       <div class="text-center">
           <p>Copyright &copy 2015. Design by Minh Nghia. Rebuild by NgThuc. All Rights Reserved.</p>
       </div>
    </div>
</footer>

<!-- library-->
<script type="text/javascript" src="./public/resources/vendor/jquery/dist/jquery.min.js" ></script>
<script type="text/javascript" src="./public/resources/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- custom -->
<script type="text/javascript" src="public/resources/js/canvas-header.js"></script>
<script type="text/javascript" src="public/resources/js/rAF.js"></script>
<script type="text/javascript" src="public/resources/vendor/wow/dist/wow.min.js"></script>
<script type="text/javascript" src="public/resources/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="public/resources/vendor/jQuery-One-Page-Nav/jquery.nav.js"></script>
<script type="text/javascript" src="./public/resources/js/custom.min.js"></script>
</body>
</html>
