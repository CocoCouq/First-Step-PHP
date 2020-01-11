<?php

function calculette($nb1, $opt, $nb2)
{
       if($opt == '*')
        return $nb1*$nb2;
       if($opt == '/')
        return $nb1/$nb2;
       if($opt == '+')
        return $nb1+$nb2;
       if($opt == '-')
        return $nb1-$nb2;
}
?>
