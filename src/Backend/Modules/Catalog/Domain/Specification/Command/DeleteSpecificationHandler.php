<?php

namespace Backend\Modules\Catalog\Domain\Specification\Command;

use Backend\Modules\Catalog\Domain\Specification\SpecificationRepository;

final class DeleteSpecificationHandler
{
    /** @var SpecificationRepository */
    private $specificationRepository;

    public function __construct(SpecificationRepository $specificationRepository)
    {
        $this->specificationRepository = $specificationRepository;
    }

    public function handle(DeleteSpecification $deleteSpecification): void
    {
        $this->specificationRepository->removeByIdAndLocale(
            $deleteSpecification->specification->getId(),
            $deleteSpecification->specification->getLocale()
        );
    }
}
