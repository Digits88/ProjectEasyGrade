<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Selected
{
    /**
     * Color, expressed as either a color name (e.g., "blue") or an RGB value (e.g., "#adf").
     *
     * @var string
     */
    protected $color;

    /**
     * Opacity, with 0.0 being fully transparent and 1.0 fully opaque.
     *
     * @var float
     */
    protected $opacity;

    /**
     * @param string $color
     *
     * @return Selected
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param float $opacity
     *
     * @return Selected
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }
}
