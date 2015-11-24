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
    <h1>Add Attraction</h1><hr/><br/>		
<fieldset>
    <legend class="form-group-sm">Attraction Information Form</legend><br/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Add successfully</h3></CENTER><br>
<?php } ?>

<form name="myForm" onsubmit="return validateAttraction()" method="post" action="<?php echo base_url() . "index.php/attractions/add"?>">        
        <p><label>Name :</label>
            <input class="form-control" type="text" name="dname" placeholder="5-30 characters" required><br></p>
        <p><label>Description :</label>
            <textarea class="form-control" type="text" name="desc" placeholder="5-60 characters" required></textarea><br></p>
        <p><label>Height Limit :</label>
            <input class="form-control" type="number" name="hlimit" placeholder="cm." required><br></p>
        <p><input class="btn-primary" type="submit" id="submit" name="dsubmit" value="Update"></p>
</form>   
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