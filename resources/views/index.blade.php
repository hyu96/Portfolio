<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quang Huy - Web Developer</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Hello, I'm <span class="name">Quang Huy</span></h1>
          <p>Web Developer</p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Quang Huy</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">About</a> </li>
          <li> <a class="page-scroll" href="#skills">Skills</a> </li>
          <li> <a class="page-scroll" href="#resume">Resume</a> </li>
          <li> <a class="page-scroll" href="#contact">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="img/about.jpg" class="img-responsive"></div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
          <p class="text-center">I'm a young man on the way to be a professional developer</p>
          <p class="text-center">My passion is everything about technology</p>
          <p class="text-center"><a class="btn btn-primary" id="download" href="{{ route('resume') }}"><i class="fa fa-download"></i> Download Resume</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Skills</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="60"> <span class="percent">60</span> </span>
        <h4>HTML &amp; CSS</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>PHP</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
        <h4>JavaScript</h4>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Some Stats</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="200ms">
        <div class="achievement-box"> <span class="count">21</span>
          <h4>Years Old</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="400ms">
        <div class="achievement-box"> <span class="count">400</span>
          <h4>Hours of Work</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1ms">
        <div class="achievement-box"> <span class="count">1</span>
          <h4>Years of Experience</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Resume Section -->
<div id="resume" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Experience</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <h4>Aug 2017 <br>
                - <br>
                Present </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Intern</h4>
                <h4 class="subheading">Web Developer</h4>
              </div>
              <div class="timeline-body">
                <p>Part time job at Alt Plus VietNam<br>This is my first company i work for and i'm pleasant about my job in here</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title center">
      <h2>Education</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">

          <!-- Education Section-->

          <li>
            <div class="timeline-image">
              <h4>Sep 2014 <br>
                - <br>
                Present </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>HANOI UNIVERSITY OF SCIENCE AND TECHNOLOGY</h4>
                <h4 class="subheading">Information Technology Engineering</h4>
              </div>
              <div class="timeline-body">
                <p>My major is Information Security<br>This is one of the best university in Viet Nam. I have learnt so much from here</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2011 <br>
                - <br>
                2014 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Viet Duc High School</h4>
                <h4 class="subheading">Student</h4>
              </div>
              <div class="timeline-body">
                <p>The best time in my student life.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>365 Hong Ha St,<br>
          Hoan Kiem, Ha Noi</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>huydq2510@gmail.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> 0166 863 6007</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave me a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a target="_blank" href="https://www.facebook.com/huydq2510"><i class="fa fa-facebook"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/do_quang_huy/?hl=en"><i class="fa fa-instagram"></i></a></li>
          <li><a target="_blank" href="https://github.com/hyu96"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>