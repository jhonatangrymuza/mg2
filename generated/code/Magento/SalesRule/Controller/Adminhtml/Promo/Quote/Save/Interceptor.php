<?php
namespace Magento\SalesRule\Controller\Adminhtml\Promo\Quote\Save;

/**
 * Interceptor class for @see \Magento\SalesRule\Controller\Adminhtml\Promo\Quote\Save
 */
class Interceptor extends \Magento\SalesRule\Controller\Adminhtml\Promo\Quote\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, ?\Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $dateFilter, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
