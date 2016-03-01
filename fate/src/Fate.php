<?php namespace Ydentidad\Fate;

class Fate {
    private static $commands = array(
        'Migrate',
        'ControllerMake'
    );
    
    public static function commands()
    {
        $comandos = [];
        foreach (self::$commands as $unComando):
        $class = $unComando.'Fate';
            \App::singleton("fate.$class", function($app) use ($class)
                    {
                        $name_space = "\App\Fate\\$class";
                        return new $name_space();
                    });
            $comandos[] = \App::make("fate.$class");        
        endforeach;
        
        return $comandos;
    }
    public static function getOptions($fate_command)
    {
        
        
        $fate = \App::make("fate.$class");
        return $fate->getOptions();
    }
}

?>
