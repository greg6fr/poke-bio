<?php

namespace ContainerNVlCNRX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SecretsSetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService')), ($container->privates['secrets.local_vault'] ?? ($container->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault('C:\\la-boutique-francaise/.env.dev.local'))));

        $instance->setName('secrets:set');

        return $instance;
    }
}
