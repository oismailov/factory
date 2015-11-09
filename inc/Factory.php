<?php

class Factory
{

    private $robotInventory = array();

    /** Add new robot type
     * @param object  $robot
     * @param string $type
     */
    public function addType($robot, $type)
    {
        $this->robotInventory[$type] = $robot;
    }

    /** Create copies of existing robot types
     * @param integer $number
     * @param string $type
     *
     * @return array $robotObjects array with $number elements of given robot type
     */
    public function createRobot($number, $type)
    {
        $robotObjects = array();
        $robot = Arr::get($this->robotInventory, $type);
        if (is_object($robot)) {
            for ($i = 0; $i < $number; $i++) {
                $robotObjects[] = $robot;
            }
        }
        return $robotObjects;
    }

    /** Create union robot
     * @param arrya $union array of robots
     *
     * @return obect new union instance of Robot
     */
    public function createUnionRobot(array $union)
    {
        $w = array();
        $s = array();
        $h = array();
        if (!empty($union)) {
            for ($i = 0; $i < count($union); $i++) {
                foreach ($union[$i] as $robot) {
                    $w[] = $robot->getWeight();
                    $s[] = $robot->getSpeed();
                    $h[] = $robot->getHeight();
                }
            }
        }
        if (!empty($w) && !empty($s) && !empty($h)) {
            $weight = array_sum($w);
            $speed = min($s);
            $height = array_sum($h);

            return new Robot($weight, $speed, $height);
        } else {
            return new Robot(0, 0, 0);
        }
    }

}
