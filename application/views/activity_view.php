<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
	<meta charset="utf-8">
	<title>TPM</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<?php 
$this->load->view('/templates/navact');
?>
<section id="content" class="column-right">
    <?php
     for ($i = 0; $i < sizeof($activitystat); $i++) :
     $date[] = $activitystat[$i]['date'];
     $pad[] = "'".$date[$i]."'";
     $guest[]=$activitystat[$i]['total_visit'];
    endfor;
//    echo print_r($activitystat);
//    echo print_r($guest);
    ?>
        <script> $(function () { 
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: '<?php echo $name; ?>'
        },
        xAxis: {
            categories : [<?php echo join($pad,',') ?>]
         },
        yAxis: {
            title: {
                text: 'Number of visitors'
            }
        },
        series: [{
            name: '# of visitors',
            data:  [<?php echo join($guest,','); ?>]
        }]
    });
});
        </script>        		
	<article>
	<h1>Activity</h1><hr/><br/>	
        <?php if (empty($activitystat)) { ?>
        <CENTER><h3 style="color:red;">The activity record is empty!</h3></CENTER><br>
        <?php } ?>
                <div id="container" style="width:100%; height:400px;"></div>
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');


