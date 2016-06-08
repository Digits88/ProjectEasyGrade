<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MediumTextStyle extends TextStyle
{
    /**
     * @var boolean
     */
    protected $bold;

    /**
     * @var boolean
     */
    protected $italic;

    /**
     * @param boolean $bold
     *
     * @return MediumTextStyle
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * @param boolean $italic
     *
     * @return MediumTextStyle
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
