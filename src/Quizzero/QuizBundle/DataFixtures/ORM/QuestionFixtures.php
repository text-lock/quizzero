<?php
// src/Quizzero/QuizBundle/DataFixtures/ORM/QuestionFixtures.php

namespace Quizzero\QuizBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


use Quizzero\QuizBundle\Entity\Question;
use Quizzero\QuizBundle\Entity\Quiz;


                
class QuestionFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $question = new Question();
        $question->setType('text');
        $question->setBody('"Polar day" duration in Murmansk by days');
        $question->setImage('upload/polar_day.jpg');
        $question->setVariates('');
        $question->setCorrect('45');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('radio');
        $question->setBody('Does sun set in summer at Kolsky region?');
        $question->setImage('upload/polar_day.jpg');
        $question->setVariates('yes;no;differently');
        $question->setCorrect('yes');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('checkbox');
        $question->setBody('Snow in Murmansk could fall in:');
        $question->setImage('upload/snow.jpg');
        $question->setVariates('Jan;Feb;March;Apr;May;Jun;Jul;Aug;Sept;Oct;Nov;Dec');
        $question->setCorrect('Jan;Feb;March;Apr;May;Jun;Jul;Aug;Sept;Oct;Nov;Dec');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('textarea');
        $question->setBody('Put a comma in a sentence: Уехать нельзя остаться.');
        $question->setImage('upload/murmansk_.jpg');
        $question->setVariates('');
        $question->setCorrect('');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));

        
        $manager->persist($question);


        $question = new Question();
        $question->setType('radio');
        $question->setBody('The hiest mountain in Khibiny');
        $question->setImage('upload/khibiny.jpg');
        $question->setVariates('Vortkeuayv;Eagle Nest;South Chorrgor');
        $question->setCorrect('Eagle Nest');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('checkbox');
        $question->setBody('Lovozero tundra is a');
        $question->setImage('upload/lovozero.jpg');
        $question->setVariates('Massif;Swamp;Plateau;Tundra');
        $question->setCorrect('Massif;Plateau;Tundra');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('radio');
        $question->setBody('The most famous place name of the Kola Peninsula');
        $question->setImage('upload/kurwa.jpg');
        $question->setVariates('Kuiva;Huntsman;Husky;Shaposhvueskyaur');
        $question->setCorrect('Kuiva');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);
  
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}