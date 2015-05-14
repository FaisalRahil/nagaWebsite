<!DOCTYPE html>
<html>
  <head>
     <link rel="shortcut icon" type="image/x-icon" href="img/nagaLogo.png" />`
    <title>Naga for IT solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/ionicons.css" rel="stylesheet">
    <link href="js/source/jquery.fancybox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fancy-buttons.css" rel="stylesheet">
    <link href="css/style-contact.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".navbar-fixed-top">
    <?php      
      require 'PHPMailerAutoload.php';
      $mail = new PHPMailer;
      if(@$_POST["submit"]) {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        if(!$_POST["name"]) {
            @$error.="<br>Please enter your name";
        }
         if(!$_POST["email"]) {
            @$error.="<br>Please enter your email";
        }
        if ($_POST["email"]!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
            @$error.="<br>Please enter a valid email adddress";
        }
         if(!$_POST["subject"]) {
            @$error.="<br>Please enter your subject";
        }
         if(!$_POST["message"]) {
            @$error.="<br>Please enter your message";
        }
        if (@$error) {
        @$result=
        '<div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>There were errors in your form:'.$error.'</div>';
        $saveName = $_POST['name'];
        $saveEmail = $_POST['email'];
        $saveSubject = $_POST['subject'];
        $saveMessage = $_POST['message'];
        }
        else {
          $mail = new PHPMailer;                            // Enable verbose debug output
          $mail->CharSet = 'UTF-8';
          $mail->Encoding = 'base64';
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'naga.ly';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'noreply@naga.ly';                 // SMTP username
          $mail->Password = 'NgD3m^K2d&eM';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 25;                                    // TCP port to connect to
          $mail->setFrom($email, $name);
          $mail->addAddress("info@naga.ly", "info");     // Add a recipient              // Name is optional
          $mail->addReplyTo($email, $name);
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = '<b>'.$message.'</b>';
          if($mail->send()) {
            $result=
              '<div class="alert alert-success alert-dismissable" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Form submitted!</div>';
          }
          else {
            $result=
              '<div class="alert alert-danger alert-dismissable" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry, there was an error sending your message.  Please try again later.</div>';
          }
        }
      }
    ?>
    <div class="navbar navbar-default navbar-fixed-top scroll-me">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><img src="img/nagaLogo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#header">HOME</a></li>
            <li><a href="#works">WORK</a></li>
            <li><a href="#aboutUs">ABOUT US</a></li>
            <li><a href="#team">TEAM</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="overlay">
        <div class="container">
          <div class="row scroll-me">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 text-center">
              <h1 data-scroll-reveal="enter from the bottom after 0.2s">NAGA FOR IT SOLUTIONS 
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="works">
      <div class="container">
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.2s" class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>Vision experience and affiliation</strong></h2>                    Finding technical solutions to suit our customers through providing powerful tools & systems that helps manage their businesses with the most favorable prices.
          </div>
        </div>
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.4s" class="col-md-12 pad-bottom">
            <div class="caegories"><a href="#" data-filter="*" class="active btn btn-info btn-sm">All</a><a href="#" data-filter=".html" class="btn btn-info btn-sm">bootstrap</a><a href="#" data-filter=".css" class="btn btn-info btn-sm">node js</a><a href="#" data-filter=".code" class="btn btn-info btn-sm">wordpress</a><a href="#" data-filter=".script" class="btn btn-info btn-sm">ERP System</a></div>
          </div>
        </div>
        <div id="portfolio-div" class="row text-center">
          <div class="col-md-4 col-sm-4 html">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/1.jpg" class="fancybox-media"><img src="img/portfolio/1.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 css">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/2.jpg" class="fancybox-media"><img src="img/portfolio/2.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 code">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/3.jpg" class="fancybox-media"><img src="img/portfolio/3.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 script">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/4.jpg" class="fancybox-media"><img src="img/portfolio/4.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 html script">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/5.jpg" class="fancybox-media"><img src="img/portfolio/5.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 css code">
            <div class="work-wrapper"><a title="Image Title Goes Here" href="img/portfolio/6.jpg" class="fancybox-media"><img src="img/portfolio/6.jpg" alt="" class="img-responsive"></a></div>
          </div>
        </div>
      </div>
    </section>
     <section id="aboutUs">
      <div class="container">
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.2s" class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>About us</strong></h2>                  Naga for IT solutions / was founded in 2014 by a group of Libyan graduates from the University of Tripoli for the purpose of providing professional services that are Libyan and foreign institutes worthy to meet their technical needs, and from the 
          </div>
        


       </section>
    <div id="testimonial" data-scroll-reveal="enter from the bottom after 0.2s">
      <div class="overlay">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4"><i class="ion-ios-drag clr-set f-big"></i><br>
              <p>
              <h3>  Static Websites design </h3>
               </br>
Since many companies rely on static sites to present their activities and contact information and to communicate with their customers via email, thus Naga offers professional designs to show decent static sites and modern appearance with the activities of companies and meet their needs in communicating with their customers, and take into account the quality of design with competitive price.
          </br>
         <h3> Dynamic Websites </h3>
          </br>
Naga offers to its customers a range of distinctive designs of performance and quality where it studies the nature of the company's work side by side then proceed with the development of preliminary designs, followed by full design stage where its staff based on stronger competent tools and softwares in the design process, to deliver to the customer a fully reliable product.
            </br>
          <h3>  Mobile apps </h3>
    </br>
Programming and the development of interactive software and professional applications of the various smartphones, including Android applications among the best technical standards and high quality achieved all the objectives of private companies and institutions and government starting with planning, design, programming and development, testing and analysis and then publishing and marketing. 
            

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="team">
      <div class="container">
        <div data-scroll-reveal="enter from the bottom after 0.2s" class="row text-center">
          <div class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>AWESOME TEAM</strong></h2>                    
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.4s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/11.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading"> Abdullah Elamir </h3>  Abdullah is the co-founder & a back-end developer,he has experience in many languages such as Java ,python . He has been awarded a Bachelor's degree in computer science from the University of Tripoli
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/12.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Ahmed Fituri</h3>Ahmed is the founder, CEO, & head of development of Naga. As of December 2012, He has been awarded a master's degree in computer science from the University of San Francisco. In the recent years Ahmed has been employed by the  High National Election Commission in Libya as a tech consultant.
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/13.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Faisal Rahil</h3>       Faisal is the co-founder & a front-end developer. He has been awarded a Bachelor's degree in computer science from the University of Tripoli                 
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/14.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">AbdulQudos aboras</h3>      AbdulQudos is the co-founder & a front-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                        
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/17.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Farouck Shouba</h3>                           
                      Farouk Shouba is the co-founder , front-end developer and systems analyst . He has been awarded a Bachelor's degree in computer science from the University of Tripoli


              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/18.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Aladdin Suni</h3>   Aladdin is the co-founder & a front-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                          
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/44.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Mohammed Al Gemati</h3>   Mohammed is the co-founder & a back-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                           
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="#" class="media-left"><img src="img/20.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">abdulladem frag</h3>    Abdo is the co-founder & a back-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="overlay">
        <div data-scroll-reveal="enter from the bottom after 0.4s" class="container contact center">
          <div class="col-md-3 center section-title">
            <h2>Address 
              <h4 id="h4">Triq Asour, Tripoli,Libya</h4>
              <h4 id="h4"><strong>Phone Number : </strong>
                <p></p>0945451959
                <p></p>0911255848
              </h4>
              <h4 id="h4"><strong>Email : </strong>info@naga.ly</h4>
               <h4 id="h4"><strong>Mailbox : </strong>5107  General Mailbox Tripoli</h4>
            </h2>
            <div class="col-xs-12"><br><br></div>
          </div>
          <div class="col-md-7 col-md-offset-2">
            <div class="col-md-10 col-md-offset-1 center section-title">
              <h2>Leave a message</h2>
              <?php 
              @header("location: index.php#contact");
              echo @$result; ?>
            </div>
            <div class="confirmation">
              <p><span class="fa fa-check"></span></p>
            </div>
            <form method="POST" class="contact-form support-form">
              <div class="col-lg-12">
                <div id="error"></div>
                <input id="contactName" type="text" name="name" placeholder="Name" class="input-field form-item field-name">
                <input id="contactEmail" type="email" name="email" placeholder="Email" class="input-field form-item field-email">
                <input id="contactSubject" type="text" name="subject" placeholder="Subject" class="input-field form-item field-subject">
                <textarea id="contactMessage" rows="7" name="message" placeholder="Message" class="textarea-field form-item field-message"></textarea>
              </div>
                <input type="submit" name="submit" value="Send message" class="fancy-button button-line button-white large zoom subform">
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>Copyright reserved 2015 Naga.ly</footer>
  </body>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-notify.min.js"></script>
  <script src=""></script>
  <script src="js/nprogress.js"></script>
  <script>
    NProgress.start();
    $(window).load(function() {
      NProgress.done(); 
    });
  </script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/source/jquery.fancybox.js"></script>
  <script src="js/jquery.isotope.js"></script>
  <script src="js/scrollReveal.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery.vegas.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/custom-contact.js"></script>
  <!--<script src="js/jquery.validate.min.js"></script>
  <script src="js/contactValidation.js"></script>
  <script src="js/contactValidationArabic.js"></script>-->
</html>