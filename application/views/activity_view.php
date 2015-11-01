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
$this->load->view('/templates/navadda');
?>
<section id="content" class="column-right">
        <script> $(function () { 
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Activities'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']//put dates here
        },
        yAxis: {
            title: {
                text: 'Number of visitors'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});
        </script>        		
	<article>
	<h1>Activity</h1><hr/><br/>		
                <div id="container" style="width:100%; height:400px;"></div>
		</article>
		<div class="clear"></div>
		</section>
<?php 
$this->load->view('/templates/footer');


