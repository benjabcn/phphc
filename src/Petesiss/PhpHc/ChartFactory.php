<?php

namespace Petesiss\PhpHc;

use Petesiss\PhpHc\Chart;
use Petesiss\PhpHc\ChartInterface;

/**
 * Factory to create charts
 */
class ChartFactory
{
    /**
     * Create and return a new chart object
     *
     * @return ChartInterface
     */
    public function create()
    {
        $chart = new Chart();
        return $chart;
    }

    /**
     * Create and return a new chart object
     * configured with the supplied array
     *
     * @param array $config
     * @return ChartInterface
     */
    public function createFromArray($config)
    {
        $chart = $this->create();
        foreach ($config as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($chart, $method)) {
                $chart->$method($value);
            }
        }

        return $chart;
    }

}