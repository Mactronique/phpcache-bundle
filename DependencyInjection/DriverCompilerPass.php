<?php

namespace Mactronique\Bundle\PhpCacheBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class DriverCompilerPass
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('mactronique_cache.phpcache')) {
            return;
        }

        $definition = $container->getDefinition(
            'mactronique_cache.phpcache'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'mactronique_cache.driver'
        );
        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'registerDriver',
                array(new Reference($id))
            );
        }
    }
}
