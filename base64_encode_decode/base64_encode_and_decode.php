<?php // base64_encode()/base64_decode() example

$string  = 'ali.ahmed@yahoo.com';
$encoded = base64_encode($string);
$decoded = base64_decode($encoded);
echo $encoded ."\n";
echo $decoded;