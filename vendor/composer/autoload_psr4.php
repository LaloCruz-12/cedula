<?php

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\SimpleCache\\' => array($vendorDir . '/psr/simple-cache/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Illuminate\\Contracts\\' => array($vendorDir . '/illuminate/contracts'),
    'Fideloper\\Proxy\\' => array($vendorDir . '/fideloper/proxy/src'),
);