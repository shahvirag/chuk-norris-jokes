<?php

namespace Shahvirag\ChukNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Shahvirag\ChukNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function its_return_random_joke()
    {
        $jokes = new JokeFactory([
            'this is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('this is a joke', $joke);
    }

    /** @test */
    public function it_return_random_predefined_joke()
    {
        $predefinedJokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
        ];
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $predefinedJokes);
    }
}
