<?php

$color = ["white", "red", "blue", "yellow", "brown"];
$new = ["shirt", "polo", "jacket"];

array_splice($color, 2, 1, $new);

echo "<pre>";

print_r($color);
echo "</pre>";

?>
