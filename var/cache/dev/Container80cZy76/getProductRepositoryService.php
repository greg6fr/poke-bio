<?php

namespace Container80cZy76;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ProductRepository' shared autowired service.
     *
     * @return \App\Repository\ProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProductRepository'] = new \App\Repository\ProductRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
