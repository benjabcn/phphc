<?php

namespace Petesiss\PhpHc\Tests\Renderer;

use Petesiss\PhpHc\Tests\TestCase;
use Petesiss\PhpHc\Renderer\Renderer;
use Petesiss\PhpHc\ChartInterface;
use Petesiss\PhpHc\ChartFactory;

class RendererTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $factory = new ChartFactory();

        $this->chart = $factory->create()
            ->setChart(array('renderTo' => 'container', 'type' => 'bar'))
            ->setTitle(array('text' => 'Monthly Average Temperature'))
            ->setSubtitle(array('text' => 'Based on lots of readings.'))
            ->setXAxis(array('categories' => array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec')))
            ->setYAxis(array('title' => array('text' => 'Temperature')))
            ->setSeries(array(
                array('name' => 'Tokyo', 'data' => array(7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6)),
                array('name' => 'London', 'data' => array(3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8)),
            ));
    }

    public function testRendering()
    {
        $renderer = new Renderer;
        $expected = '<script type="text/javascript">var chart;$(document).ready(function() {chart = new Highcharts.Chart({"chart":{"renderTo":"container","type":"bar"},"series":[{"name":"Tokyo","data":[7,6.9,9.5,14.5,18.4,21.5,25.2,26.5,23.3,18.3,13.9,9.6]},{"name":"London","data":[3.9,4.2,5.7,8.5,11.9,15.2,17,16.6,14.2,10.3,6.6,4.8]}],"subtitle":{"text":"Based on lots of readings."},"title":{"text":"Monthly Average Temperature"},"xAxis":{"categories":["Jan","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec"]},"yAxis":{"title":{"text":"Temperature"}}});});</script>';
        $this->assertEquals($expected, $renderer->render($this->chart));
    }
}