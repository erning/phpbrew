<?php
namespace PhpBrew;
use CLIFramework\Application;

class Console extends Application 
{
    const name = 'phpbrew';
    const version = '1.5.2';

    public function init()
    {
        parent::init();
        $this->registerCommand('init');
        $this->registerCommand('known');
        $this->registerCommand('install');
        $this->registerCommand('list');
        $this->registerCommand('use');
        $this->registerCommand('switch');

        $this->registerCommand('info');
        $this->registerCommand('env');
        $this->registerCommand('variants');
        $this->registerCommand('variant');
        $this->registerCommand('config');

        $this->registerCommand('enable', 'PhpBrew\Command\EnableExtensionCommand');
        $this->registerCommand('install-ext');

        $this->registerCommand('self-update', 'PhpBrew\Command\SelfUpdateCommand');
    }

    public function brief()
    {
        return 'brew your latest php!';
    }
}
