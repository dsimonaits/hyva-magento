<?php
namespace Magento\Search\Block\Adminhtml\Dashboard\Top;

/**
 * Interceptor class for @see \Magento\Search\Block\Adminhtml\Dashboard\Top
 */
class Interceptor extends \Magento\Search\Block\Adminhtml\Dashboard\Top implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\Module\Manager $moduleManager, \Magento\Search\Model\ResourceModel\Query\CollectionFactory $queriesFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $moduleManager, $queriesFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getRowUrl($row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowUrl');
        return $pluginInfo ? $this->___callPlugins('getRowUrl', func_get_args(), $pluginInfo) : parent::getRowUrl($row);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnSet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnSet');
        return $pluginInfo ? $this->___callPlugins('getColumnSet', func_get_args(), $pluginInfo) : parent::getColumnSet();
    }

    /**
     * {@inheritdoc}
     */
    public function getExportButtonHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExportButtonHtml');
        return $pluginInfo ? $this->___callPlugins('getExportButtonHtml', func_get_args(), $pluginInfo) : parent::getExportButtonHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function addExportType($url, $label)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addExportType');
        return $pluginInfo ? $this->___callPlugins('addExportType', func_get_args(), $pluginInfo) : parent::addExportType($url, $label);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumn($columnId, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumn');
        return $pluginInfo ? $this->___callPlugins('addColumn', func_get_args(), $pluginInfo) : parent::addColumn($columnId, $column);
    }

    /**
     * {@inheritdoc}
     */
    public function removeColumn($columnId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeColumn');
        return $pluginInfo ? $this->___callPlugins('removeColumn', func_get_args(), $pluginInfo) : parent::removeColumn($columnId);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumnAfter($columnId, $column, $after)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumnAfter');
        return $pluginInfo ? $this->___callPlugins('addColumnAfter', func_get_args(), $pluginInfo) : parent::addColumnAfter($columnId, $column, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumnsOrder($columnId, $after)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumnsOrder');
        return $pluginInfo ? $this->___callPlugins('addColumnsOrder', func_get_args(), $pluginInfo) : parent::addColumnsOrder($columnId, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnsOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnsOrder');
        return $pluginInfo ? $this->___callPlugins('getColumnsOrder', func_get_args(), $pluginInfo) : parent::getColumnsOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function sortColumnsByOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sortColumnsByOrder');
        return $pluginInfo ? $this->___callPlugins('sortColumnsByOrder', func_get_args(), $pluginInfo) : parent::sortColumnsByOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastColumnId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastColumnId');
        return $pluginInfo ? $this->___callPlugins('getLastColumnId', func_get_args(), $pluginInfo) : parent::getLastColumnId();
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtml');
        return $pluginInfo ? $this->___callPlugins('getHtml', func_get_args(), $pluginInfo) : parent::getHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getMassactionIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMassactionIdField');
        return $pluginInfo ? $this->___callPlugins('getMassactionIdField', func_get_args(), $pluginInfo) : parent::getMassactionIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function setMassactionIdField($idField)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMassactionIdField');
        return $pluginInfo ? $this->___callPlugins('setMassactionIdField', func_get_args(), $pluginInfo) : parent::setMassactionIdField($idField);
    }

    /**
     * {@inheritdoc}
     */
    public function getMassactionIdFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMassactionIdFilter');
        return $pluginInfo ? $this->___callPlugins('getMassactionIdFilter', func_get_args(), $pluginInfo) : parent::getMassactionIdFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function setMassactionIdFilter($idFilter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMassactionIdFilter');
        return $pluginInfo ? $this->___callPlugins('setMassactionIdFilter', func_get_args(), $pluginInfo) : parent::setMassactionIdFilter($idFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function getMassactionBlockName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMassactionBlockName');
        return $pluginInfo ? $this->___callPlugins('getMassactionBlockName', func_get_args(), $pluginInfo) : parent::getMassactionBlockName();
    }

    /**
     * {@inheritdoc}
     */
    public function setMassactionBlockName($blockName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMassactionBlockName');
        return $pluginInfo ? $this->___callPlugins('setMassactionBlockName', func_get_args(), $pluginInfo) : parent::setMassactionBlockName($blockName);
    }

    /**
     * {@inheritdoc}
     */
    public function getMassactionBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMassactionBlock');
        return $pluginInfo ? $this->___callPlugins('getMassactionBlock', func_get_args(), $pluginInfo) : parent::getMassactionBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getMassactionBlockHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMassactionBlockHtml');
        return $pluginInfo ? $this->___callPlugins('getMassactionBlockHtml', func_get_args(), $pluginInfo) : parent::getMassactionBlockHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubTotalColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubTotalColumns');
        return $pluginInfo ? $this->___callPlugins('getSubTotalColumns', func_get_args(), $pluginInfo) : parent::getSubTotalColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function shouldRenderCell($item, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderCell');
        return $pluginInfo ? $this->___callPlugins('shouldRenderCell', func_get_args(), $pluginInfo) : parent::shouldRenderCell($item, $column);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyCellLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyCellLabel');
        return $pluginInfo ? $this->___callPlugins('getEmptyCellLabel', func_get_args(), $pluginInfo) : parent::getEmptyCellLabel();
    }

    /**
     * {@inheritdoc}
     */
    public function setEmptyCellLabel($label)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmptyCellLabel');
        return $pluginInfo ? $this->___callPlugins('setEmptyCellLabel', func_get_args(), $pluginInfo) : parent::setEmptyCellLabel($label);
    }

    /**
     * {@inheritdoc}
     */
    public function getMultipleRows($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMultipleRows');
        return $pluginInfo ? $this->___callPlugins('getMultipleRows', func_get_args(), $pluginInfo) : parent::getMultipleRows($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getMultipleRowColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMultipleRowColumns');
        return $pluginInfo ? $this->___callPlugins('getMultipleRowColumns', func_get_args(), $pluginInfo) : parent::getMultipleRowColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function shouldRenderSubTotal($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderSubTotal');
        return $pluginInfo ? $this->___callPlugins('shouldRenderSubTotal', func_get_args(), $pluginInfo) : parent::shouldRenderSubTotal($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getRowspan($item, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowspan');
        return $pluginInfo ? $this->___callPlugins('getRowspan', func_get_args(), $pluginInfo) : parent::getRowspan($item, $column);
    }

    /**
     * {@inheritdoc}
     */
    public function isColumnGrouped($column, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isColumnGrouped');
        return $pluginInfo ? $this->___callPlugins('isColumnGrouped', func_get_args(), $pluginInfo) : parent::isColumnGrouped($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function shouldRenderEmptyCell($item, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderEmptyCell');
        return $pluginInfo ? $this->___callPlugins('shouldRenderEmptyCell', func_get_args(), $pluginInfo) : parent::shouldRenderEmptyCell($item, $column);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyCellColspan()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyCellColspan');
        return $pluginInfo ? $this->___callPlugins('getEmptyCellColspan', func_get_args(), $pluginInfo) : parent::getEmptyCellColspan();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubTotalItem($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubTotalItem');
        return $pluginInfo ? $this->___callPlugins('getSubTotalItem', func_get_args(), $pluginInfo) : parent::getSubTotalItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnCount');
        return $pluginInfo ? $this->___callPlugins('getColumnCount', func_get_args(), $pluginInfo) : parent::getColumnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function setHeadersVisibility($visible = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeadersVisibility');
        return $pluginInfo ? $this->___callPlugins('setHeadersVisibility', func_get_args(), $pluginInfo) : parent::setHeadersVisibility($visible);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeadersVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeadersVisibility');
        return $pluginInfo ? $this->___callPlugins('getHeadersVisibility', func_get_args(), $pluginInfo) : parent::getHeadersVisibility();
    }

    /**
     * {@inheritdoc}
     */
    public function setFilterVisibility($visible = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilterVisibility');
        return $pluginInfo ? $this->___callPlugins('setFilterVisibility', func_get_args(), $pluginInfo) : parent::setFilterVisibility($visible);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilterVisibility');
        return $pluginInfo ? $this->___callPlugins('getFilterVisibility', func_get_args(), $pluginInfo) : parent::getFilterVisibility();
    }

    /**
     * {@inheritdoc}
     */
    public function setEmptyText($text)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmptyText');
        return $pluginInfo ? $this->___callPlugins('setEmptyText', func_get_args(), $pluginInfo) : parent::setEmptyText($text);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyText()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyText');
        return $pluginInfo ? $this->___callPlugins('getEmptyText', func_get_args(), $pluginInfo) : parent::getEmptyText();
    }

    /**
     * {@inheritdoc}
     */
    public function setEmptyTextClass($cssClass)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmptyTextClass');
        return $pluginInfo ? $this->___callPlugins('setEmptyTextClass', func_get_args(), $pluginInfo) : parent::setEmptyTextClass($cssClass);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyTextClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyTextClass');
        return $pluginInfo ? $this->___callPlugins('getEmptyTextClass', func_get_args(), $pluginInfo) : parent::getEmptyTextClass();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsCollapsed($isCollapsed)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsCollapsed');
        return $pluginInfo ? $this->___callPlugins('setIsCollapsed', func_get_args(), $pluginInfo) : parent::setIsCollapsed($isCollapsed);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsCollapsed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsCollapsed');
        return $pluginInfo ? $this->___callPlugins('getIsCollapsed', func_get_args(), $pluginInfo) : parent::getIsCollapsed();
    }

    /**
     * {@inheritdoc}
     */
    public function _exportIterateCollection($callback, array $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_exportIterateCollection');
        return $pluginInfo ? $this->___callPlugins('_exportIterateCollection', func_get_args(), $pluginInfo) : parent::_exportIterateCollection($callback, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getCsvFile()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCsvFile');
        return $pluginInfo ? $this->___callPlugins('getCsvFile', func_get_args(), $pluginInfo) : parent::getCsvFile();
    }

    /**
     * {@inheritdoc}
     */
    public function getCsv()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCsv');
        return $pluginInfo ? $this->___callPlugins('getCsv', func_get_args(), $pluginInfo) : parent::getCsv();
    }

    /**
     * {@inheritdoc}
     */
    public function getXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXml');
        return $pluginInfo ? $this->___callPlugins('getXml', func_get_args(), $pluginInfo) : parent::getXml();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowRecord(\Magento\Framework\DataObject $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowRecord');
        return $pluginInfo ? $this->___callPlugins('getRowRecord', func_get_args(), $pluginInfo) : parent::getRowRecord($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getExcelFile($sheetName = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExcelFile');
        return $pluginInfo ? $this->___callPlugins('getExcelFile', func_get_args(), $pluginInfo) : parent::getExcelFile($sheetName);
    }

    /**
     * {@inheritdoc}
     */
    public function getExcel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExcel');
        return $pluginInfo ? $this->___callPlugins('getExcel', func_get_args(), $pluginInfo) : parent::getExcel();
    }

    /**
     * {@inheritdoc}
     */
    public function getExportTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExportTypes');
        return $pluginInfo ? $this->___callPlugins('getExportTypes', func_get_args(), $pluginInfo) : parent::getExportTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function setCollection($collection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCollection');
        return $pluginInfo ? $this->___callPlugins('setCollection', func_get_args(), $pluginInfo) : parent::setCollection($collection);
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function setCountSubTotals($flag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCountSubTotals');
        return $pluginInfo ? $this->___callPlugins('setCountSubTotals', func_get_args(), $pluginInfo) : parent::setCountSubTotals($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountSubTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountSubTotals');
        return $pluginInfo ? $this->___callPlugins('getCountSubTotals', func_get_args(), $pluginInfo) : parent::getCountSubTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function setSubTotals(array $items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSubTotals');
        return $pluginInfo ? $this->___callPlugins('setSubTotals', func_get_args(), $pluginInfo) : parent::setSubTotals($items);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubTotals');
        return $pluginInfo ? $this->___callPlugins('getSubTotals', func_get_args(), $pluginInfo) : parent::getSubTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function getMainButtonsHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainButtonsHtml');
        return $pluginInfo ? $this->___callPlugins('getMainButtonsHtml', func_get_args(), $pluginInfo) : parent::getMainButtonsHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getExportBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExportBlock');
        return $pluginInfo ? $this->___callPlugins('getExportBlock', func_get_args(), $pluginInfo) : parent::getExportBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumns');
        return $pluginInfo ? $this->___callPlugins('getColumns', func_get_args(), $pluginInfo) : parent::getColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumn($columnId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumn');
        return $pluginInfo ? $this->___callPlugins('getColumn', func_get_args(), $pluginInfo) : parent::getColumn($columnId);
    }

    /**
     * {@inheritdoc}
     */
    public function getPreparedCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreparedCollection');
        return $pluginInfo ? $this->___callPlugins('getPreparedCollection', func_get_args(), $pluginInfo) : parent::getPreparedCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getVarNameLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVarNameLimit');
        return $pluginInfo ? $this->___callPlugins('getVarNameLimit', func_get_args(), $pluginInfo) : parent::getVarNameLimit();
    }

    /**
     * {@inheritdoc}
     */
    public function getVarNamePage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVarNamePage');
        return $pluginInfo ? $this->___callPlugins('getVarNamePage', func_get_args(), $pluginInfo) : parent::getVarNamePage();
    }

    /**
     * {@inheritdoc}
     */
    public function getVarNameSort()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVarNameSort');
        return $pluginInfo ? $this->___callPlugins('getVarNameSort', func_get_args(), $pluginInfo) : parent::getVarNameSort();
    }

    /**
     * {@inheritdoc}
     */
    public function getVarNameDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVarNameDir');
        return $pluginInfo ? $this->___callPlugins('getVarNameDir', func_get_args(), $pluginInfo) : parent::getVarNameDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getVarNameFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVarNameFilter');
        return $pluginInfo ? $this->___callPlugins('getVarNameFilter', func_get_args(), $pluginInfo) : parent::getVarNameFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function setVarNameLimit($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVarNameLimit');
        return $pluginInfo ? $this->___callPlugins('setVarNameLimit', func_get_args(), $pluginInfo) : parent::setVarNameLimit($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setVarNamePage($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVarNamePage');
        return $pluginInfo ? $this->___callPlugins('setVarNamePage', func_get_args(), $pluginInfo) : parent::setVarNamePage($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setVarNameSort($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVarNameSort');
        return $pluginInfo ? $this->___callPlugins('setVarNameSort', func_get_args(), $pluginInfo) : parent::setVarNameSort($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setVarNameDir($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVarNameDir');
        return $pluginInfo ? $this->___callPlugins('setVarNameDir', func_get_args(), $pluginInfo) : parent::setVarNameDir($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setVarNameFilter($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVarNameFilter');
        return $pluginInfo ? $this->___callPlugins('setVarNameFilter', func_get_args(), $pluginInfo) : parent::setVarNameFilter($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setPagerVisibility($visible = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPagerVisibility');
        return $pluginInfo ? $this->___callPlugins('setPagerVisibility', func_get_args(), $pluginInfo) : parent::setPagerVisibility($visible);
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerVisibility');
        return $pluginInfo ? $this->___callPlugins('getPagerVisibility', func_get_args(), $pluginInfo) : parent::getPagerVisibility();
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageBlockVisibility($visible = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMessageBlockVisibility');
        return $pluginInfo ? $this->___callPlugins('setMessageBlockVisibility', func_get_args(), $pluginInfo) : parent::setMessageBlockVisibility($visible);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageBlockVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessageBlockVisibility');
        return $pluginInfo ? $this->___callPlugins('getMessageBlockVisibility', func_get_args(), $pluginInfo) : parent::getMessageBlockVisibility();
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultLimit($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultLimit');
        return $pluginInfo ? $this->___callPlugins('setDefaultLimit', func_get_args(), $pluginInfo) : parent::setDefaultLimit($limit);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultPage($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultPage');
        return $pluginInfo ? $this->___callPlugins('setDefaultPage', func_get_args(), $pluginInfo) : parent::setDefaultPage($page);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultSort($sort)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultSort');
        return $pluginInfo ? $this->___callPlugins('setDefaultSort', func_get_args(), $pluginInfo) : parent::setDefaultSort($sort);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultDir($dir)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultDir');
        return $pluginInfo ? $this->___callPlugins('setDefaultDir', func_get_args(), $pluginInfo) : parent::setDefaultDir($dir);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultFilter($filter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultFilter');
        return $pluginInfo ? $this->___callPlugins('setDefaultFilter', func_get_args(), $pluginInfo) : parent::setDefaultFilter($filter);
    }

    /**
     * {@inheritdoc}
     */
    public function canDisplayContainer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canDisplayContainer');
        return $pluginInfo ? $this->___callPlugins('canDisplayContainer', func_get_args(), $pluginInfo) : parent::canDisplayContainer();
    }

    /**
     * {@inheritdoc}
     */
    public function getGridUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGridUrl');
        return $pluginInfo ? $this->___callPlugins('getGridUrl', func_get_args(), $pluginInfo) : parent::getGridUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getAbsoluteGridUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAbsoluteGridUrl');
        return $pluginInfo ? $this->___callPlugins('getAbsoluteGridUrl', func_get_args(), $pluginInfo) : parent::getAbsoluteGridUrl($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getParam($paramName, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParam');
        return $pluginInfo ? $this->___callPlugins('getParam', func_get_args(), $pluginInfo) : parent::getParam($paramName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setSaveParametersInSession($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSaveParametersInSession');
        return $pluginInfo ? $this->___callPlugins('setSaveParametersInSession', func_get_args(), $pluginInfo) : parent::setSaveParametersInSession($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsObjectName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsObjectName');
        return $pluginInfo ? $this->___callPlugins('getJsObjectName', func_get_args(), $pluginInfo) : parent::getJsObjectName();
    }

    /**
     * {@inheritdoc}
     */
    public function setCountTotals($count = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCountTotals');
        return $pluginInfo ? $this->___callPlugins('setCountTotals', func_get_args(), $pluginInfo) : parent::setCountTotals($count);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountTotals');
        return $pluginInfo ? $this->___callPlugins('getCountTotals', func_get_args(), $pluginInfo) : parent::getCountTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function setTotals(\Magento\Framework\DataObject $totals)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTotals');
        return $pluginInfo ? $this->___callPlugins('setTotals', func_get_args(), $pluginInfo) : parent::setTotals($totals);
    }

    /**
     * {@inheritdoc}
     */
    public function getTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotals');
        return $pluginInfo ? $this->___callPlugins('getTotals', func_get_args(), $pluginInfo) : parent::getTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function getResetFilterButtonHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResetFilterButtonHtml');
        return $pluginInfo ? $this->___callPlugins('getResetFilterButtonHtml', func_get_args(), $pluginInfo) : parent::getResetFilterButtonHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchButtonHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchButtonHtml');
        return $pluginInfo ? $this->___callPlugins('getSearchButtonHtml', func_get_args(), $pluginInfo) : parent::getSearchButtonHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getSuffixId($suffix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuffixId');
        return $pluginInfo ? $this->___callPlugins('getSuffixId', func_get_args(), $pluginInfo) : parent::getSuffixId($suffix);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlId');
        return $pluginInfo ? $this->___callPlugins('getHtmlId', func_get_args(), $pluginInfo) : parent::getHtmlId();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentUrl');
        return $pluginInfo ? $this->___callPlugins('getCurrentUrl', func_get_args(), $pluginInfo) : parent::getCurrentUrl($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonHtml($label, $onclick, $class = '', $buttonId = null, $dataAttr = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getButtonHtml');
        return $pluginInfo ? $this->___callPlugins('getButtonHtml', func_get_args(), $pluginInfo) : parent::getButtonHtml($label, $onclick, $class, $buttonId, $dataAttr);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormKey');
        return $pluginInfo ? $this->___callPlugins('getFormKey', func_get_args(), $pluginInfo) : parent::getFormKey();
    }

    /**
     * {@inheritdoc}
     */
    public function isOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOutputEnabled');
        return $pluginInfo ? $this->___callPlugins('isOutputEnabled', func_get_args(), $pluginInfo) : parent::isOutputEnabled($moduleName);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorization()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthorization');
        return $pluginInfo ? $this->___callPlugins('getAuthorization', func_get_args(), $pluginInfo) : parent::getAuthorization();
    }

    /**
     * {@inheritdoc}
     */
    public function getToolbar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getToolbar');
        return $pluginInfo ? $this->___callPlugins('getToolbar', func_get_args(), $pluginInfo) : parent::getToolbar();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateContext');
        return $pluginInfo ? $this->___callPlugins('setTemplateContext', func_get_args(), $pluginInfo) : parent::setTemplateContext($templateContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        return $pluginInfo ? $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo) : parent::getTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        return $pluginInfo ? $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo) : parent::setTemplate($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFile');
        return $pluginInfo ? $this->___callPlugins('getTemplateFile', func_get_args(), $pluginInfo) : parent::getTemplateFile($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getArea');
        return $pluginInfo ? $this->___callPlugins('getArea', func_get_args(), $pluginInfo) : parent::getArea();
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        return $pluginInfo ? $this->___callPlugins('assign', func_get_args(), $pluginInfo) : parent::assign($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        return $pluginInfo ? $this->___callPlugins('fetchView', func_get_args(), $pluginInfo) : parent::fetchView($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getObjectData');
        return $pluginInfo ? $this->___callPlugins('getObjectData', func_get_args(), $pluginInfo) : parent::getObjectData($object, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        return $pluginInfo ? $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo) : parent::getCacheKeyInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        return $pluginInfo ? $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo) : parent::getJsLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentBlock');
        return $pluginInfo ? $this->___callPlugins('getParentBlock', func_get_args(), $pluginInfo) : parent::getParentBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        return $pluginInfo ? $this->___callPlugins('getLayout', func_get_args(), $pluginInfo) : parent::getLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNameInLayout');
        return $pluginInfo ? $this->___callPlugins('setNameInLayout', func_get_args(), $pluginInfo) : parent::setNameInLayout($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        return $pluginInfo ? $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo) : parent::getChildNames();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        return $pluginInfo ? $this->___callPlugins('setChild', func_get_args(), $pluginInfo) : parent::setChild($alias, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        return $pluginInfo ? $this->___callPlugins('addChild', func_get_args(), $pluginInfo) : parent::addChild($alias, $block, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        return $pluginInfo ? $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo) : parent::unsetChild($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetCallChild');
        return $pluginInfo ? $this->___callPlugins('unsetCallChild', func_get_args(), $pluginInfo) : parent::unsetCallChild($alias, $callback, $result, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChildren');
        return $pluginInfo ? $this->___callPlugins('unsetChildren', func_get_args(), $pluginInfo) : parent::unsetChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        return $pluginInfo ? $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo) : parent::getChildBlock($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildHtml', func_get_args(), $pluginInfo) : parent::getChildHtml($alias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildChildHtml', func_get_args(), $pluginInfo) : parent::getChildChildHtml($alias, $childChildAlias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockHtml');
        return $pluginInfo ? $this->___callPlugins('getBlockHtml', func_get_args(), $pluginInfo) : parent::getBlockHtml($name);
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        return $pluginInfo ? $this->___callPlugins('insert', func_get_args(), $pluginInfo) : parent::insert($element, $siblingName, $after, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'append');
        return $pluginInfo ? $this->___callPlugins('append', func_get_args(), $pluginInfo) : parent::append($element, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        return $pluginInfo ? $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo) : parent::getGroupChildNames($groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildData');
        return $pluginInfo ? $this->___callPlugins('getChildData', func_get_args(), $pluginInfo) : parent::getChildData($alias, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiId');
        return $pluginInfo ? $this->___callPlugins('getUiId', func_get_args(), $pluginInfo) : parent::getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsId');
        return $pluginInfo ? $this->___callPlugins('getJsId', func_get_args(), $pluginInfo) : parent::getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewFileUrl');
        return $pluginInfo ? $this->___callPlugins('getViewFileUrl', func_get_args(), $pluginInfo) : parent::getViewFileUrl($fileId, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        return $pluginInfo ? $this->___callPlugins('formatDate', func_get_args(), $pluginInfo) : parent::formatDate($date, $format, $showTime, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTime');
        return $pluginInfo ? $this->___callPlugins('formatTime', func_get_args(), $pluginInfo) : parent::formatTime($time, $format, $showDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        return $pluginInfo ? $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo) : parent::getModuleName();
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtml');
        return $pluginInfo ? $this->___callPlugins('escapeHtml', func_get_args(), $pluginInfo) : parent::escapeHtml($data, $allowedTags);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJs');
        return $pluginInfo ? $this->___callPlugins('escapeJs', func_get_args(), $pluginInfo) : parent::escapeJs($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlAttr');
        return $pluginInfo ? $this->___callPlugins('escapeHtmlAttr', func_get_args(), $pluginInfo) : parent::escapeHtmlAttr($string, $escapeSingleQuote);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeCss');
        return $pluginInfo ? $this->___callPlugins('escapeCss', func_get_args(), $pluginInfo) : parent::escapeCss($string);
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stripTags');
        return $pluginInfo ? $this->___callPlugins('stripTags', func_get_args(), $pluginInfo) : parent::stripTags($data, $allowableTags, $allowHtmlEntities);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeUrl');
        return $pluginInfo ? $this->___callPlugins('escapeUrl', func_get_args(), $pluginInfo) : parent::escapeUrl($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeXssInUrl');
        return $pluginInfo ? $this->___callPlugins('escapeXssInUrl', func_get_args(), $pluginInfo) : parent::escapeXssInUrl($data);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeQuote');
        return $pluginInfo ? $this->___callPlugins('escapeQuote', func_get_args(), $pluginInfo) : parent::escapeQuote($data, $addSlashes);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJsQuote');
        return $pluginInfo ? $this->___callPlugins('escapeJsQuote', func_get_args(), $pluginInfo) : parent::escapeJsQuote($data, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameInLayout');
        return $pluginInfo ? $this->___callPlugins('getNameInLayout', func_get_args(), $pluginInfo) : parent::getNameInLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        return $pluginInfo ? $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo) : parent::getCacheKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        return $pluginInfo ? $this->___callPlugins('getVar', func_get_args(), $pluginInfo) : parent::getVar($name, $module);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopePrivate');
        return $pluginInfo ? $this->___callPlugins('isScopePrivate', func_get_args(), $pluginInfo) : parent::isScopePrivate();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
