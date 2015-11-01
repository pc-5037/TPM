<?php
echo $this->gcharts->LineChart('Stocks')->outputInto('stock_div');
echo $this->gcharts->div(800, 300);

if($this->gcharts->hasErrors())
{
    echo $this->gcharts->getErrors();
}

foreach ($activitystat_list as $activitystat):
echo $activitystat->uid;
echo $activitystat->date;
echo $activitystat->time;
echo $activitystat->location;
endforeach;
echo var_dump($array);
