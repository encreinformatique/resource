<?php

namespace EncreInformatique\Component\Resource\Model;

interface CountryInterface
{
    /**
     * @param string $country
     */
    public function setCountry($country);

    /**
     * @return string
     */
    public function getCountry();
}
