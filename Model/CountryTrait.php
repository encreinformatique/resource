<?php

namespace EncreInformatique\Component\Resource\Model;

use Doctrine\ORM\Mapping as ORM;

trait CountryTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=3, nullable=false)
     */
    protected $country;

    /**
     * @param string $country
     */
    public function setCountry($country): void
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
