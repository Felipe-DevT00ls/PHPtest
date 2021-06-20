<?php
require "config.php";
require __DIR__."/vendor/autoload.php";

use Core\Core;

$core = new Core();
$core->run();