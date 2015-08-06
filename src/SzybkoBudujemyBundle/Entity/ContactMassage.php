<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-08-06
 * Time: 11:05
 */

namespace SzybkoBudujemyBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Contact
 * @package SzybkoBudujemyBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="ContactMassage")
 */
class ContactMassage
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=30)
     */
    protected $subject;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    protected $massage;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMassage()
    {
        return $this->massage;
    }

    /**
     * @param mixed $massage
     */
    public function setMassage($massage)
    {
        $this->massage = $massage;
    }
}
