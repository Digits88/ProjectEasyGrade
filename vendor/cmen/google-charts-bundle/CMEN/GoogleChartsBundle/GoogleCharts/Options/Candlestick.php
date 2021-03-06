<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Candlestick
{
    /**
     * If true, rising candles will appear hollow and falling candles will appear solid, otherwise, the opposite.
     *
     * @var boolean
     */
    protected $hollowIsRising;

    /**
     * @var FallingColor
     */
    protected $fallingColor;

    /**
     * @var RisingColor
     */
    protected $risingColor;


    public function __construct()
    {
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
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
     * @param boolean $hollowIsRising
     *
     * @return Candlestick
     */
    public function setHollowIsRising($hollowIsRising)
    {
        $this->hollowIsRising = $hollowIsRising;

        return $this;
    }
}
