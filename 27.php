<?php
function wordEnding($h, variant1, variant2, variant3){
    $h1 = $h % 10;
    if ($h >= 5 && $h <= 20){
        $word = 'variant1';
    }
    elseif ($h1 = 1){
        $word = 'variant2';
    }
    elseif ($h1 >= 2 && $h1 <= 4){
        $word = 'variant3';
    }
    else{
        $word = 'variant1';

    }

    return $word;
}

for ($i = 0; $i < 60; $i++)
echo "$i ", wordEnding($i, 'минут', 'минута', 'минуты') . "<br>";
?>