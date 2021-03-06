<?php

namespace Backend\Modules\Catalog\Domain\ProductOptionValue\Event;

use Backend\Modules\Catalog\Domain\ProductOptionValue\ProductOptionValue;
use Symfony\Component\EventDispatcher\Event as EventDispatcher;

abstract class Event extends EventDispatcher
{
    /** @var ProductOptionValue */
    private $specificationValue;

    public function __construct(ProductOptionValue $specificationValue)
    {
        $this->specificationValue = $specificationValue;
    }

    public function getProductOptionValue(): ProductOptionValue
    {
        return $this->specificationValue;
    }
}
