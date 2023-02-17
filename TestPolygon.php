<?php
declare(strict_types=1);
require_once "Point.php";
require_once "Polygon.php";

# Question 1
$point1 = new Point(10, 10);
$point2 = new Point(10, 0);
$point3 = new Point(0, 0);
$point4 = new Point(0, 10);
$polygon = new Polygon(array($point1, $point2, $point3, $point4));

# Question 2
echo $polygon->getVerticesNumber();

# Question 3
echo $polygon->isEmpty();

# Question 4
