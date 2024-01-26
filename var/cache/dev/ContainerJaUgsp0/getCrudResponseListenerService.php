<?php

namespace ContainerJaUgsp0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCrudResponseListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), $a);
    }
}
