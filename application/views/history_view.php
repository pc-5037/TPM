<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your History</title>

     <!--Bootstrap Core CSS--> 
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />

     <!--Custom CSS--> 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/single-column-timeline.css"); ?>" />
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
    

    
        <!--toggle-->
           <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Sidebar</a>
   <div class="container">          
  <div class="page-header">
    <h1 id="timeline">Timeline</h1>
  </div>
     
    
    
  <div class="container">
    <ul class="timeline">
         <?php
     for ($i = 0; $i < sizeof($result); $i++) : ?>
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-body">
              <article class="post-wrap thumbnail">
                <div class="post-media">                    
                    <div class="post-meta clearfix">
                        <span class="pull-left"><span class="post-date"><i class="fa fa-clock-o"></i>
                            <?php 
                            $result[$i]['date'] = new DateTime($result[$i]['date']);
                            echo $result[$i]['date'] = $result[$i]['date']->format('d M Y H:i:s');                                                                             
                            ?>
                            </span> <span class="post-location"><i class="fa fa-map-marker"></i><?php echo $result[$i]['aname']?></span> </span>
                    </div>
                </div>
                <div class="post-header">
                    <h4 class="post-title"><a href="#">You have entered <?php echo $result[$i]['aname'] ?>!</a></h4>
                    <span class="post-author">by <a href="<?php echo site_url('profiles') ?>"><?php echo $this->session->userdata['logged_in']['username'];?></a></span>
                </div>
                <div class="post-body">
                    <div class="post-excerpt">
                        <dl class="dl-horizontal">
                        <dt>Attraction Name:</dt>
                        <dd><?php echo $result[$i]['aname'];?></dd>
                        <dt>Time:</dt>
                        <dd><?php echo $result[$i]['date']?></dd>
                      </dl>
                        We hope you enjoyed this as much as you can!!
                    </div>
                </div>
            </article>
            </div>
          </div>
        </li>
    <?php
    endfor;
    ?>
    </ul>
</div>
   </div>
    
     <!--jQuery--> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

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