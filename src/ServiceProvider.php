<?php namespace Enstart\Ext\Database;

use Enstart\Container\ContainerInterface;
use Enstart\ServiceProvider\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * Register the service provider
     *
     * @param  ContainerInterface $c
     */
    public function register(ContainerInterface $c)
    {
        $c->singleton('Database\Connection', function($c) {
            if (!$c->config->has('database') || !is_array($c->config->get('database'))) {
                throw new \Exception('Database extension exception: Missing valid config');
            }

            return (new \Database\Connectors\ConnectionFactory())->make(
                $c->config->get('database')
            );
        });

        $c->alias('Database\Connection', 'db');
    }
}
