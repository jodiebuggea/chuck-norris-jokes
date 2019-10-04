<?php

namespace jodiebuggea\ChuckNorrisJokes\Jokes;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use http\Client;
use jodiebuggea\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
/** @test  */

public function it_returns_a_random_joke()
{
    $mock = new MockHandler([
       new Response(200, [],'{ "type": "success", "value": { "id": 268, "joke": "Time waits for no man. Unless that man is Chuck Norris." } }' ),
    ]);
    $handler = HandlerStack::create($mock);
    $client = new \GuzzleHttp\Client();
    $jokes = new JokeFactory($client);
    $joke = $jokes->getRandomJoke();

    $this->assertSame('Time waits for no man. Unless that man is Chuck Norris.', $joke);
}
}