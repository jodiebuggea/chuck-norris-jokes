<?php

namespace jodiebuggea\ChuckNorrisJokes\Jokes;

use jodiebuggea\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
/** @test  */

public function it_returns_a_random_joke()
{
    $jokes = new JokeFactory([
            'This is a joke',
        ]
    );
    $joke = $jokes->getRandomJoke();

    $this->assertSame('This is a joke', $joke);
}
    /** @test  */
    public function it_returns_a_predefined_joke()
    {

        $cnj = [
        'Time waits for no man. Unless that man is Chuck Norris.',
        'Fool me once, shame on you. Fool Chuck Norris once and he will roundhouse kick you in the face.',
        'There is no theory of evolution, just a list of creatures Chuck Norris allows to live.'
    ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $cnj);
    }

}