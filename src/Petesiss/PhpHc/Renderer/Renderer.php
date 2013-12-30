<?php

namespace Petesiss\PhpHc\Renderer;

use Petesiss\PhpHc\ChartInterface;

class Renderer
{
    /**
     * Produces html / js to render a given ChartInterface $chart
     *
     * @param ChartInterface $chart
     * @param String $renderName
     * @return string
     */
    public function render(ChartInterface $chart, $renderName="")
    {
        if($renderName=="") $renderName="chart";
        $html = "<script type=\"text/javascript\">var ".$renderName.";$(document).ready(function() {".$renderName." = new Highcharts.Chart(".$chart->getJson().");});</script>";

        return $html;
    }
}
