<?php

namespace OrviSoft\Multicart\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {
    protected $_productRepository;
    
    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ProductRepository $productRepository, array $data = []) {
        $this->_productRepository = $productRepository;
        parent::__construct($context, $data);
    }


    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getProductById($id)
	{
		return $this->_productRepository->getById($id);
	}
	
	public function getProductBySku($sku)
	{
        try {
            $product = $this->_productRepository->get($sku);
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e){
            $product = false;
        }
        return $product;
	}

}
