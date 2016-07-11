<?php
// src/Quizzero/QuizBundle/DataFixtures/ORM/QuizFixtures.php
namespace Quizzero\QuizBundle\DataFixtures\ORM;





use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Quizzero\QuizBundle\Entity\Quiz;

class QuizFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $quiz1 = new Quiz();
        $quiz1->setTitle('Kola climate');
        $quiz1->setBody('Few questions about Kola Peninsula climate');
        $quiz1->setImage('weather.jpg');
        $manager->persist($quiz1);
        
        $quiz2 = new Quiz();
        $quiz2->setTitle('Kola toponyms');
        $quiz2->setBody('GEO test');
        $quiz2->setImage('kolsky.jpg');
        $manager->persist($quiz2);

        $manager->flush();

        $this->addReference('quiz-1', $quiz1);
        $this->addReference('quiz-2', $quiz2);

                
    }

    public function getOrder()
    {
        return 1;
    }

}