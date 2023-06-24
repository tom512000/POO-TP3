<?php

declare(strict_types=1);

require_once "Point.php";
require_once "Segment.php";
require_once "Polygon.php";

# Question 1
$point1 = new Point(10, 10);
$point2 = new Point(10, 0);
$point3 = new Point(0, 0);
$point4 = new Point(0, 10);
$polygon = new Polygon(array($point1, $point2, $point3, $point4));

# Question 2
echo $polygon->getVerticesNumber()."\n";
echo "\n";

# Question 3
function decodeBooleen(bool $bool): string
{
    $res = "True";
    if (!$bool) {
        $res = "False";
    }
    return $res;
}
echo decodeBooleen($polygon->isEmpty())."\n";
echo "\n";

# Question 4
echo $polygon->getPerimeter()."\n";
echo "\n";

# Question 5
$point5 = new Point(10, 20);
echo decodeBooleen($polygon->insertPoint($point5, 2))."\n";
echo $polygon->getVerticesNumber()."\n";
echo "\n";

# Question 6
echo $polygon."\n";

# Question 7
$polygon2 = new Polygon(array($point1, $point2, $point5, $point3, $point4));
echo decodeBooleen($polygon->isEqual($polygon2))."\n";
$polygon3 = new Polygon(array($point1, $point2, $point3, $point4, $point5));
echo decodeBooleen($polygon->isEqual($polygon3))."\n";
