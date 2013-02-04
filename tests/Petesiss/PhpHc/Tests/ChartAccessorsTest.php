<?php

namespace Petesiss\PhpHc\Tests;

use Petesiss\PhpHc\ChartInterface;
use Petesiss\PhpHc\ChartFactory;

class TestCase extends \PHPUnit_Framework_TestCase
{

    public function testChart()
    {
        $config = array('renderTo' => 'container', 'type' => 'bar');

        $chart = $this->createChart();
        $check = $chart->setChart($config);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($config, $chart->getChart());
    }

    public function testTitle()
    {
        $title = array('text' => 'Monthly Average Temperature');

        $chart = $this->createChart();
        $check = $chart->setTitle($title);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($title, $chart->getTitle());
    }

    public function testSubtitle()
    {
        $subtitle = array('text' => 'Based on lots of readings.');

        $chart = $this->createChart();
        $check = $chart->setSubtitle($subtitle);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($subtitle, $chart->getSubtitle());
    }

    public function testXAxis()
    {
        $xAxis = array('categories' => array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'));

        $chart = $this->createChart();
        $check = $chart->setXAxis($xAxis);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($xAxis, $chart->getXAxis());
    }

    public function testYAxis()
    {
        $yAxis = array('title' => array('text' => 'Temperature'));

        $chart = $this->createChart();
        $check = $chart->setYAxis($yAxis);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($yAxis, $chart->getYAxis());
    }

    public function testSeries()
    {
        $series = array('name' => 'Tokyo', 'data' => array(7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6));

        $chart = $this->createChart();
        $check = $chart->setSeries($series);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $check);
        $this->assertEquals($series, $chart->getSeries());
    }

    /**
     * @return ChartInterface
     */
    protected function createChart()
    {
        $factory = new ChartFactory();
        $chart = $factory->create();

        return $chart;
    }
}