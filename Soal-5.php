<?php
echo kata("makan", "a","n");
function kata($str, $replace, $with)
{
    $newstring="";
    for($i=0;$i<strlen($str);$i++)
    {
        if(substr($str,$i,1)==$replace)
        {
            $newstring.=$with;
        }
        else{
            $newstring.=substr($str,$i,1);
        }
    }
    return $newstring;
}
