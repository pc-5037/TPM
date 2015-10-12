<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/js/validation.js');?>" ></script>
	<meta charset="utf-8">
	<title>TPM</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<?php 
$this->load->view('/templates/navadda');
?>
<section id="content" class="column-right">
                		
	<article>
	<h1>Add Attraction</h1><hr/><br/>		
<fieldset>
<legend>Attraction Information Form</legend><br/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Add successfully</h3></CENTER><br>
<?php } ?>

<form name="myForm" onsubmit="return validateAttraction()" method="post" action="<?php echo base_url() . "index.php/attractions/add"?>">        
        <p><label>Name :</label>
            <input type="text" name="dname" placeholder="5-30 characters" required><br></p>
        <p><label>Description :</label>
            <textarea type="text" name="desc" placeholder="5-60 characters" required></textarea><br></p>
        <p><label>Height Limit :</label>
            <input type="number" name="hlimit" placeholder="cm." required><br></p>
        <p><input class="formbutton" type="submit" id="submit" name="dsubmit" value="Update"></p>
</form>   
</fieldset>
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');

