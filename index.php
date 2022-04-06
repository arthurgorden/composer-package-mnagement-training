<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('blablablablablabla');


$bessie->setEyes('XX')
    ->setTongue('Q')
    ->setPoop('poop')
    ->setUdder('W');
// store the output in a variable
$output = $bessie->say();
echo $output;

use CowSay\Bear;

$margueritte = new Bear('I\'m a bear');
$output = $margueritte;
echo $output;
