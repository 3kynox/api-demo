<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\Resource;

/**
 * @Resource(attributes={"normalization_context"={"groups": {"contacts"}}, "denormalization_context"={"groups": {"contacts"}}})
 */
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
