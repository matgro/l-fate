<?php namespace Ydentidad\Fate;

use Illuminate\Routing\Console\ControllerMakeCommand as ControllerMakeCommand;
use Illuminate\Console\Command;
//use Illuminate\Database\Migrations\Migrator;

class ControllerMakeFate extends ControllerMakeCommand {
    
    public function __construct()
    {
//        parent::__construct(\App::make('migrator'));
    }
    public function getOptions()
    {
       return parent::getOptions();
    }
    public function getName()
    {
       return $this->name;
    }
    public function getDescription()
    {
       return $this->description;
    }
    public function getType()
    {
       return $this->type;
    }
}

?>
