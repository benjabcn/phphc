#WIP lib to help build Highcharts

Wrapper for highcharts js lib, allowing for easy config of charts via php arrays.

```php
<?php

use Petesiss\PhpHc\ChartFactory;
use Petesiss\PhpHc\Renderer\Renderer;

$factory = new ChartFactory();

$chart = $factory->create()
    ->setChart(array('renderTo' => 'container', 'type' => 'line'))
    ->setTitle(array('text' => 'Traffic Flow'))
    ->setXAxis(array('categories' => array('Mon', 'Tue', 'Wed', 'Thurs', 'Fri')))
    ->setYAxis(array('title' => array('text' => 'Vehicles per minute')))
;

// add data series
$chart->addSeries('Main Street', array(44, 30, 34, 29, 48));
$chart->addSeries('Tower Road', array(29, 24, 27, 24, 28));

$renderer = new Renderer();

echo $renderer->render($chart);

```

Once a chart is created it can be configured using php arrays matching the highcharts API (http://api.highcharts.com/highcharts). There are accessor methods for each of the top level items - some of these shown in the example above.

The script block for the chart js can be easily rendered using the renderer as in the example. For more flexability just take the json from `$chart->getJson()` and deal with the rendering as required.

##Installation

Use composer to install and the autoloading is taken care of.

####Add to your composer.json
```js
{
    "require": {
        "petesiss/phphc": "dev-master"
    }
}
```

####Then update your project dependencies

```bash
php composer.phar update petesiss/phphc
```

Alternatively the lib follows the PSR-0 convention so you can clone the repo and use any compatible autoloader.

This lib doesnt redistribute the highcharts js - you need to include that in your project yourself. It is currently available via the highcharts CDN (http://code.highcharts.com).



