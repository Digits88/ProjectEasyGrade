<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class TitleTextStyle
{
    /**
     * The color can be any HTML color string, for example: 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $fontName;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @var boolean
     */
    protected $bold;

    /**
     * @var boolean
     */
    protected $italic;

    /**
     * @param string $color
     *
     * @return TitleTextStyle
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return TitleTextStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return TitleTextStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param boolean $bold
     *
     * @return TitleTextStyle
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * @param boolean $italic
     *
     * @return TitleTextStyle
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
