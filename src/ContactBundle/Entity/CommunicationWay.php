<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

abstract class CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
