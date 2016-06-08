<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FallingColor;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\RisingColor;

/**
 * @author Christophe Meneses
 */
class Series extends LineSeries
{
    /**
     * @var Annotations
     */
    protected $annotations;

    /**
     * Overrides the global areaOpacity for this series.
     *
     * @var float
     */
    protected $areaOpacity;

    /**
     * Overrides the global curveType value for this series.
     *
     * @var string
     */
    protected $curveType;

    /**
     * @var FallingColor
     */
    protected $fallingColor;

    /**
     * @var RisingColor
     */
    protected $risingColor;

    /**
     * The type of marker for this series. Valid values are 'line', 'area', 'bars', 'candlesticks' and 'steppedArea'.
     * Note that bars are actually vertical bars (columns). The default value is specified by the chart's seriesType
     * option.
     *
     * @var string
     */
    protected $type;


    public function __construct()
    {
        $this->annotations = new Annotations();
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
    }


    /**
     * @return Annotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @return FallingColor
     */
    public function getFallingColor()
    {
        return $this->fallingColor;
    }

    /**
     * @return RisingColor
     */
    public function getRisingColor()
    {
        return $this->risingColor;
    }

    /**
     * @param string $type
     *
     * @return Series
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param float $areaOpacity
     *
     * @return Series
     */
    public function setAreaOpacity($areaOpacity)
    {
        $this->areaOpacity = $areaOpacity;

        return $this;
    }

    /**
     * @param string $curveType
     *
     * @return Series
     */
    public function setCurveType($curveType)
    {
        $this->curveType = $curveType;

        return $this;
    }
}
