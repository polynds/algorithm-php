<?php

use Base\Helper;

require_once "../vendor/autoload.php";

$arr = Helper::generateArr(10);
Helper::vdump(\ArrayStack\Stack::find('()[]{}'));
Helper::vdump(\ArrayStack\Stack::find('()[{}'));
