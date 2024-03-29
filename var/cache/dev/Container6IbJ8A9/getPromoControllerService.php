<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PromoController' shared autowired service.
     *
     * @return \App\Controller\PromoController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PromoController'] = $instance = new \App\Controller\PromoController(($container->privates['App\\Repository\\PromoRepository'] ?? $container->load('getPromoRepositoryService')), ($container->services['.container.private.session'] ?? $container->load('get_Container_Private_SessionService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\PromoController', $container));

        return $instance;
    }
}
