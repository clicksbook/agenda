<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Agenda</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo ROUTE; ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo ROUTE; ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Mada:400,500,600" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/icon/icofont/css/icofont.css">


    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?php echo ROUTE; ?>bower_components/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="<?php echo ROUTE; ?>assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE; ?>assets/css/color/dark-light.css " id="color" />

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <?php include("Views/modulos/include/header.php"); ?>
        <!-- Side-Nav-->
        <?php include("Views/modulos/include/nav.php"); ?>
        <!-- Sidebar chat start -->
        <?php include("Views/modulos/include/chat.php"); ?>
        <!-- Sidebar chat end-->

        <!-- Contenido-->

        <?php
        $url = new ctrLinks();
        $resultURl = $url->getLinks(GET);
        if(!empty($resultURl["route"])){
            include($resultURl["route"]);
        }else{
            include("Views/modulos/error.php"); 
        }
        
    

        //include("Views/modulos/dashboard.php");

        ?>
        <!-- FIN Contenido-->

    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="<?php echo ROUTE; ?>assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="<?php echo ROUTE; ?>assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="<?php echo ROUTE; ?>assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="<?php echo ROUTE; ?>assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="<?php echo ROUTE; ?>assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="<?php echo ROUTE; ?>bower_components/Jquery/dist/jquery.min.js"></script>
    <script src="<?php echo ROUTE; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo ROUTE; ?>bower_components/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo ROUTE; ?>assets/js/popover.js"></script>
    <script src="<?php echo ROUTE; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- waves effects.js -->
    <script src="<?php echo ROUTE; ?>assets/plugins/waves/js/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?php echo ROUTE; ?>bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo ROUTE; ?>bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?php echo ROUTE; ?>bower_components/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?php echo ROUTE; ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="<?php echo ROUTE; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="<?php echo ROUTE; ?>bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo ROUTE; ?>assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="<?php echo ROUTE; ?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="<?php echo ROUTE; ?>assets/js/main.min.js"></script>
    <script type="text/javascript" src="<?php echo ROUTE; ?>assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo ROUTE; ?>assets/pages/elements.js"></script>
    <script src="<?php echo ROUTE; ?>assets/js/menu.min.js"></script>


</body>

</html>