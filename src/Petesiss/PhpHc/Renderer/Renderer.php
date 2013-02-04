<?php

namespace Petesiss\PhpHc\Renderer;

use Petesiss\PhpHc\ChartInterface;

class Renderer
{
    /**
     * Produces html / js to render a given ChartInterface $chart
     *
     * @param ChartInterface $chart
     * @return string
     */
    public function render(ChartInterface $chart)
    {
        $html = "<script type=\"text/javascript\">var chart;$(document).ready(function() {chart = new Highcharts.Chart(".$chart->getJson().");});</script>";

        return $html;
    }
}