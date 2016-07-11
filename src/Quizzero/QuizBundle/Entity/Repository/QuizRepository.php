<?php

namespace Quizzero\QuizBundle\Entity\Repository;

/**
 * QuizRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuizRepository extends \Doctrine\ORM\EntityRepository
{
	public function getLatestQuizzes($limit = null)
    {
        $qb = $this->createQueryBuilder('q')
            ->select('q')
            ->addOrderBy('q.created_at', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()
            ->getResult();
    }
}
