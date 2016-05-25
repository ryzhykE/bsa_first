<?php
require __DIR__.'/vendor/autoload.php';

use Greeting\Greeting;

$speak= new Greeting();
$speak->say('Evgeniy');

