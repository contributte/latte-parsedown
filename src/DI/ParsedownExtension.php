<?php

namespace Minetro\Parsedown\DI;

use Nette\DI\CompilerExtension;
use Nette\InvalidStateException;

/**
 * Parsedown Extension
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class ParsedownExtension extends CompilerExtension
{

    /** @var array */
    private $defaults = [
        'helper' => 'parsedown',
    ];

    public function loadConfiguration()
    {
        $config = $this->validateConfig($this->defaults);
        $builder = $this->getContainerBuilder();

        $builder->addDefinition($this->prefix('parsedown'))
            ->setClass('Minetro\Parsedown\ParsedownAdapter');
    }

    public function beforeCompile()
    {
        $config = $this->validateConfig($this->defaults);
        $builder = $this->getContainerBuilder();

        if (!($templateFactory = $builder->getByType('Nette\Bridges\ApplicationLatte\ILatteFactory'))) {
            throw new InvalidStateException('Service implemented ILatteFactory not found.');
        }

        $builder->getDefinition($templateFactory)
            ->addSetup('addFilter', [$config['helper'], ['@' . $this->prefix('parsedown'), 'process']]);
    }

}
