<?php
// src/Quizzero/QuizBundle/Entity/Quiz.php
				
namespace Quizzero\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; 
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="Quizzero\QuizBundle\Entity\Repository\QuizRepository")
 * @ORM\Table(name="quiz")
 * @ORM\HasLifecycleCallbacks()
 */

class Quiz
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Missed field Title")
     */
    protected $title;

   /**
     *
     * @ORM\Column(type="text", nullable=true)
     * 
     */
    protected $body;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * 
     * @Assert\File(mimeTypes={  "image/png", "image/jpeg", "image/jpg", "image/gif" })
     */
    protected $image;
    
     /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="quiz")
     */
    protected $questions;

     /**
     * @ORM\OneToMany(targetEntity="Result", mappedBy="quiz")
     */
    protected $results;


   /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;




    public function __toString()
    {
      return $this->getTitle();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->results = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
        
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
     * Set title
     *
     * @param string $title
     *
     * @return Quiz
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Quiz
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Quiz
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Quiz
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Quiz
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add question
     *
     * @param \Quizzero\QuizBundle\Entity\Question $question
     *
     * @return Quiz
     */
    public function addQuestion(\Quizzero\QuizBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Quizzero\QuizBundle\Entity\Question $question
     */
    public function removeQuestion(\Quizzero\QuizBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add result
     *
     * @param \Quizzero\QuizBundle\Entity\Result $result
     *
     * @return Quiz
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

    /**
     * Set results
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setResults($results = null)
    {
        $this->results = $results;
        return $this;
    }
}
