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
        $question->setVariates('[{"value":"","isCorrect":true}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('radio');
        $question->setBody('Does sun set in summer at Kolsky region?');
        $question->setImage('upload/polar_day.jpg');
       // $question->setVariates('{yes;no;differently}');
        $question->setVariates('[{"value":"yes","isCorrect":true},{"value":"no","isCorrect":false},{"value":"differently","isCorrect":false}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('checkbox');
        $question->setBody('Snow in Murmansk could fall in:');
        $question->setImage('upload/snow.jpg');
        $question->setVariates('[{"value":"Jan","isCorrect":true},{"value":"Feb","isCorrect":true},{"value":"March","isCorrect":true},{"value":"Apr","isCorrect":true},{"value":"May","isCorrect":true},{"value":"Jun","isCorrect":true},{"value":"Jul","isCorrect":true},{"value":"Aug","isCorrect":true},{"value":"Sept","isCorrect":true},{"value":"Oct","isCorrect":true},{"value":"Nov","isCorrect":true},{"value":"Dec","isCorrect":true}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('textarea');
        $question->setBody('Put a comma in a sentence: Уехать нельзя остаться.');
        $question->setImage('upload/murmansk_.jpg');
        $question->setVariates('[{"value":"","isCorrect":true}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-1')));

        
        $manager->persist($question);


        $question = new Question();
        $question->setType('radio');
        $question->setBody('The hiest mountain in Khibiny');
        $question->setImage('upload/khibiny.jpg');
        //$question->setVariates('Vortkeuayv;Eagle Nest;South Chorrgor');
        $question->setVariates('[{"value":"Vortkeuayv","isCorrect":false},{"value":"Eagle Nest","isCorrect":true},{"value":"South Chorrgor","isCorrect":false}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('checkbox');
        $question->setBody('Lovozero tundra is a');
        $question->setImage('upload/lovozero.jpg');
       // $question->setVariates('Massif;Swamp;Plateau;Tundra');
        $question->setVariates('[{"value":"Massif","isCorrect":true},{"value":"Swamp","isCorrect":false},{"value":"Plateau","isCorrect":true},{"value":"Tundra","isCorrect":true}]');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);

        $question = new Question();
        $question->setType('radio');
        $question->setBody('The most famous place name of the Kola Peninsula');
        $question->setImage('upload/kurwa.jpg');
        //$question->setVariates('Kuiva;Huntsman;Husky;Shaposhvueskyaur');
        $question->setVariates('[{"value":"Kuiva","isCorrect":true},{"value":"Huntsman","isCorrect":false},{"value":"Husky","isCorrect":false},{"value":"Shaposhvueskyaur","isCorrect":false}');
        $question->setQuiz($manager->merge($this->getReference('quiz-2')));
        $manager->persist($question);
  
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}