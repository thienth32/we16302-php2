<?php
namespace App\Helpers;

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\SubjectController;
use \Phroute\Phroute\RouteCollector;
class Route{
    public static function run($url){
        $router = new RouteCollector();

        // illuminate/database
        // illuminate/events
        // jenssegers/blade
        $router->get("/", [HomeController::class, 'index']);

        $router->get('admin/dashboard', [DashboardController::class, 'index']);
        $router->get('admin/subject/add', [SubjectController::class, 'addForm']);
        $router->post('admin/subject/add', [SubjectController::class, 'saveAdd']);


        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}
?>