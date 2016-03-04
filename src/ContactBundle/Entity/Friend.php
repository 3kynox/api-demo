<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;

/**
 * @Resource(attributes={"normalization_context"={"groups": {"contacts"}}, "denormalization_context"={"groups": {"contacts"}}})
 */
class Friend extends Contact
{
    /**
     * @Groups({"contacts"})
     */
    private $friendSince;


    public function setFriendSince($friendSince)
    {
        $this->friendSince = $friendSince;

        return $this;
    }

    public function getFriendSince()
    {
        return $this->friendSince;
    }
}
