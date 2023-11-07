<?php

namespace Boatrace\Ninja;

use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Purchaser
{
    /**
     * @var \Boatrace\Ninja\MainPurchaser
     */
    protected $purchaser;

    /**
     * @var \Boatrace\Ninja\Purchaser
     */
    protected static $instance;

    /**
     * @var \DI\Container
     */
    protected static $container;

    /**
     * @param  \Boatrace\Ninja\MainPurchaser  $purchaser
     * @return void
     */
    public function __construct(MainPurchaser $purchaser)
    {
        $this->purchaser = $purchaser;
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return \Boatrace\Ninja\MainPurchaser
     */
    public function __call(string $name, array $arguments): MainPurchaser
    {
        return call_user_func_array([$this->purchaser, $name], $arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return \Boatrace\Ninja\MainPurchaser
     */
    public static function __callStatic(string $name, array $arguments): MainPurchaser
    {
        return call_user_func_array([self::getInstance(), $name], $arguments);
    }

    /**
     * @return \Boatrace\Ninja\Purchaser
     */
    public static function getInstance(): Purchaser
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Purchaser');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;
        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');
        return $builder->build();
    }
}
