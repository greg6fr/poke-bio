<?php

namespace ContainerNVlCNRX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmer2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer'] = new \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer(($container->services['router'] ?? $container->getRouterService()));
    }
}
