<?php
// src/Quizzero/QuizBundle/Entity/User.php

namespace Quizzero\QuizBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
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
     * @ORM\OneToMany(targetEntity="Result", mappedBy="user")
     */
    protected $results;


    public function __construct()
    {
        parent::__construct();
        
    }

    /**
     * Add result
     *
     * @param \Quizzero\QuizBundle\Entity\Result $result
     *
     * @return User
     */
    public function addResult(\Quizzero\QuizBundle\Entity\Result $result)
    {
        $this->results[] = $result;

        return $this;
    }

    /**
     * Remove result
     *
     * @param \Quizzero\QuizBundle\Entity\Result $result
     */
    public function removeResult(\Quizzero\QuizBundle\Entity\Result $result)
    {
        $this->results->removeElement($result);
    }

    /**
     * Get results
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResults()
    {
        return $this->results;
    }
}
