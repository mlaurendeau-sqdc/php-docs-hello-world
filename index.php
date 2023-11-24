<?php

//echo "Hello World!";

$homepage = file_get_contents('http://swint1.sqdc.ca:8080/SQDCInfosProduits?tv=2&succ=77105&page=0&timer=10');
ereg("'(.*)', {1,}'(.*)'", $homepage, $regs);
