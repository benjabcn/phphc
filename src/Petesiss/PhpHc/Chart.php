<?php

namespace petesiss\PhpHc;

use Petesiss\PhpHc\ChartInterface;

/**
 * Represents a HighChart, configured by setting arrays
 */
class Chart implements ChartInterface
{
    /**
     * Chart config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#chart
     */
    protected $chart = array();

    /**
     * Colors config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#colors
     */
    protected $colors = array();

    /**
     * Credits config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#credits
     */
    protected $credits = array();

    /**
     * Exporting config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#exporting
     */
    protected $exporting = array();

    /**
     * Global config, as defined in the HighCharts API
     * @var array
     * @link http://api.highcharts.com/highcharts#global
     */
    protected $global = array();

    /**
     * Labels config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#labels
     */
    protected $labels = array();

    /**
     * Lang config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#lang
     */
    protected $lang = array();

    /**
     * Legend config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#legend
     */
    protected $legend = array();

    /**
     * Loading config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#loading
     */
    protected $loading = array();

    /**
     * Navigation config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#navigation
     */
    protected $navigation = array();

    /**
     * Pane config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#pane
     */
    protected $pane = array();

    /**
     * Plot options config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#plotOptions
     */
    protected $plotOptions = array();

    /**
     * Series config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#series
     */
    protected $series = array();

    /**
     * Subtitle config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#subtitle
     */
    protected $subtitle = array();

    /**
     * Title config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#title
     */
    protected $title = array();

    /**
     * Tooltip config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#tooltip
     */
    protected $tooltip = array();

    /**
     * X Axis config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#xAxis
     */
    protected $xAxis = array();

    /**
     * Y Axis config, as defined in the HighCharts API
     *
     * @var array
     * @link http://api.highcharts.com/highcharts#yAxis
     */
    protected $yAxis = array();

    /**
     * Set chart config array
     *
     * @param  array $chart
     * @return ChartInterface
     */
    public function setChart($chart)
    {
        $this->chart = $chart;
        return $this;
    }

    /**
     * Get chart config array
     *
     * @return array
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * Set colors config array
     *
     * @param  array $colors
     * @return ChartInterface
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Get colors config array
     *
     * @return array
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Set credits config array
     *
     * @param  array $credits
     * @return ChartInterface
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Get credits config array
     *
     * @return array
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set exporting config array
     *
     * @param  array $exporting
     * @return ChartInterface
     */
    public function setExporting($exporting)
    {
        $this->exporting = $exporting;
        return $this;
    }

    /**
     * Get exporting config array
     *
     * @return array
     */
    public function getExporting()
    {
        return $this->exporting;
    }

    /**
     * Set global config array
     *
     * @param  array $global
     * @return ChartInterface
     */
    public function setGlobal($global)
    {
        $this->global = $global;
        return $this;
    }

    /**
     * Get global config array
     *
     * @return array
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Set labels config array
     *
     * @param  array $labels
     * @return ChartInterface
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Get labels config array
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }


    /**
     * Set lang config array
     *
     * @param  array $lang
     * @return ChartInterface
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Get lang config array
     *
     * @return array
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set legend config array
     *
     * @param  array $legend
     * @return ChartInterface
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    /**
     * Get legend config array
     *
     * @return array
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * Set loading config array
     *
     * @param  array $loading
     * @return ChartInterface
     */
    public function setLoading($loading)
    {
        $this->loading = $loading;
        return $this;
    }

    /**
     * Get loading config array
     *
     * @return array
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set navigation config array
     *
     * @param  array $navigation
     * @return ChartInterface
     */
    public function setNavigation($navigation)
    {
        $this->navigation = $navigation;
        return $this;
    }

    /**
     * Get navigation config array
     *
     * @return array
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * Set pane config array
     *
     * @param  array $pane
     * @return ChartInterface
     */
    public function setPane($pane)
    {
        $this->pane = $pane;
        return $this;
    }

    /**
     * Get pane config array
     *
     * @return array
     */
    public function getPane()
    {
        return $this->pane;
    }

    /**
     * Set plotOptions config array
     *
     * @param  array $plotOptions
     * @return ChartInterface
     */
    public function setPlotOptions($plotOptions)
    {
        $this->plotOptions = $plotOptions;
        return $this;
    }

    /**
     * Get plotOptions config array
     *
     * @return array
     */
    public function getPlotOptions()
    {
        return $this->plotOptions;
    }

    /**
     * Set series config array
     *
     * @param  array $series
     * @return ChartInterface
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * Get series config array
     *
     * @return array
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set subtitle config array
     *
     * @param  array $subtitle
     * @return ChartInterface
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Get subtitle config array
     *
     * @return array
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set title config array
     *
     * @param  array $title
     * @return ChartInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title config array
     *
     * @return array
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set tooltip config array
     *
     * @param  array $tooltip
     * @return ChartInterface
     */
    public function setTooltip($tooltip)
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Get tooltip config array
     *
     * @return array
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * Set xAxis config array
     *
     * @param  array $xAxis
     * @return ChartInterface
     */
    public function setXAxis($xAxis)
    {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Get xAxis config array
     *
     * @return array
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * Set yAxis config array
     *
     * @param  array $yAxis
     * @return ChartInterface
     */
    public function setYAxis($yAxis)
    {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Get yAxis config array
     *
     * @return array
     */
    public function getYAxis()
    {
        return $this->yAxis;
    }

    /**
     * Get config jason
     *
     * @return string
     */
    public function getJson()
    {
        return json_encode($this->getConfig());
    }

    /**
     * Get config array
     *
     * @return array
     */
    public function getConfig()
    {
        $config = array(
            'chart'       => $this->chart,
            'colors'      => $this->colors,
            'credits'     => $this->credits,
            'exporting'   => $this->exporting,
            'global'      => $this->global,
            'labels'      => $this->labels,
            'lang'        => $this->lang,
            'legend'      => $this->legend,
            'loading'     => $this->loading,
            'navigation'  => $this->navigation,
            'pane'        => $this->pane,
            'plotOptions' => $this->plotOptions,
            'series'      => $this->series,
            'subtitle'    => $this->subtitle,
            'title'       => $this->title,
            'tooltip'     => $this->tooltip,
            'xAxis'       => $this->xAxis,
            'yAxis'       => $this->yAxis,
        );

        foreach ($config as $key => $value) {
            if (count($value) == 0) {
                unset($config[$key]);
            }
        }

        return $config;
    }

    /**
     * Set a chart attribute.
     * 
     * @param string $attribute  attribute name
     * @param array  $value      attribute value
     * 
     * @return void
     */
    public function set($attribute, $value)
    {
        $this->$attribute = $value;
        return $this;
    }

    /**
     * Get a chart attribute.
     * 
     * @param string $attribute  attribute name
     *
     * @return mixed
     */
    public function get($attribute)
    {
        return $this->$attribute;
    }

    /**
     * Add a series to the chart
     *
     * @param string $name   series name
     * @param array  $data series values
     *
     * @return ChartInterface
     */
    public function addSeries($name, $data)
    {
        $series = $this->series;
        $new = array('name' => $name, 'data' => $data);
        $series[] = $new;
        $this->series = $series;

        return $this;
    }

    /**
     * Remove a named series from the chart
     *
     * @param string $name series name to remove
     */
    public function removeSeries($name)
    {
        $series = $this->series;
        foreach ($series as $key => $value) {
            if ($value['name'] === $name) {
                unset($series[$key]);
            }
        }

        $this->series = $series;
    }
}