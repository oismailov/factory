<?php

require_once 'config/conf.php';

$factory = new Factory();

$factory->addType(new Robot(200, 100, 20), 'robot_one');//simple robot 1
$factory->addType(new Robot(150, 75, 40), 'robot_two');//simple robot 2
$factory->addType(new Robot(100, 50, 60), 'robot_three');//simple robot 3

$robot1 = $factory->createRobot(2, 'robot_one'); // 2 copies of simple robot 1
$robot2 = $factory->createRobot(3, 'robot_two'); // 3 copies of simple robot 2

$unionRobot = $factory->createUnionRobot(array($robot1, $robot2));//union 2 robots in one

$factory->addType(
    new Robot($unionRobot->getWeight(),$unionRobot->getHeight(), $unionRobot->getSpeed()),
    'union_robot'
);//add new type 'union robot'

$unionRobot2 = $factory->createRobot(5, 'union_robot');//5 copies of union robot (robot1 + robot2)

print_r($unionRobot2);//properties of union robot
