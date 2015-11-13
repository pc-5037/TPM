<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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

</head>

<body>


        <?php 
$this->load->view('/templates/sidebar');
?>

         <!--/Page Content--> 
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<!--                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
                        <!--start here-->
                        <div class="container">

          <div class="col-lg-6 col-sm-6">
               <h1>Personal Information</h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="#">Login</a></li>
                    <!--<li><a href="#">Signup</a></li>-->
               </ul>
               
          </div>
     </div>

<hr/>
<?php foreach ($a_guest as $guest): ?>
<fieldset class="form-group">
    <form name="myForm" onsubmit="return validateGuest()" method="post" action="<?php echo base_url() . "index.php/profiles/edit"?>">
        <p><label id="hide" class="col-sm-2 form-control-label">ID :</label>
            <input type="text" class="form-control" id="hide" name="gid" value="<?php echo $guest->gid; ?>" readonly="readonly"><br></p>
        <p><label id="hide">UID :</label>
            <input type="text" class="form-control" id="hide" name="guid" value="<?php echo $guest->guid; ?>" readonly="readonly"><br></p>
        <p><label>Name :</label>
            <input type="text" class="form-control" name="gname" value="<?php echo $guest->gname; ?>"><br></p>
        <p><label>Email :</label>
            <input type="email" class="form-control" name="gmail" value="<?php echo $guest->gmail; ?>"><br></p>
        <p><label>Mobile No. :</label>
            <input type="tel" class="form-control" name="gtel" value="<?php echo $guest->gtel; ?>"><br></p>
        <p><input class="btn btn-secondary" type="submit" id="submit" name="dsubmit" value="Update"></p>
</form>
<?php endforeach; ?>
</fieldset> 

<!--done-->
                    </div>
                </div>
            </div>
        </div>
         <!--/#page-content-wrapper--> 


     <!--/#wrapper--> 

     <!--jQuery--> 
    <script src="js/jquery.js"></script>

     <!--Bootstrap Core JavaScript--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

     <!--Menu Toggle Script--> 
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>