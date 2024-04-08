<?php
namespace Magento\Backend\Block\Widget\Grid\ColumnSet;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\ColumnSet
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\ColumnSet implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Backend\Model\Widget\Grid\Row\UrlGeneratorFactory $generatorFactory, \Magento\Backend\Model\Widget\Grid\SubTotals $subtotals, \Magento\Backend\Model\Widget\Grid\Totals $totals, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $generatorFactory, $subtotals, $totals, $data);
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
    public function getColumnCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnCount');
        return $pluginInfo ? $this->___callPlugins('getColumnCount', func_get_args(), $pluginInfo) : parent::getColumnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function setSortable($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSortable');
        return $pluginInfo ? $this->___callPlugins('setSortable', func_get_args(), $pluginInfo) : parent::setSortable($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setRendererType($type, $className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRendererType');
        return $pluginInfo ? $this->___callPlugins('setRendererType', func_get_args(), $pluginInfo) : parent::setRendererType($type, $className);
    }

    /**
     * {@inheritdoc}
     */
    public function setFilterType($type, $className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilterType');
        return $pluginInfo ? $this->___callPlugins('setFilterType', func_get_args(), $pluginInfo) : parent::setFilterType($type, $className);
    }

    /**
     * {@inheritdoc}
     */
    public function getRowUrl($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowUrl');
        return $pluginInfo ? $this->___callPlugins('getRowUrl', func_get_args(), $pluginInfo) : parent::getRowUrl($item);
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
    public function hasMultipleRows($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasMultipleRows');
        return $pluginInfo ? $this->___callPlugins('hasMultipleRows', func_get_args(), $pluginInfo) : parent::hasMultipleRows($item);
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
    public function shouldRenderTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderTotal');
        return $pluginInfo ? $this->___callPlugins('shouldRenderTotal', func_get_args(), $pluginInfo) : parent::shouldRenderTotal();
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
    public function shouldRenderCell($item, $column)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shouldRenderCell');
        return $pluginInfo ? $this->___callPlugins('shouldRenderCell', func_get_args(), $pluginInfo) : parent::shouldRenderCell($item, $column);
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
    public function isHeaderVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isHeaderVisible');
        return $pluginInfo ? $this->___callPlugins('isHeaderVisible', func_get_args(), $pluginInfo) : parent::isHeaderVisible();
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
    public function isFilterVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFilterVisible');
        return $pluginInfo ? $this->___callPlugins('isFilterVisible', func_get_args(), $pluginInfo) : parent::isFilterVisible();
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
    public function getGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGrid');
        return $pluginInfo ? $this->___callPlugins('getGrid', func_get_args(), $pluginInfo) : parent::getGrid();
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
    public function setCountTotals($flag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCountTotals');
        return $pluginInfo ? $this->___callPlugins('setCountTotals', func_get_args(), $pluginInfo) : parent::setCountTotals($flag);
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
    public function getSubTotals($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubTotals');
        return $pluginInfo ? $this->___callPlugins('getSubTotals', func_get_args(), $pluginInfo) : parent::getSubTotals($item);
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
    public function updateItemByFirstMultiRow(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItemByFirstMultiRow');
        return $pluginInfo ? $this->___callPlugins('updateItemByFirstMultiRow', func_get_args(), $pluginInfo) : parent::updateItemByFirstMultiRow($item);
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareSubTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_prepareSubTotals');
        return $pluginInfo ? $this->___callPlugins('_prepareSubTotals', func_get_args(), $pluginInfo) : parent::_prepareSubTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_prepareTotals');
        return $pluginInfo ? $this->___callPlugins('_prepareTotals', func_get_args(), $pluginInfo) : parent::_prepareTotals();
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
