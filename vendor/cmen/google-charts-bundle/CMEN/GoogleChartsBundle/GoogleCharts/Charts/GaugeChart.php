<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\GaugeChart\GaugeChartOptions;

/**
 * @author Christophe Meneses
 */
class GaugeChart extends Chart
{
    /**
     * @var GaugeChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new GaugeChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'Gauge';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    public function getPackage()
    {
        return 'gauge';
    }

    /**
     * @return GaugeChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options GaugeChartOptions
     *
     * @return GaugeChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
