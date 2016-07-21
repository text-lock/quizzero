<?php
// src/Quizzero/QuizBundle/Entity/Result.php

namespace Quizzero\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Result
 *
 * @ORM\Table(name="result")
 * @ORM\Entity(repositoryClass="Quizzero\QuizBundle\Entity\Repository\ResultRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Result
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="results")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="quiz_session", type="integer")
     */
    private $quiz_session;

     /**
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="results")
     * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id", onDelete="SET NULL")
     * @Assert\NotBlank(message="Missed quiz assign")
     */
    private $quiz;

    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="results")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id", onDelete="SET NULL")
     * @Assert\NotBlank(message="Missed question assign")
     */
    private $question;

    /**
     *
     * @ORM\Column(name="answer", type="string",  nullable=true)
     */
    private $answer;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_correct", type="boolean")
     */
    private $is_correct;

    /**
     * @var date
     *
     * @ORM\Column(name="created_at", type="date")
     */
    private $created_at;


    public function __construct(){
        $this->setCreatedAt(new \DateTime());
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
     * Set answer
     *
     * @param string $answer
     *
     * @return Result
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
        //return array($this->answer);
    }

    /**
     * Set isCorrect
     *
     * @param boolean $isCorrect
     *
     * @return Result
     */
    public function setIsCorrect($isCorrect)
    {
        $this->is_correct = $isCorrect;

        return $this;
    }

    /**
     * Get isCorrect
     *
     * @return boolean
     */
    public function getIsCorrect()
    {
        return $this->is_correct;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Result
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set quiz
     *
     * @param \Quizzero\QuizBundle\Entity\Quiz $quiz
     *
     * @return Result
     */
    public function setQuiz(\Quizzero\QuizBundle\Entity\Quiz $quiz = null)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \Quizzero\QuizBundle\Entity\Quiz
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set question
     *
     * @param \Quizzero\QuizBundle\Entity\Question $question
     *
     * @return Result
     */
    public function setQuestion(\Quizzero\QuizBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Quizzero\QuizBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set quizSession
     *
     * @param integer $quizSession
     *
     * @return Result
     */
    public function setQuizSession($quizSession)
    {
        $this->quiz_session = $quizSession;

        return $this;
    }

    /**
     * Get quizSession
     *
     * @return integer
     */
    public function getQuizSession()
    {
        return $this->quiz_session;
    }
 

    
    



    /**
     * Set correct
     *
     * @param string $correct
     *
     * @return Result
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }

    /**
     * Get correct
     *
     * @return string
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * Set user
     *
     * @param \Quizzero\QuizBundle\Entity\User $user
     *
     * @return Result
     */
    public function setUser(\Quizzero\QuizBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Quizzero\QuizBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
