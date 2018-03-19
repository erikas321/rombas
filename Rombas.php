<?php
function rombas($number)
{
    echo "<pre>";
    for ($i = 1; $i <= $number; $i++) {
        for ($j = $i; $j<=$number; $j++)
            echo "&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo("&nbsp;*");
        echo "<br>";
    };
    for ($i = $number; $i >= 0; $i--) {
        for ($j = $number - $i; $j >= 0; $j--)
            echo "&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--)
            echo("&nbsp;*");
        echo "<br>";
    }
}
echo "</pre>";
function blabla($number)
{
    echo "<pre>";
    for ($break = 1; $break <= $number; $break++) {
        for ($dot = $break; $dot <= $number; $dot++)
            echo "&nbsp;&nbsp;&nbsp";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp");
        echo "<br>";
    };
    for ($break = $number; $break >= 0; $break--) {
        for ($dot = $number - $break; $dot >= 0; $dot--)
            echo "&nbsp;&nbsp;&nbsp";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp");
        echo "<br>";
    }
}
echo "</pre>";
