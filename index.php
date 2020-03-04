<?php

function pre($v,$x=0){echo'<pre>';print_r($v);echo'</pre>';if($x)exit;}

function convert($str, $add=5){
    return implode('', array_map( function($chr)use($add){return chr(ord($chr)+$add);}, str_split($str)));
}
