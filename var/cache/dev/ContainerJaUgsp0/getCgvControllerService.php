<?php

namespace ContainerJaUgsp0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCgvControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CgvController' shared autowired service.
     *
     * @return \App\Controller\CgvController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CgvController'] = $instance = new \App\Controller\CgvController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\CgvController', $container));

        return $instance;
    }
}
