<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginFormAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\LoginFormAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginFormAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\LoginFormAuthenticator'] = new \App\Security\LoginFormAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->get_Container_Private_Security_Csrf_TokenManagerService()), ($container->services['.container.private.security.password_encoder'] ?? $container->load('get_Container_Private_Security_PasswordEncoderService')));
    }
}
