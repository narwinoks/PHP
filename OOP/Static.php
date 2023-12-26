<?php
require_once './helper/MathHelper.php';

use  helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
echo 'TOTAL' . MathHelper::sum(10, 10, 10, 10) . PHP_EOL;