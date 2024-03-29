<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderSuccessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrderSuccessController' shared autowired service.
     *
     * @return \App\Controller\OrderSuccessController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OrderSuccessController'] = $instance = new \App\Controller\OrderSuccessController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\OrderSuccessController', $container));

        return $instance;
    }
}
