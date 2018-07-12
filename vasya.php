<?php
//test124

$x = rand(0,10);
$var1 = 1;
$var2 = 1;
echo $x . '<br>';
while ($var1 < $x) {
    $var3 = $var1;
    $var1 = $var1 + $var2;
    $var2 = $var3;
}
if ($var1 > $x) {
    echo 'Задуманное число НЕ входит в числовой ряд';
}
if ($var1 === $x) {
    echo 'задуманное число входит в числовой ряд';
}

/*while (true) {
    if ($var1 > $x)
    {
        echo 'Задуманное число НЕ входит в числовой ряд';
        break;
    }
    else
    {
        if ($var1 === $x)
        {
            echo 'задуманное число входит в числовой ряд';
            break;
        }
       
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
 
    }
}*/