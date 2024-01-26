<?php

namespace ContainerJaUgsp0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountOrderControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccountOrderController' shared autowired service.
     *
     * @return \App\Controller\AccountOrderController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AccountOrderController'] = $instance = new \App\Controller\AccountOrderController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\AccountOrderController', $container));

        return $instance;
    }
}
