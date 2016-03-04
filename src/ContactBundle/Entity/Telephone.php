<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\Iri;
use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;

/**
 * @Resource
 */
class Telephone extends CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $number;

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }
}
