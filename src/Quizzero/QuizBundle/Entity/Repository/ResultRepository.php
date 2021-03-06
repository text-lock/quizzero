<?php

namespace Quizzero\QuizBundle\Entity\Repository;

/**
 * ResultRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ResultRepository extends \Doctrine\ORM\EntityRepository
{

    public function getQuizzedUser($quiz_session)            //receive user
    {
      $qb = $this->createQueryBuilder('ru')
                   ->select('MAX(ru.user)')
                   ->where('ru.quiz_session = :quiz_session')

                   ->setParameter('quiz_session', $quiz_session);
                  
      return $qb->getQuery()
                ->getSingleScalarResult();  

    }

    public function getQuizSession()                        //receive quiz results by session
    {
		    $qb = $this->createQueryBuilder('lq')
                   ->select('MAX(lq.quiz_session)');

        $quiz_session = $qb->getQuery()
                  ->getSingleScalarResult();  

		    if (!$quiz_session) $quiz_session = 1; else ++$quiz_session;

		    return $quiz_session;
    }

    public function getResultData($quiz_session){               //receive quiz results by session
    
		    $qb = $this->createQueryBuilder('r')
                   ->select('r')
                   ->where('r.quiz_session = :quiz_session')
                   
                   ->setParameter('quiz_session', $quiz_session);

        return $qb->getQuery()
                  ->getResult();
	
   }

   public function getQuizId($quiz_session){
    
		  $qb = $this->createQueryBuilder('q')
                   ->select('MAX(q.quiz)')
                   ->where('q.quiz_session = :quiz_session')
                   
                   ->setParameter('quiz_session', $quiz_session);
                  
        return $qb->getQuery()
                   ->getSingleScalarResult();  
	
   }


   public function getUserResults($user){

      $qb = $this->createQueryBuilder('rd')
                   ->select('rd')
                   ->where('rd.user = :user')
                   ->groupBy('rd.quiz_session')
                   ->setParameter('user', $user);
                  
        return $qb->getQuery()
                  ->getResult();
                  
   }
}
