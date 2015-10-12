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
$this->load->view('/templates/navreg');
?>
<section id="content" class="column-right">
                		
	<article>
			
<h1>Register Guest</h1><hr/><br/>
<?php if (isset($message)) { ?>
<CENTER><h3>Data inserted successfully</h3></CENTER><br>

<?php } ?>
<?php if (isset($uid)){
    $id = $uid; 
}else{
    $id= NULL;
}
?>
<fieldset>
    <legend>Register Form</legend><br/>
    <form name="myForm" onsubmit="return validateGuest()" method="post" action="<?php echo base_url() . "index.php/guests/add"?>">
        <p><label id="hide">UID :</label>
            <input type="text" id="hide" name="guid" value="<?php echo $id; ?>" readonly="readonly"><br></p>
        <p><label>Name :</label>
            <input type="text" name="gname" placeholder="5-30 characters" required><br></p>
        <p><label>Email :</label>
            <input type="email" name="gmail" placeholder="example@mail.com" required><br></p>
        <p><label>Mobile No. :</label>
            <input type="tel" name="gtel" placeholder="10 digits" required><br></p>
        <p><input class="formbutton" type="submit" id="submit" name="dsubmit" value="Update"></p>
    </form>
</fieldset>

		
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');


