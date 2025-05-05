<?php
function square ($base , $height)
{
    return $base * $height;
}

function triangle ($base , $height)
{
    return ($base * $height) / 2;
}

function trapezoid ($upperbase ,$lowerbese , $height)
{
    return ($upperbase + $lowerbese) *$height / 2;
}

echo square(5 , 5)."\n";
echo triangle(7 , 8)."\n";
echo trapezoid(4 , 5 , 4)."\n";