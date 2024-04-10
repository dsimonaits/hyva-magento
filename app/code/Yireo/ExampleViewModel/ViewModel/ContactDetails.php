<?php declare(strict_types=1);

namespace Yireo\ExampleViewModel\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use \Magento\Catalog\Api\ProductRepositoryInterface;


class ContactDetails implements ArgumentInterface
{

    private ScopeConfigInterface $scopeConfig;

    private ProductRepositoryInterface $productConfig;

    public function __construct(ScopeConfigInterface $scopeConfig, ProductRepositoryInterface $productConfig)
    {
        $this->scopeConfig = $scopeConfig;
        $this->productConfig = $productConfig;
    }

    public function getPhoneNumber(): string
    {
        return (string)$this->scopeConfig->getValue('general/store_information/phone');
    }

    public function getProduct(): \Magento\Catalog\Api\Data\ProductInterface
    {
        return $this->productConfig->getById(42);
    }
}
