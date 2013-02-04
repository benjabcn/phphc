<?php

namespace Petesiss\PhpHc\Tests;

use Petesiss\PhpHc\ChartInterface;
use Petesiss\PhpHc\ChartFactory;

class ChartFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $factory = new ChartFactory();

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $factory->create());
    }

    public function testCreateFromArray()
    {
        $factory = new ChartFactory();

        $options = array(
            'chart'      => array('renderTo' => 'container', 'type' => 'line'),
            'unknownKey' => array(100, 200),
            'title'      => array('text' => 'Traffic Flow'),
            'xAxis'      => array('categories' => array('Mon', 'Tue', 'Wed', 'Thurs', 'Fri')),
            'yAxis'      => array('title' => array('text' => 'Vehicles per minute')),
            'series'     => array(
                array('name' => 'Main Street', 'data' => array(44, 30, 34, 29, 48)),
            ),
        );

        $chart = $factory->createFromArray($options);

        $this->assertInstanceOf('Petesiss\PhpHc\ChartInterface', $chart);
        $this->assertEquals(array('renderTo' => 'container', 'type' => 'line'), $chart->getChart());
        $this->assertEquals(array('text' => 'Traffic Flow'), $chart->getTitle());
        $this->assertEquals(array(), $chart->getColors());
    }
}