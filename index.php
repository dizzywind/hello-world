<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>WenBin.IO</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>wenbin.io</h1>
          <div id="countdown"></div>

          <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      </div>

      <div>
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; WeBuild - All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact. 
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=WeBuild
            -->
            <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by BootstrapMade
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2019/01/01', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>

  <script src="contactform/contactform.js"></script>

</body>

</html>
