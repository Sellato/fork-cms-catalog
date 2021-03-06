<?php

namespace Backend\Modules\Catalog\Domain\Country\Command;

use Backend\Modules\Catalog\Domain\Country\Country;
use Backend\Modules\Catalog\Domain\Country\CountryRepository;

final class CreateCountryHandler
{
    /** @var CountryRepository */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function handle(CreateCountry $createCountry): void
    {
        $country = Country::fromDataTransferObject($createCountry);
        $this->countryRepository->add($country);

        $createCountry->setCountryEntity($country);
    }
}
