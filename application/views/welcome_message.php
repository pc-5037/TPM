<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WELCOME</title>
    
     <!--Bootstrap Core CSS--> 
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />

     <!--Custom CSS--> 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/single-column-timeline.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />

     <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries--> 
     <!--WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
</head>
<body>
    <?php 
$this->load->view('/templates/sidebar');
?>
      <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="page-header">
    <h1>Wireless sensor-based application for managing Theme Park</h1>
    </div>
                        <p>Wireless sensor-based application for managing theme park is a web application 
                            for accumulating and displaying data that were collected from the guests via 
                            environmental sensors e.g. temperature sensor, accelerometer sensor, pulse sensor
                            , and RFID technology with the help of Arduino microcontroller. To provide a 
                            report on visiting statistics and a unique selling-point, sensors, Wi-Fi module 
                            and RFID reader will be attached to the arduino in order to collect data from 
                            theme park's guest, then sent them to web server, which the data will be handled 
                            and displayed.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
   
     <!--jQuery--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

     <!--Bootstrap Core JavaScript--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>-->
</body>

</html>