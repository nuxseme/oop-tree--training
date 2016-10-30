<?php
require 'Tree.php';
require 'Leaf.php';
require 'Fruit.php';

$leaf = new \tree\Leaf('green','2 unit');
$fruit = new \tree\Fruit('100 g','red');
$tree = new \tree\Tree($leaf,$fruit);
echo 'tree -> fruit -> color =>',$tree->getFruit()->getColor().PHP_EOL;
echo 'tree -> fruit -> weight =>',$tree->getFruit()->getWeight().PHP_EOL;
echo 'tree -> leaf -> color =>',$tree->getLeaf()->getColor().PHP_EOL;
echo 'tree -> leaf -> size =>',$tree->getLeaf()->getSize().PHP_EOL;
echo 'tree-> fruit =>';
print_r($tree->getFruit());
echo 'tree -> leaf =>';
print_r($tree->getLeaf());
