<?php

namespace Container5kcngRn;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationUpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $container->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'fr', 'C:\\la-boutique-francaise/translations', 'C:\\la-boutique-francaise/templates', [0 => 'C:\\la-boutique-francaise\\vendor\\symfony\\validator/Resources/translations', 1 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form/Resources/translations', 2 => 'C:\\la-boutique-francaise\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'C:\\la-boutique-francaise\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'C:\\la-boutique-francaise\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'C:\\la-boutique-francaise\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 4 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 5 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 6 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 7 => 'C:\\la-boutique-francaise\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 8 => 'C:\\la-boutique-francaise\\vendor\\symfony\\validator\\ValidatorBuilder.php', 9 => 'C:\\la-boutique-francaise\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 10 => 'C:\\la-boutique-francaise\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php', 11 => 'C:\\la-boutique-francaise\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 12 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Factory\\AdminContextFactory.php', 13 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Factory\\MenuFactory.php', 14 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Factory\\ActionFactory.php', 15 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\AssociationConfigurator.php', 16 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\CommonPreConfigurator.php', 17 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\ChoiceConfigurator.php', 18 => 'C:\\la-boutique-francaise\\vendor\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\SlugConfigurator.php']);

        $instance->setName('translation:update');

        return $instance;
    }
}