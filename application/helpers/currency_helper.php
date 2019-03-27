<?php
function currency($usdValue, $curvalue, $name)
{
    $val = $usdValue * $curvalue;
    return $name.' '.number_format($val,2);
}

function Ocurrency($usdValue, $curvalue)
{
    $val = $usdValue * $curvalue;
    return number_format($val,2);
}

?>