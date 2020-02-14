<?php

require_once 'Decorator.php';

$text = new Decorator();

$text->sentence = "Hi, My name is Matt";

echo $text->lower();
echo $text->upper();
