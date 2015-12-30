<?php
/**
 * Description of Base.php.
 *
 * @package Dec\Provider\Controller
 * @author zhenhao<hit_zhenhao@163.com>
 */
namespace Dec\Provider\Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class Base implements ControllerProviderInterface
{
    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        return $controllers;
    }
}