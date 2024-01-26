<?php

namespace ContainerJaUgsp0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHeaderRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\HeaderRepository' shared autowired service.
     *
     * @return \App\Repository\HeaderRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\HeaderRepository'] = new \App\Repository\HeaderRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
