<?php

namespace Backend\Modules\Catalog\Domain\SpecificationValue\Event;

use Backend\Modules\Catalog\Domain\SpecificationValue\SpecificationValue;
use Symfony\Component\EventDispatcher\Event as EventDispatcher;

abstract class Event extends EventDispatcher
{
    /** @var SpecificationValue */
    private $specificationValue;

    public function __construct(SpecificationValue $specificationValue)
    {
        $this->specificationValue = $specificationValue;
    }

    public function getSpecificationValue(): SpecificationValue
    {
        return $this->specificationValue;
    }
}
