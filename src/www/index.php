<?php
/**
 * Description of index.php.
 *
 * @package fruits
 * @author zhenhao<hit_zhenhao@163.com>
 */
define('BASE_PATH', dirname(dirname(__DIR__)));
define('VENDOR_PATH', BASE_PATH . '/vendor');
define('APP_PATH', BASE_PATH . '/src/app');

$loader = require VENDOR_PATH . '/autoload.php';
$loader->addPsr4('Dec\\', [
    APP_PATH
]);

(new Dec\Bootstrap())->run();