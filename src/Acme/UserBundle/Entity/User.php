<?php
// src/Acme/UserBundle/Entity/User.php

namespace Acme\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="answer_1", type="integer")
     */
    protected $answer1;

    /**
     * @ORM\Column(name="answer_2", type="integer")
     */
    protected $answer2;

    /**
     * @ORM\Column(name="answer_3", type="integer")
     */
    protected $answer3;

    /**
     * @ORM\Column(name="answer_4", type="integer")
     */
    protected $answer4;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}