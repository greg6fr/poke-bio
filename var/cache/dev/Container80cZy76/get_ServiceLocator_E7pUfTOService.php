<?php

namespace Container80cZy76;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E7pUfTOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E7pUfTO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E7pUfTO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'responseParameters' => ['privates', '.errored..service_locator.E7pUfTO.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.E7pUfTO": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }
}
