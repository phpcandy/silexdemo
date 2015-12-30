<?php
/**
 * Description of Hello.php.
 *
 * @package Dec\Controller
 * @author zhenhao<hit_zhenhao@163.com>
 */
namespace Dec\Controller;

use Dec\Provider\Controller\Base;
use Silex\Application;

class Hello extends Base
{
    public function connect(Application $app)
    {
        $controllers = parent::connect($app);
        $controllers->get('/', [$this, 'index']);
        $controllers->get('/{name}', [$this, 'hello']);
        return $controllers;
    }

    public function index(Application $app)
    {
        return $app['twig']->render('hello/index.twig');
    }

    public function hello(Application $app, $name)
    {
        return 'Hello ' . $name;
    }
}