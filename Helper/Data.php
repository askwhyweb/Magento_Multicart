<?php
namespace OrviSoft\Multicart\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
   public function getDefaultConfig($path)
   {
       return $this->scopeConfig->getValue($path, \Magento\Framework\App\Config\ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
   }

}
