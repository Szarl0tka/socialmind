<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Round
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\RoundRepository")
 */
class Round
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="game_user_id", type="integer")
     */
    private $gameUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_right", type="integer")
     */
    private $answerRight;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer_similar", type="integer")
     */
    private $answerSimilar;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Round
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set gameUserId
     *
     * @param integer $gameUserId
     * @return Round
     */
    public function setGameUserId($gameUserId)
    {
        $this->gameUserId = $gameUserId;
    
        return $this;
    }

    /**
     * Get gameUserId
     *
     * @return integer 
     */
    public function getGameUserId()
    {
        return $this->gameUserId;
    }

    /**
     * Set answerRight
     *
     * @param integer $answerRight
     * @return Round
     */
    public function setAnswerRight($answerRight)
    {
        $this->answerRight = $answerRight;
    
        return $this;
    }

    /**
     * Get answerRight
     *
     * @return integer 
     */
    public function getAnswerRight()
    {
        return $this->answerRight;
    }

    /**
     * Set answerSimilar
     *
     * @param integer $answerSimilar
     * @return Round
     */
    public function setAnswerSimilar($answerSimilar)
    {
        $this->answerSimilar = $answerSimilar;
    
        return $this;
    }

    /**
     * Get answerSimilar
     *
     * @return integer 
     */
    public function getAnswerSimilar()
    {
        return $this->answerSimilar;
    }
}
