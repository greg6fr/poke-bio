<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ResetPasswordType' shared autowired service.
     *
     * @return \App\Form\ResetPasswordType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ResetPasswordType'] = new \App\Form\ResetPasswordType();
    }
}
