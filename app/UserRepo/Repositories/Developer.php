<?php
namespace UserRepo\Repositories;

/**
 * Class Developer
 * @package UserRepo\Repositories
 */
class Developer extends User {

    protected $salary;
    protected $group;
    public $manager;

    /**
     * @param $name
     * @param $age
     * @param $salary
     * @param $manager
     * @param $group
     */
    public  function __construct($name ,$age,  $salary, $manager, $group){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->group = $group;
        $this->manager = $manager;
    }
}

