<?php

namespace ContainerQAX6zOC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ORQASkyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ORQASky' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ORQASky'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'offre' => ['privates', '.errored..service_locator.ORQASky.App\\Entity\\Offres', NULL, 'Cannot autowire service ".service_locator.ORQASky": it references class "App\\Entity\\Offres" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'offre' => 'App\\Entity\\Offres',
        ]);
    }
}
