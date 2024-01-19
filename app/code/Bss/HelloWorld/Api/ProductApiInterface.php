<?php
namespace Bss\HelloWorld\Api;

interface ProductApiInterface
{
    /**
     * @param string $sku
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductBySku($sku);
}