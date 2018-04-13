<?php

$router->group([
    'prefix' => 'api',
    'namespace' => 'Api',
    'middleware' => [],
], function () use ($router) {

    $router->get('/ping', ['as' => 'api.ping', 'uses' => 'MiscController@getPing']);

    // Projects
    $router->group([
        'prefix' => 'projects',
        'middleware' => ['api-contenttype'],
    ], function () use ($router) {
        $router->get('/', ['as' => 'api.projects.index', 'uses' => 'ProjectController@index']);
        $router->get('/{project}', ['as' => 'api.projects.show', 'uses' => 'ProjectController@show']);
        $router->post('/', ['as' => 'api.projects.store', 'uses' => 'ProjectController@store']);
        $router->put('/{project}', ['as' => 'api.projects.update', 'uses' => 'ProjectController@update']);
        $router->delete('/{project}', ['as' => 'api.projects.delete', 'uses' => 'ProjectController@delete']);
    });

    // Users
    $router->group([
        'prefix' => 'users',
        'middleware' => ['api-contenttype'],
    ], function () use ($router) {
        $router->get('/', ['as' => 'api.users.index', 'uses' => 'UserController@index']);
        $router->get('/{user}', ['as' => 'api.users.show', 'uses' => 'UserController@show']);
        $router->post('/', ['as' => 'api.users.store', 'uses' => 'UserController@store']);
        $router->put('/{user}', ['as' => 'api.users.update', 'uses' => 'UserController@update']);
        $router->delete('/{user}', ['as' => 'api.users.delete', 'uses' => 'UserController@delete']);
    });
});
