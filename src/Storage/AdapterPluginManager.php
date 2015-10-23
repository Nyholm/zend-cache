<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Cache\Storage;

use Zend\Cache\Exception;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Plugin manager implementation for cache storage adapters
 *
 * Enforces that adapters retrieved are instances of
 * StorageInterface. Additionally, it registers a number of default
 * adapters available.
 */
class AdapterPluginManager extends AbstractPluginManager
{
    protected $aliases = [
        'apc'            => Adapter\Apc::class,
        'Apc'            => Adapter\Apc::class,
        'blackhole'      => Adapter\BlackHole::class,
        'BlackHole'      => Adapter\BlackHole::class,
        'dba'            => Adapter\Dba::class,
        'Dba'            => Adapter\Dba::class,
        'filesystem'     => Adapter\Filesystem::class,
        'Filesystem'     => Adapter\Filesystem::class,
        'memcache'       => Adapter\Memcache::class,
        'Memcache'       => Adapter\Memcache::class,
        'memcached'      => Adapter\Memcached::class,
        'Memcached'      => Adapter\Memcached::class,
        'memory'         => Adapter\Memory::class,
        'Memory'         => Adapter\Memory::class,
        'mongodb'        => Adapter\MongoDb::class,
        'MongoDb'        => Adapter\MongoDb::class,
        'redis'          => Adapter\Redis::class,
        'Redis'          => Adapter\Redis::class,
        'session'        => Adapter\Session::class,
        'Session'        => Adapter\Session::class,
        'xcache'         => Adapter\XCache::class,
        'XCache'         => Adapter\XCache::class,
        'wincache'       => Adapter\WinCache::class,
        'WinCache'       => Adapter\WinCache::class,
        'zendserverdisk' => Adapter\ZendServerDisk::class,
        'ZendServerDisk' => Adapter\ZendServerDisk::class,
        'zendservershm'  => Adapter\ZendServerShm::class,
        'ZendServerShm'  => Adapter\ZendServerShm::class
    ];

    protected $factories = [
        Adapter\Apc::class            => InvokableFactory::class,
        Adapter\BlackHole::class      => InvokableFactory::class,
        Adapter\Dba::class            => InvokableFactory::class,
        Adapter\Filesystem::class     => InvokableFactory::class,
        Adapter\Memcache::class       => InvokableFactory::class,
        Adapter\Memcached::class      => InvokableFactory::class,
        Adapter\Memory::class         => InvokableFactory::class,
        Adapter\MongoDb::class        => InvokableFactory::class,
        Adapter\Redis::class          => InvokableFactory::class,
        Adapter\Session::class        => InvokableFactory::class,
        Adapter\XCache::class         => InvokableFactory::class,
        Adapter\WinCache::class       => InvokableFactory::class,
        Adapter\ZendServerDisk::class => InvokableFactory::class,
        Adapter\ZendServerShm::class  => InvokableFactory::class
    ];

    /**
     * Do not share by default
     *
     * @var array
     */
    protected $shareByDefault = false;

    /**
     * @var string
     */
    protected $instanceOf = StorageInterface::class;
}
