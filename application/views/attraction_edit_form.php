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
$this->load->view('/templates/navviat');
?>
<section id="content" class="column-right">
                		
	<article>
			
<?php foreach ($an_attraction as $attraction): ?>
<h1>Edit Attraction Detail</h1><br/>
<legend>Form</legend>
<fieldset>
    <form name="myForm" onsubmit="return validateAttraction()" method="post" action="<?php echo base_url() . "index.php/attractions/edit"?>">
        <p><label id="hide">Id :</label>
            <input type="text" id="hide" name="did" value="<?php echo $attraction->aid; ?>" readonly="readonly"><br/></p>
        <p><label>Name :</label>
            <input type="text" name="dname" value="<?php echo $attraction->aname; ?>" required><br></p>
        <p><label>Description :</label>
            <textarea type="text" name="desc" required><?php echo $attraction->description; ?></textarea><br></p>
        <p><label>Height Limit :</label>
            <input type="number" name="hlimit" value="<?php echo $attraction->height_limit; ?>" required><br></p>
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
