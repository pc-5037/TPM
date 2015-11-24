<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap Core CSS--> 
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />

     <!--Custom CSS--> 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
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
        <h1>View all guests</h1>
        <h2>Guest List</h2>
        
        <table class="table table-hover">
            <thead>
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
            </thead>
            
            <tbody>
            <tr>    
                <?php foreach ($guest_list as $guest):?>
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
               <a class="btn btn-success" href="<?php echo base_url() . "index.php/guests/show_detail_form/" . $guest->gid; ?>">
                Edit</a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                <a onclick="return confirmDelete()" class="btn btn-danger" href="<?php echo base_url() . "index.php/guests/delete/" . $guest->gid; ?>">
                Delete</a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>          
            </tbody>
        <?php endforeach; ?>
        </table>
        
                    </div>
                </div>
            </div>
        </div>

     <!--jQuery--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

     <!--Bootstrap Core JavaScript--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>