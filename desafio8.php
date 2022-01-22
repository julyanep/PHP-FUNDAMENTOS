<?php

if($n % 2 !== 0)
{
    echo "Estranho";
}
else
{
    if($n < 10)
    {
        echo "Não é estranho";
    }
    elseif($n >= 10 && $n <= 20)
    {
        echo "Estranho";
    }
    else
    {
        echo "Não é estranho";
    }
}