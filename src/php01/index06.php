<?php
function tri($bottom, $tole) {
  return $bottom * $tole / 2;
}
function sqe($bottom, $tole) {
    return $bottom * $tole;
}
function tra($row, $top, $tole) 
{
    return ($row + $top) * $tole / 2;
}
echo tri(30, 30) . "<br />";
echo sqe(15, 13) . "<br />";
echo tra(3, 5, 8);
