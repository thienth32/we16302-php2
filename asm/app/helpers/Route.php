<?php
namespace App\Helpers;

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\SubjectController;
use App\Models\Question;
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

        $router->post('add-question', function(){
            
            // $model = Question::create($_POST);
            $model = new Question();
            // $model->name = $_POST['name'];
            // $model->quiz_id = $_POST['quiz_id'];
            // $model->img = $_POST['img'];
            $model->fill($_POST);
            $model->save();
            var_dump($model);
        });

        $router->post('edit-question/{id}', function($id){
            $model = Question::find($id);
            $model->fill($_POST);
            $model->save();
            var_dump($model);
        });

        $router->get('test-layout', function(){
            return view('layouts.main');
        });

        $router->get('mon-hoc', [SubjectController::class, 'index']);
        // ví dụ:
        // hóa đơn có 5 trạng thái (status): 1 - đặt hàng, 2 - xác nhận, 3 - giao hàng, 4 - hoàn thành, 5 - hủy
        // lấy ra các hóa đơn có trạng thái 1, 3, 5
        // Order::whereIn('status', [1, 3, 5])->get();
        // Order::whereNotIn('status', [2, 4])->get();
        


        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}
?>