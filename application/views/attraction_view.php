<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/js/confirmation.js');?>" ></script>
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
			

            <h1>View all attractions</h1>

        <h3>Attraction List</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Height Limit</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php foreach ($attraction_list as $attraction):?>
            <tr>
                <td>
               <?php echo $attraction->aid;?>
                </td>
                <td>
               <?php echo $attraction->aname;?>
                </td>
                <td>
               <?php echo $attraction->description; ?>
                </td>
                 <td>
               <?php echo $attraction->height_limit; ?>
                </td>
                <td>
               <a class="button" href="<?php echo base_url() . "index.php/attractions/show_detail_form/" . $attraction->aid; ?>">
                Edit</a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                    <a onclick="return confirmDelete()" class="button button-reversed" href="<?php echo base_url() . "index.php/attractions/delete/" . $attraction->aid; ?>">
                Delete</a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>

        </table>
		
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');
?>

