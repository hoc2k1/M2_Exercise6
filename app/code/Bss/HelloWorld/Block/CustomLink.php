<?php
namespace Bss\HelloWorld\Block;
// use Magento\Store\Model\StoreManagerInterface;
class CustomLink extends \Magento\Framework\View\Element\Template
{
    protected $label = "";
    protected $link = "";
    protected $storeManager = "";
    

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        // StoreManagerInterface $storeManager,
        array $data = []
    ) {
        // $this->storeManager = $storeManager;
        parent::__construct($context, $data);

        $label = $this->getData('custom-link');
        $this->label = $label;
        $this->link = "https://bsscommerce.com/";
    }

    public function getLabel() {
        return $this->label;
    }
    public function getLink() {
        return $this->link;
    }

}