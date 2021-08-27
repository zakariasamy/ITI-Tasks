<?php

$text  = "082307";


$text = substr($text, 0, 2) . ':' . substr($text, 2, 2) . ':' .  substr($text, 4, 2); 
echo $text;
