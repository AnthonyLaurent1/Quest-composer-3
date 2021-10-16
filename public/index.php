<?php
require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
$output = $bessie->setTongue('U');
echo $output;
