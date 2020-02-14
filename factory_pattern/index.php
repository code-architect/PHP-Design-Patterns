<?php

include 'Shape.php';

$shape = Shape::getShape('circle', 3);
echo $shape->getArea();

echo "<br>";

$shape = Shape::getShape('square', 3);
echo $shape->getArea();