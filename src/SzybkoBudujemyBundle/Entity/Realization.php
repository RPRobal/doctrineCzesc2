<?php

namespace SzybkoBudujemyBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Realizations")
 */

class Realization
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=10)
     */
    protected $place;
    /**
    * @return mixed
    */
    public function getId()
    {
        return $this->id;
    }/**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }/**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }/**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }/**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }/**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
}
