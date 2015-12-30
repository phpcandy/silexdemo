<?php
/**
 * Description of Twig.php.
 *
 * @package Dec\Provider\Service
 * @author zhenhao<hit_zhenhao@163.com>
 */
namespace Dec\Provider\Service;

use Silex\Provider\TwigServiceProvider;
use Silex\Application;

class Twig extends TwigServiceProvider
{
    public function register(Application $app)
    {
        parent::register($app);
        $app['twig.path'] = APP_PATH . '/Template';
    }
}