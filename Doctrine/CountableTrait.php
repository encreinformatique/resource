<?php

namespace EncreInformatique\Component\Resource\Doctrine;

trait CountableTrait
{
    public function countAll()
    {
        $qb = $this->createQueryBuilder('a');
        $qb->select($qb->expr()->count('a.id'));

        $result = $qb->getQuery()->getSingleResult();

        return (int)array_shift($result);
    }
}
