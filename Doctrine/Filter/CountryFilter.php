<?php

namespace EncreInformatique\Component\Resource\Doctrine\Filter;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;
use EncreInformatique\Component\Resource\Model\CountryInterface;

class CountryFilter extends SQLFilter
{
    /**
     * Gets the SQL query part to add to a query.
     *
     * @param ClassMetaData $targetEntity
     * @param string $targetTableAlias
     *
     * @return string The constraint SQL if there is available, empty string otherwise.
     */
    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias)
    {
        if (!$targetEntity->getReflectionClass()->implementsInterface(CountryInterface::class)) {
            return '';
        }

        return sprintf('%s.country = %s', $targetTableAlias, $this->getParameter('country'));
    }
}
