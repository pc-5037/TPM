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
$this->load->view('/templates/navvig');
?>
    
    <section id="content" class="column-right">               		
	<article>
							
        <h1>View all guests</h1>
<!--        <p>Morbi fermentum condimentum felifdsffsfdsfsdfdfsdfsdfsfs, 
            commodo vestibulum sem mattis sed. Aliquam magna ante, mollis vitae tincidunt</p>-->
        <h3>Guest List</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>UID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Tel.</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php foreach ($guest_list as $guest):?>
            <tr>
                <td>
               <?php echo $guest->gid;?>
                </td>
                <td>
               <?php echo $guest->guid;?>
                </td>
                <td>
               <?php echo $guest->gname;?>
                </td>
                <td>
               <?php echo $guest->gmail; ?>
                </td>
                 <td>
               <?php echo $guest->gtel; ?>
                </td>
                <td>
               <?php echo $guest->status ? 'true' : 'false'; ?>
                </td>
                <td>
               <a class="button" href="<?php echo base_url() . "index.php/guests/show_detail_form/" . $guest->gid; ?>">
                Edit</a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                <a onclick="return confirmDelete()" class="button button-reversed" href="<?php echo base_url() . "index.php/guests/delete/" . $guest->gid; ?>">
                Delete</a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>
        </table>


		
		</article>
		</section>
<?php 
$this->load->view('/templates/footer');
?>
		<div class="clear"></div>
</body>
</html>