<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }
}
