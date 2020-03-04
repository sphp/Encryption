# Encryption
Super simple encryption decryption system. 
Example use:
```
<?php
function pre($v,$x=0){echo'<pre>';print_r($v);echo'</pre>';if($x)exit;}
function convert($str, $add=3){
	return implode('', array_map( function($chr)use($add){return chr(ord($chr)+$add);}, str_split($str)));
}
$key1 = 'kjhsdf$H$@%^$^$*sd45$#)JKHGJH$@%^$*sdSD$H$@%^$^$*sd45$#)JKHGJH$@%^$*sdSDGJH$@%^$@%^$*&!';
$key2 = 'asdkjhHGASDA%&^sdkj%#$#)JKsdHsdkjJKH:<>GSDA%&^sdkj%#$#)JKsdHsdkjJKH:<>GY:<>GYGsdkjKH:';
$key3 = 'kj%&^sdkj%#$#)()JKHsdk6sd3$@%^$*KH:<>sdkj%#$#)()JKHsdk6sd3$@%^$*KH:<>GYGsdkJDH$@%^$*&!';

$hash1 = convert($key1,5);
$hash2 = convert($key2,5);
$hash3 = convert($key3,5);

pre($key1);
pre($key2);
pre($key3);

pre($hash1);
pre($hash2);
pre($hash3);

pre(convert($hash1,-5));
pre(convert($hash2,-5));
pre(convert($hash3,-5));
```
