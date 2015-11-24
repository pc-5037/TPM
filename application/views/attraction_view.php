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
     <h1>View all attractions</h1>

        <h3>Attraction List</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Height Limit</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Activity</th>
            </tr>
            </thead>
            <tbody>
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
               <a class="btn btn-success" href="<?php echo base_url() . "index.php/attractions/show_detail_form/" . $attraction->aid; ?>">
                Edit</a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                    <a onclick="return confirmDelete()" class="btn btn-danger" href="<?php echo base_url() . "index.php/attractions/delete/" . $attraction->aid; ?>">
                Delete</a>
<!--                    anchor to delete ctrl -->
                </td>
                <td>
               <a class="btn btn-info" href="<?php echo base_url() . "index.php/activity/at_chart/" . $attraction->aid; ?>">
                Activity</a>
<!--                    anchor to edit ctrl-->
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