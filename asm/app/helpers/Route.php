<?php
namespace App\Helpers;

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\SubjectController;
use \Phroute\Phroute\RouteCollector;
class Route{
    public static function run($url){
        $router = new RouteCollector();

        $router->filter('auth', function(){
            if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
                header('location: ' . BASE_URL. 'login');
                die;
            }
        });

        $router->get('login', [LoginController::class, 'loginForm']);
        $router->get('fake-login', [LoginController::class, 'fakeLogin']);
        $router->get("/", [HomeController::class, 'index']);
        $router->group(['prefix' => 'admin'], function($router){
            
            $router->get('dashboard', [DashboardController::class, 'index']);

            $router->group(['prefix' => 'subject'], function($router){
                $router->get('add', 
                        [SubjectController::class, 'addForm'], 
                        ['before' => 'auth']);
                $router->post('add', [SubjectController::class, 'saveAdd']);
                $router->get('{id}/edit/{name}?', [SubjectController::class, 'editForm']);
            });
            
        });
        


        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}
?>