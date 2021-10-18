<?php
$message1 = "0@sn9sirppa@#?ia’jgtvryko1";
$length1 = strlen($message1) / 2;
$shortMessage1 = substr($message1, 6, $length1);
$inverseMessage1 = strrev($shortMessage1);
$finalMessage1 = str_ireplace("?#@", " ", $inverseMessage1);

$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$length2 = strlen($message2) / 2;
$shortMessage2 = substr($message2, 6, $length2);
$inverseMessage2 = strrev($shortMessage2);
$finalMessage2 = str_ireplace("?#@", " ", $inverseMessage2);

$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';
$length3 = strlen($message3) / 2;
$shortMessage3 = substr($message3, 6, $length3);
$inverseMessage3 = strrev($shortMessage3);
$finalMessage3 = str_ireplace("?#@", " ", $inverseMessage3);

echo ($finalMessage1 . ' ' . $finalMessage2 . ' ' . $finalMessage3);