<?php

namespace Container6IbJ8A9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeAdminMigrationCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(new \EasyCorp\Bundle\EasyAdminBundle\Maker\Migrator(), 'C:\\poke-bio');

        $instance->setName('make:admin:migration');
        $instance->setDescription('Migrates EasyAdmin2 YAML config into EasyAdmin 3 PHP config classes');

        return $instance;
    }
}
