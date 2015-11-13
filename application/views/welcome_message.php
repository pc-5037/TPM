<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />
	<meta charset="utf-8">
	<title>Welcome to TPM</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
             <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
<?php 
$this->load->view('/templates/nav');
$this->load->view('/templates/body');
?>
 
    
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>-->
</body>

</html>