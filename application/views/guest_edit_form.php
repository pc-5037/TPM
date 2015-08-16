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
$this->load->view('/templates/navvig');
?>
<section id="content" class="column-right">
                		
	<article>
			
<?php foreach ($a_guest as $guest): ?>
<h1>Edit Guest Information</h1><br/>
<legend>Form</legend>
<fieldset>
    <form name="myForm" onsubmit="return validateGuest()" method="post" action="<?php echo base_url() . "index.php/guests/edit"?>">
        <p><label id="hide">ID :</label>
            <input type="text" id="hide" name="gid" value="<?php echo $guest->gid; ?>" readonly="readonly"><br></p>
        <p><label id="hide">UID :</label>
            <input type="text" id="hide" name="guid" value="<?php echo $guest->guid; ?>" readonly="readonly"><br></p>
        <p><label>Name :</label>
            <input type="text" name="gname" value="<?php echo $guest->gname; ?>"><br></p>
        <p><label>Email :</label>
            <input type="email" name="gmail" value="<?php echo $guest->gmail; ?>"><br></p>
        <p><label>Mobile No. :</label>
            <input type="tel" name="gtel" value="<?php echo $guest->gtel; ?>"><br></p>
        <p><input class="formbutton" type="submit" id="submit" name="dsubmit" value="Update"></p>
</form>
<?php endforeach; ?>
</fieldset>            
		
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');
?>
