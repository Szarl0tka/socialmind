<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="user_game")
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\GameRepository")
 */
class Game
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
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_1", type="integer")
     */
    private $question1;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_2", type="integer")
     */
    private $question2;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_3", type="integer")
     */
    private $question3;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_4", type="integer")
     */
    private $question4;


    public function createAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        }

        // ... faire quelque chose comme envoyer l'objet $product à un template
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

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Game
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
     * @return Game
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
     * Set level
     *
     * @param integer $level
     * @return Game
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set question1
     *
     * @param integer $question1
     * @return Game
     */
    public function setQuestion1($question1)
    {
        $this->question1 = $question1;
    
        return $this;
    }

    /**
     * Get question1
     *
     * @return integer 
     */
    public function getQuestion1()
    {
        return $this->question1;
    }

    /**
     * Set question2
     *
     * @param integer $question2
     * @return Game
     */
    public function setQuestion2($question2)
    {
        $this->question2 = $question2;
    
        return $this;
    }

    /**
     * Get question2
     *
     * @return integer 
     */
    public function getQuestion2()
    {
        return $this->question2;
    }

    /**
     * Set question3
     *
     * @param integer $question3
     * @return Game
     */
    public function setQuestion3($question3)
    {
        $this->question3 = $question3;
    
        return $this;
    }

    /**
     * Get question3
     *
     * @return integer 
     */
    public function getQuestion3()
    {
        return $this->question3;
    }

    /**
     * Set question4
     *
     * @param integer $question4
     * @return Game
     */
    public function setQuestion4($question4)
    {
        $this->question4 = $question4;
    
        return $this;
    }

    /**
     * Get question4
     *
     * @return integer 
     */
    public function getQuestion4()
    {
        return $this->question4;
    }
}