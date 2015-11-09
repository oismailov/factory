<?php

class Factory
{

    private $hydra;

    public function addType($hydra)
    {
        $this->hydra = $hydra;
    }

    public function createMyHydra($n)
    {
        $hydraObjects = array();
        if (is_object($this->hydra) && $this) {
            for ($i = 0; $i < $n; $i++) {
                $hydraObjects[] = $this->hydra;
            }
        }
        return $hydraObjects;
    }

    public function createUnionRobot($n)
    {

    }

}
