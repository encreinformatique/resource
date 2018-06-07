<?php

namespace EncreInformatique\Component\Resource\Doctrine;

interface CountableInterface
{
    /**
     * @return int
     */
    public function countAll();
}
