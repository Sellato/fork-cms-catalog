<?php

namespace Backend\Modules\Catalog\Domain\Product\Event;

use Backend\Modules\Catalog\Domain\Product\Product;

final class Deleted extends Event
{
    /**
     * @var string The name the listener needs to listen to to catch this event.
     */
    const EVENT_NAME = 'catalog.event.product.deleted';

    /**
     * @var int
     */
    private $id;

    public function __construct(Product $product, int $id)
    {
        $this->id = $id;

        parent::__construct($product);
    }

    public function getId(): int
    {
        return $this->id;
    }
}
