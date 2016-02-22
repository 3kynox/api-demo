<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;

class TabCommWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $id;

    /**
     * @Groups({"contacts"})
     */
    private $telephones;

    /**
     * @Groups({"contacts"})
     */
    private $emails;

    /**
     * @Groups({"contacts"})
     */
    private $adresses;

    public function __construct()
    {
        $this->telephones = new ArrayCollection();
        $this->emails = new ArrayCollection();
        $this->adresses = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function addTelephone($telephone)
    {
        $this->telephones[] = $telephone;
        return $this;
    }

    public function removeTelephone($telephone)
    {
        $this->telephones->removeElement($telephone);
    }

    public function getTelephones()
    {
        return $this->telephones;
    }

    public function addEmail($email)
    {
        $this->emails[] = $email;
        return $this;
    }

    public function removeEmail($email)
    {
        $this->emails->removeElement($email);
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function addAdress($adress)
    {
        $this->adresses[] = $adress;
        return $this;
    }

    public function removeAdress($adress)
    {
        $this->adresses->removeElement($adress);
    }

    public function getAdresses()
    {
        return $this->adresses;
    }
}