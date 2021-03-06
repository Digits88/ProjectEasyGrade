<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\TableChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsDraw;

/**
 * @author Christophe Meneses
 */
class TableChartOptions extends ChartOptionsDraw
{
    /**
     * If set to true, formatted values of cells that include HTML tags will be rendered as HTML. If set to false,
     * most custom formatters will not work properly.
     *
     * @var boolean
     */
    protected $allowHtml;

    /**
     * Determines if alternating color style will be assigned to odd and even rows.
     *
     * @var boolean
     */
    protected $alternatingRowStyle;

    /**
     * @var CssClassNames
     */
    protected $cssClassNames;

    /**
     * The row number for the first row in the dataTable. Used only if showRowNumber is true.
     *
     * @var int
     */
    protected $firstRowNumber;

    /**
     * The number of columns from the left that will be frozen. These columns will remain in place when scrolling
     * the remaining columns horizontally. If showRowNumber is false, setting frozenColumns to 0 will appear the same
     * as if set to null, but if showRowNumber is set to true, the row number column will be frozen.
     *
     * @var int
     */
    protected $frozenColumns;

    /**
     * Sets the height of the visualization's container element. You can use standard HTML units (for example, '100px',
     * '80em', '60'). If no units are specified the number is assumed to be pixels. If not specified, the browser will
     * adjust the height automatically to fit the table, shrinking as much as possible in the process; if set smaller
     * than the height required, the table will add a vertical scroll bar (the header row is also frozen). If set to
     * '100%', the table will expand as much as possible into the container element.
     *
     * @var string
     */
    protected $height;

    /**
     *  If and how to enable paging through the data. Choose one of the following string values :
     *    'enable' - The table will include page-forward and page-back buttons. Clicking on these buttons will perform
     *     the paging operation and change the displayed page. You might want to also set the pageSize option.
     *    'event' - The table will include page-forward and page-back buttons, but clicking them will trigger a 'page'
     *     event and will not change the displayed page. This option should be used when the code implements its own
     *     page turning logic. See the TableQueryWrapper example for an example of how to handle paging events manually.
     *    'disable' - [Default] Paging is not supported.
     *
     * @var string
     */
    protected $page;

    /**
     * The number of rows in each page, when paging is enabled with the page option.
     *
     * @var int
     */
    protected $pageSize;

    /**
     * Sets a specified option for the paging buttons. The options are as follows :
     *    'both' - enable prev and next buttons
     *    'prev' - only prev button is enabled
     *    'next' - only next button is enabled
     *    'auto' - the buttons are enabled according to the current page. On the first page only next is shown.
     *          On the last page only prev is shown. Otherwise both are enabled.
     *    number - the number of paging buttons to show. This explicit number will override computed number
     *          from pageSize.
     *
     * @var string|int
     */
    protected $pagingButtons;

    /**
     * Adds basic support for right-to-left languages (such as Arabic or Hebrew) by reversing the column order of the
     * table, so that column zero is the rightmost column, and the last column is the leftmost column. This does not
     * affect the column index in the underlying data, only the order of display. Full bi-directional (BiDi) language
     * display is not supported by the table visualization even with this option. This option will be ignored if you
     * enable paging (using the page option), or if the table has scroll bars because you have specified height and
     * width options smaller than the required table size.
     *
     * @var boolean
     */
    protected $rtlTable;

    /**
     * Sets the horizontal scrolling position, in pixels, if the table has horizontal scroll bars because you have
     * set the width property. The table will open scrolled that many pixels past the leftmost column.
     *
     * @var int
     */
    protected $scrollLeftStartPosition;

    /**
     * If set to true, shows the row number as the first column of the table.
     *
     * @var boolean
     */
    protected $showRowNumber;

    /**
     * If and how to sort columns when the user clicks a column heading. If sorting is enabled, consider setting the
     * sortAscending and sortColumn properties as well. Choose one of the following string values :
     *    'enable' - [Default] Users can click on column headers to sort by the clicked column. When users click on
     *          the column header, the rows will be automatically sorted, and a 'sort' event will be triggered.
     *    'event' - When users click on the column header, a 'sort' event will be triggered, but the rows will not
     *          be automatically sorted. This option should be used when the page implements its own sort. See the
     *          TableQueryWrapper example for an example of how to handle sorting events manually.
     *    'disable' - Clicking a column header has no effect.
     *
     * @var string
     */
    protected $sort;

