<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;

/**
 * @Resource
 */
abstract class CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $id;
    protected $contact;

    public function getId()
    {
        return $this->id;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}
