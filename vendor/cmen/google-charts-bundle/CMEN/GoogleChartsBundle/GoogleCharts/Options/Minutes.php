<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Minutes
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return Minutes
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
