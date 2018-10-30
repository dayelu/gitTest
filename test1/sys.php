<?php
$res1 = system("ls -l");
$res2 = system("lsl");
$res3 = system("sudo -i find / -name *.c");
var_dump($res1);
var_dump($res2);
var_dump($res3);
echo 1111;
?>
