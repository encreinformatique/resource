<?php

namespace EncreInformatique\Component\Resource\Model;

trait CountryTrait
{
    /**
     * @var string
     */
    protected $country;

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
