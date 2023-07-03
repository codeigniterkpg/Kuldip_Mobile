<?php

namespace Kuldip\Mobile\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Block\Product\ListProduct;

class ProductCarousel extends ListProduct {

    public function __construct() {

        parent::__construct();
        $this->setTemplate("Kuldip_Module::product_carousel.phtml");

    }

}