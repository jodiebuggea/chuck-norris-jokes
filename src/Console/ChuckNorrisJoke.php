<?php
namespace jodiebuggea\ChuckNorrisJokes\Console;
use Illuminate\Console\Command;
use jodiebuggea\ChuckNorrisJokes\Facades\ChuckNorris;
class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';
    protected $description = 'Output a funny Chuck Norris joke.';
    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}