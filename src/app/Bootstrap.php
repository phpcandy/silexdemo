<?php
/**
 * Description of Bootstrap.php.
 *
 * @package Dec
 * @author zhenhao<hit_zhenhao@163.com>
 */
namespace Dec;

use Silex\Application;
use Dec\Controller\Root;
use Dec\Controller\Hello;
use Dec\Provider\Service\Twig;

class Bootstrap
{
    /**
     * @var Application
     */
    private $app;

    public function __construct()
    {
        $this->app = new Application();
        $this->registerRoute();
        $this->registerProvider();
    }

    public function run()
    {
        $this->app->run();
    }

    protected function registerRoute()
    {
        $this->app->mount('/', new Root);
        $this->app->mount('/hello', new Hello);
    }

    protected function registerProvider()
    {
        $this->app->register(new Twig);
    }
}