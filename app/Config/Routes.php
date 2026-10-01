<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('Home', 'Home::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');
$routes->get('/quem_sou', 'ConteudoController::Quem_sou');

// Rotas para a funcionalidade de Contato
$routes->get('Contato', 'ContatoController::index');       // Exibe o formulário
$routes->post('Contato/salvar', 'ContatoController::salvar'); // Processa e salva os dados do formulário
