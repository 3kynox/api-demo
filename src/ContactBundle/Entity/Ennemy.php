<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

class Ennemy extends Contact
{
    /**
     * @Groups({"contacts"})
     */
    private $ennemySince;


    public function setEnnemySince($ennemySince)
    {
        $this->ennemySince = $ennemySince;

        return $this;
    }

    public function getEnnemySince()
    {
        return $this->ennemySince;
    }
}
