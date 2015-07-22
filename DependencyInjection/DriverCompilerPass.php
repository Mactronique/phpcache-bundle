<?php

namespace Mactronique\Bundle\PhpCacheBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class DriverCompilerPass implements CompilerPassInterface
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
