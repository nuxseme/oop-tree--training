<?php


namespace tree;


class Leaf
{
    private $color;
    private $size;

    public function __construct($color,$size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function  getColor()
    {
        return $this->color;
    }

    public function getSize()
    {
        return $this->size;
    }

}