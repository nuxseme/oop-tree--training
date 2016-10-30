<?php


namespace tree;

class Tree
{
    private $leaf;
    private $fruit;
    public function __construct(Leaf $leaf,Fruit $fruit)
    {
        $this->leaf = $leaf;
        $this->fruit = $fruit;
    }

    public function __toString()
    {
        return 'tree';
    }


    public function setLeaf(Leaf $leaf)
    {
        $this->leaf = $leaf;
    }

    public function setFruit(Fruit $fruit)
    {
        $this->fruit = $fruit;
    }

    public function getLeaf()
    {
        return $this->leaf;
    }

    public function getFruit()
    {
        return $this->fruit;
    }
}