    /**
     * The order in which the initial sort column is sorted. True for ascending, false for descending. Ignored if
     * sortColumn is not specified.
     *
     * @var boolean
     */
    protected $sortAscending;

    /**
     * An index of a column in the data table, by which the table is initially sorted. The column will be marked with
     * a small arrow indicating the sort order.
     *
     * @var int
     */
    protected $sortColumn;

    /**
     * The first table page to display. Used only if page is in mode enable/event.
     *
     * @var int
     */
    protected $startPage;

    /**
     * Sets the width of the visualization's container element. You can use standard HTML units (for example, '100px',
     * '80em', '60'). If no units are specified the number is assumed to be pixels. If not specified, the browser will
     * adjust the width automatically to fit the table, shrinking as much as possible in the process; if set smaller
     * than the width required, the table will add a horizontal scroll bar. If set to '100%', the table will expand as
     * much as possible into the container element.
     *
     * @var string
     */
    protected $width;


    public function __construct()
    {
        parent::__construct();

        $this->cssClassNames = new CssClassNames();
    }


    /**
     * @return CssClassNames
     */
    public function getCssClassNames()
    {
        return $this->cssClassNames;
    }

    /**
     * @param boolean $allowHtml
     *
     * @return TableChartOptions
     */
    public function setAllowHtml($allowHtml)
    {
        $this->allowHtml = $allowHtml;

        return $this;
    }

    /**
     * @param boolean $alternatingRowStyle
     *
     * @return TableChartOptions
     */
    public function setAlternatingRowStyle($alternatingRowStyle)
    {
        $this->alternatingRowStyle = $alternatingRowStyle;

        return $this;
    }

    /**
     * @param int $firstRowNumber
     *
     * @return TableChartOptions
     */
    public function setFirstRowNumber($firstRowNumber)
    {
        $this->firstRowNumber = $firstRowNumber;

        return $this;
    }

    /**
     * @param int $frozenColumns
     *
     * @return TableChartOptions
     */
    public function setFrozenColumns($frozenColumns)
    {
        $this->frozenColumns = $frozenColumns;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return TableChartOptions
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return TableChartOptions
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @param int $pageSize
     *
     * @return TableChartOptions
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * @param int|string $pagingButtons
     *
     * @return TableChartOptions
     */
    public function setPagingButtons($pagingButtons)
    {
        $this->pagingButtons = $pagingButtons;

        return $this;
    }

    /**
     * @param boolean $rtlTable
     *
     * @return TableChartOptions
     */
    public function setRtlTable($rtlTable)
    {
        $this->rtlTable = $rtlTable;

        return $this;
    }

    /**
     * @param int $scrollLeftStartPosition
     *
     * @return TableChartOptions
     */
    public function setScrollLeftStartPosition($scrollLeftStartPosition)
    {
        $this->scrollLeftStartPosition = $scrollLeftStartPosition;

        return $this;
    }

    /**
     * @param boolean $showRowNumber
     *
     * @return TableChartOptions
     */
    public function setShowRowNumber($showRowNumber)
    {
        $this->showRowNumber = $showRowNumber;

        return $this;
    }

    /**
     * @param string $sort
     *
     * @return TableChartOptions
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param boolean $sortAscending
     *
     * @return TableChartOptions
     */
    public function setSortAscending($sortAscending)
    {
        $this->sortAscending = $sortAscending;

        return $this;
    }

    /**
     * @param int $sortColumn
     *
     * @return TableChartOptions
     */
    public function setSortColumn($sortColumn)
    {
        $this->sortColumn = $sortColumn;

        return $this;
    }

    /**
     * @param int $startPage
     *
     * @return TableChartOptions
     */
    public function setStartPage($startPage)
    {
        $this->startPage = $startPage;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return TableChartOptions
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
