<?php

namespace Mactronique\Bundle\PhpCacheBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mactronique\Bundle\PhpCacheBundle\DependencyInjection\DriverCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MactroniquePhpCacheBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DriverCompilerPass());
    }
}
