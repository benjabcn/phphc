<?php

namespace Petesiss\PhpHc\Renderer;

use Petesiss\PhpHc\ChartInterface;

interface RendererInterface
{
    public function render(ChartInterface $chart);
}