<?php
namespace PhpBrew\Command;
use CLIFramework\Command;
use PhpBrew\Config;

class ConfigCommand extends Command
{

    public function brief() { return 'phpbrew config interface'; }

    public function execute($name)
    {
        switch($name) 
        {
        case 'home':
            echo Config::getPhpbrewRoot();
            break;
        case 'build':
            echo Config::getBuildDir();
            break;
        case 'bin':
            echo Config::getCurrentPhpBin();
            break;
        case 'include':
            echo Config::getVersionBuildPrefix( Config::getCurrentPhp() ) . 
                    DIRECTORY_SEPARATOR . 'include';
            break;
        case 'etc':
            echo Config::getVersionBuildPrefix( Config::getCurrentPhp() ) . 
                    DIRECTORY_SEPARATOR . 'etc';
            break;
        }
    }
}


