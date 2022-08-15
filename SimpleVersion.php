<?php

[$a, $b] = explode(' ', readline());

function zeroRemove(int $number): int
{
    return (int)str_replace("0", '', (string)$number);
}

if (zeroRemove($a) + zeroRemove($b) === zeroRemove($a + $b)) {
    echo 'Tab';
}

echo 'Shift';