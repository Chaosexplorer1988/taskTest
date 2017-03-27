<?php

namespace UserRepo\Repositories;

use ReflectionProperty, Exception;

/**
 * Class User
 * @package UserRepo\Repositories
 */
class User
{
    protected $age;
    protected $status;
    public $name;

    /**
     * @param $name
     * @param string $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $rp = new ReflectionProperty($this, $name);
            if ($rp->isPrivate() || $rp->isProtected())
                throw new Exception('Попытка присвоить значение readonly свойству');

        }
        $this->$name = $value;
    }

    /**
     * @param $name
     * @param string $name
     * @return string
     */
    public function __get($name)
    {
        if (!self::__isset($name)) {
            throw new Exception("Попытка получить значение не существующего свойства");
        }
        return $this->$name;
    }

    /**
     * @param string $property
     * @return bool
     */
    public function  __isset($property)
    {
        return isset($this->$property);
    }
}







