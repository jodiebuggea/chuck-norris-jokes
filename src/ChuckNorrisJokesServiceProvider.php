<?php

namespace jodiebuggea\ChuckNorrisJokes;
use jodiebuggea\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use jodiebuggea\ChuckNorrisJokes\Console\ChuckNorrisJokes;
use Illuminate\Support\ServiceProvider;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }
    }

    public function register()
    {
    $this->app->bind('chuck-norris', function() {
            return new JokeFactory();
    });
    }
}