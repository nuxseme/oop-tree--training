<?php


namespace tree;


class Fruit
{
    private $weight;
    private $color;

    public function __construct($weight,$color)
    {
        $this->weight = $weight;
        $this->color = $color;

    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getColor(){
        return $this->color;
    }

}