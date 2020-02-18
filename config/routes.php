<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room
$router->get('/rooms/new', 'RoomsController@new'); // Affichage de 1 room
$router->post('/rooms/create', 'RoomsController@create'); // Affichage de 1 room
$router->get('/rooms/(\d+)/delete', 'RoomsController@delete'); // Suppression d'une room


/**
 * Routes CLIENT
 */
$router->get('/clients/', 'ClientsController@index'); // Affichage de tous les clients
$router->get('/clients/new', 'ClientsController@new'); // Formulaire création d'un client
$router->post('/clients/create', 'ClientsController@create'); // fonction création d'un client
$router->get('/clients/(\d+)/', 'ClientsController@show'); // Affichage d'1 client
$router->get('/clients/(\d+)/showedit', 'ClientsController@showedit'); // Edition d'un client
$router->post('/clients/(\d+)/edit', 'ClientsController@edit'); // Edition d'un client
$router->get('/clients/(\d+)/delete', 'ClientsController@delete'); // Suppression d'un client


$router->run();
