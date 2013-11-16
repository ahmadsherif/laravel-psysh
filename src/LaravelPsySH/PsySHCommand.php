<?php

namespace LaravelPsySH;

use Psy\Shell;
use Psy\Configuration;

use Illuminate\Console\Command;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;

use LaravelPsySH\Presenters\EloquentPresenter;


class PsySHCommand extends Command {

  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'psysh';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Interact with your application using PsySH';

  /**
   * Execute the console command.
   *
   * @return void
   */
  public function fire()
  {
    $shell = new Shell($this->getConfig());

    $shell->run();
  }

  protected function getConfig()
  {
    $config = new Configuration;

    $config->addPresenters($this->getPresenters());

    return $config;
  }

  protected function getPresenters()
  {
    $presenters = array();

    $presenters[] = new EloquentPresenter;

    return $presenters;
  }

}
