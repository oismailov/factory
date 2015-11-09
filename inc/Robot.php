<?php

class Robot
{

    private $weight;
    private $speed;
    private $height;

    public function __construct($w, $s, $h)
    {
        $this->setWeight($w);
        $this->setSpeed($s);
        $this->setHeight($h);
    }

    public function setWeight($w)
    {
        $this->weight = $w;
    }

    public function setSpeed($s)
    {
        $this->speed = $s;
    }

    public function setHeight($h)
    {
        $this->height = $h;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getHeight()
    {
        return $this->height;
    }

}
