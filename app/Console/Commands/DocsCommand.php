<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;


/**
 * Class DocsCommand
 * @package App\Console\Commands
 */
class DocsCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'docs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Create documentation";

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }

    /**
     * Execute the console command.
     *
     */
    public function fire()
    {
    	echo "php artisan api:docs --output-file $actualDir/public/docs.md\n";
    }

}