<?php

namespace EncreInformatique\Component\Resource\Model;

interface TimestampableInterface
{
    /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt();

    /**
     * @param \DateTimeInterface|null $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt);

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt();

    /**
     * @param \DateTimeInterface|null $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt);
}
