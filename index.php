<?php

//echo "Hello World!";

$homepage = file_get_contents('https://www.w3schools.com');
ereg("'(.*)', {1,}'(.*)'", $homepage, $regs);
