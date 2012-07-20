<?php
namespace PhpBrew\Command;
use CLIFramework\Command;

class VariantCommand extends Command
{

    function brief() { 
        return 'list, add, remove variants.';
    }

    function init() {
        $this->registerCommand('list');
        $this->registerCommand('add');
        $this->registerCommand('remove');
    }
}

