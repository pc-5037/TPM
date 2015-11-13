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

<dl class="dl-horizontal">
  <dt>ID</dt>
  <dd><?php echo $a_guest[0]->gid;?></dd>
  <dt>UID</dt>
  <dd><?php echo $a_guest[0]->guid;?></dd>
  <dt>Name</dt>
  <dd><?php echo $a_guest[0]->gname;?></dd>
  <dt>E-mail</dt>
  <dd><?php echo $a_guest[0]->gmail; ?></dd>
  <dt>Tel.</dt>
  <dd><?php echo $a_guest[0]->gtel; ?></dd>
</dl>
   <div class="btn-toolbar text-center" role="toolbar">
<!--      <button type="button" class="btn btn-primary">Expandable</button>
      <button type="button" class="btn btn-danger">ERROR <span class="caret"></span></button>-->
      <a type="button" class="btn btn-primary" href="<?php echo base_url() . "index.php/profiles/show_detail_form/" .$a_guest[0]->gid; ?>">Edit</a>
    </div>



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