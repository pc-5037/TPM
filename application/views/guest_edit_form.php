<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap Core CSS--> 
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />

     <!--Custom CSS--> 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />

     <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries--> 
     <!--WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--<![endif]-->
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/validation.js');?>" ></script>
	<meta charset="utf-8">
	<title>TPM</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<?php 
$this->load->view('/templates/sidebar');
?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">			
    <?php foreach ($a_guest as $guest): ?>
<h1>Edit Guest Information</h1><br/>
<legend>Form</legend>
<fieldset class="form-group-sm">
    <form name="myForm" onsubmit="return validateGuest()" method="post" action="<?php echo base_url() . "index.php/guests/edit"?>">
        <p><label id="hide">ID :</label>
            <input class="form-control"  type="text" id="hide" name="gid" value="<?php echo $guest->gid; ?>" readonly="readonly"><br></p>
        <p><label id="hide">UID :</label>
            <input class="form-control" type="text" id="hide" name="guid" value="<?php echo $guest->guid; ?>" readonly="readonly"><br></p>
        <p><label>Name :</label>
            <input class="form-control" type="text" name="gname" value="<?php echo $guest->gname; ?>"><br></p>
        <p><label>Email :</label>
            <input class="form-control" type="email" name="gmail" value="<?php echo $guest->gmail; ?>"><br></p>
        <p><label>Mobile No. :</label>
            <input  class="form-control" type="tel" name="gtel" value="<?php echo $guest->gtel; ?>"><br></p>
        <p><input class="btn btn-primary" type="submit" id="submit" name="dsubmit" value="Update"></p>
</form>
<?php endforeach; ?>
</fieldset>   
                    </div>
                </div>
            </div>
        </div>

     <!--jQuery--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

     <!--Bootstrap Core JavaScript--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>