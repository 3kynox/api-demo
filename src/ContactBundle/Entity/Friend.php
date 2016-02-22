<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

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
