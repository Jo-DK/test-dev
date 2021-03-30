<?php


    use CoffeeCode\Router\Router;


    $router = new Router('http://localhost:8080');

    $router->namespace('Src\Controllers');

    $router->group(null);

    $router->get('/','CarrosController:index');

    $router->get('/Marcas', function(){
        require('./Public/template.php');
    });


    $router->get('/Carros', 'CarrosController:listar');

    $router->post('/Carros', function(){
        echo '<h1>post carros</h1>';

    });

    $router->put('/Carros/{$id}', function($id){
        echo '<h1>put carros</h1>';
        var_dump($id);
    });

    $router->delete('/Carros/{$id}', function($id){
        echo '<h1>delete carros</h1>';
        var_dump($id);
    });



    $router->dispatch();

    
    if($router->error()){
        dd($router->error());
    }