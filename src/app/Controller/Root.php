<?php
/**
 * Description of Root.php.
 *
 * @package Dec\Controller
 * @author zhenhao<hit_zhenhao@163.com>
 */
namespace Dec\Controller;

use Dec\Provider\Controller\Base;
use Silex\Application;

class Root extends Base
{
    public function connect(Application $app)
    {
        $controllers = parent::connect($app);
        $controllers->get('/', [$this, 'index']);
        return $controllers;
    }

    public function index(Application $app)
    {
        return 'Hello world';
    }
}