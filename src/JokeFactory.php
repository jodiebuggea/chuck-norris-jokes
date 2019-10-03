<?php


namespace jodiebuggea\ChuckNorrisJokes;

class JokeFactory

{
    protected $jokes = [
        'Time waits for no man. Unless that man is Chuck Norris.',
        'Fool me once, shame on you. Fool Chuck Norris once and he will roundhouse kick you in the face.',
        'There is no theory of evolution, just a list of creatures Chuck Norris allows to live.'
    ];

    public function __construct(array $jokes= null)
    {
        if ($jokes){
        $this->jokes = $jokes;
    }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

}