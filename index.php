<?php
if(isset($_POST['contact_btn'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $comment=$_POST['comment'];
  $to="flymingoconsults@gmail.com";
  $header="from:$email";
  if(mail($to,$subject,$comment,$header)){$comment1="Message submitted successfully";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>flymingo Consults Ghana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="logo-small href="#myPage"><img src="logo v.PNG" alt="logo"></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1><strong>Flymingo Consults</strong></h1> 
  <h5>The Best Solution for:  Full stack Web development | Software Development | Social Media Marketing | Photography | Graphics Design | video production | Sound Engineering  </h5> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>WHO ARE WE?</h2><br>
      <h4>
        Flymingo Consults Ltd. started as a recording studio known as fire flames multimedia in Tumu a town in the Upper West Region of Ghana. 
        Ever since we commenced business in 2011, we have been the best in the field of I.T hardware/software mantance and repair, Photography, 
        Sound Engineering, Web Development, Graphics Designs, Events Organisation and Software Development.
        <br>
        After five years of opperation we moved to the Upper West Regional capital Wa in 2015.
        We have earned ourselves a track record of successes in our field of works, covering over 1000 events and training of over 2000 people 
        in our fields of work on our youtube and socail media handles.
      </br>
       <br> 
        Flymingo Consults embodies a professional, highly skilled and experience with over 10 years of industry experience. This 
        team has executed projects of various sizes from all over Ghana. With some of the most intelligent minds on our team; giving us the depth and indigenous
         ‘on the job’ experience, we always come up on top of our game. </h4></br>
      </br>
      <p> We major in Full Stack Web Development | Social Media Marketing | Software Development | Photography | Graphics Design | video production | Sound Engineering</p>
      <br><button class="btn btn-default btn-lg"><a href="mailto:flymingoconsults@gmail.com">Get in Touch</a></button>
    </div>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5192010405728507"
     crossorigin="anonymous"></script>

    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to provided quality services to our clients in the global market.
        To become the customers' most preferred choice by attaining excellence in quality and timely completed value added projects. 
        To provide the highest level of service in the I.T industry while offering superior craftsmanship to every project, we handle.
        To continually innovate, develop and adopt state-of-the-art technology in methods and materials to enhance productivity and cost effectiveness.
        To continually improve the competence of our team, and employ diverse, innovative & results-oriented personals, motivated to deliver excellence.
        To build a safety culture aimed at continually reducing the frequency severity rate towards achieving zero accidents.
        To identify and mitigate all the environmental impacts arising from our activities, and comply with applicable environmental norms.</h4><br>

      <p><strong>VISION:</strong> Our vision is to become the leading technological firm, while delivering projects that consistently exceed international
         standards and provide exceptional customer satisfaction.
        To continually deliver excellent value & innovative construction solutions to meet our clients' requirements.
        Using modern principles and sophisticated technologies.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-camera logo-small"></span>
      <h4>PHOTOGRAPHY</h4>
      <p>We have for over ten (10) years been in this field. We are undisputed champions when it comes to photography.....</p>
    </div>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>EVENTS ORGANISATION</h4>
      <p>We have for over fiveteen (15) years been in this field. Champions when it comes to events planning and organisations.....</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-camera logo-small"></span>
      <h4>VIDEOGRAPHY</h4>
      <p>In Videography, the best call us, the best cause we delever mind blowing content any time we are on set...</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>WEB DEVELOPMENT</h4>
      <p>We are the first name that comes in mind when it comes to web development in th northern part of Ghana.....</p>
    </div>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">WE NEVER DISAPPOINT</h4>
      <p>We delever the best quality of work all the time.....</p>
    </div>
  </div>
</div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5192010405728507"
     crossorigin="anonymous"></script>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Jobs we have done</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="cost.jpg" alt="construction" width="400" height="300">
        <p><strong>FIXING OF RAISING DAMP</strong></p>
        <p>When it comes to fixing of raising damp/ putting up structures that can stand damp of any kind teast of time, look no feather cause Flymingo Consults is the best among the rest,
          we take our time to make sure we meet the satisfaction of our dear costumers all over the country. We are expects in fixing raising damp and also providing water 
          proofing membranes for homes round the country.
          Services we offer include, plumbing, massonry, painting and decoration, P.O.P works, tilling and many more 
        </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="foto.JPG" alt="Photography & Video Production" width="400" height="300">
        <p><strong>Photography </strong></p>
        <p>We have been in the photography and video production field for over a decade now, covering weddings, funerals, naming ceremonies and also covering 
          event by locals and co-operate bodies such as USAID, PLAN INTERNATIONAL, UNICEF and many others.
        </p>
      </div>
      <div class="col-sm-4">
        <iframe width="280" height="158" src="https://www.youtube.com/embed/i42eJu-B-Vw" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
        <p><strong> Video Production</strong></p>
        <p>We have been in the video production field for over a decade now, Directing music videos, shoting movies and covering events.
        </p>
      </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="web.jpg" alt="Web Development" width="400" height="300">
        <p><strong>Web Development</strong></p>
          <p>As fresh as we are is the tech space, we are full of inovative solutions to lots of problems in the tech world...</p>
          <a href="https://www.youtube.com/channel/UCHOTE_b-9e1tvo45gWcCTYA">Visit our Youtube Channel</a>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Alice Love </span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Kofi Ansah, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Nubanie Sule, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> WA-UPPER WEST REGION, GHANA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +233 500 948 291</p>
      <p><span class="glyphicon glyphicon-envelope"></span> flymingoconsults@gmail.com</p>
    </div>

    <form action="welcome.php" method="post" enctype="text/plain">
    <div class="col-sm-7 slideanim">
      <strong>
        <?php if(!empty($comment1)){ echo $comment1;
        } ?>
      </strong>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="loc 1.png" class="w3-image w3-greyscale-min" style="width:100%">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5192010405728507"
     crossorigin="anonymous"></script>

<footer class="container-fluid text-center">
  <!-- Add font awesome icons -->
<a href="https://web.facebook.com/eddyfreshtv/" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://web.whatsapp.com/" class="fa fa-whatsapp"></a>
<a href="https://www.youtube.com/channel/UCHOTE_b-9e1tvo45gWcCTYA" class="fa fa-youtube"></a>
<a href="https://github.com/Mrtechlee" class="fa fa-github"></a>
</footer>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Flymingo Consults Ghana (C)Copy Right </p>
</footer>


</body>
</html>
