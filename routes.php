<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \controllers\helloController;
use \controllers\listaTelefonicaController;

$app->get('/hello/{name}', helloController::class);

$app->get('/index', 'listaTelefonicaController:index');

$app->get('/listatelefonica', 'listaTelefonicaController:listatelefonica');

$app->get('/inserirnovotelefone', 'listaTelefonicaController:inserirnovotelefone');

$app->post('/inserirnovotelefone', 'listaTelefonicaController:gravarTelefone');

$app->get('/visualizardetalhes/{id}', 'listaTelefonicaController:visualizarDetalhes');

$app->get('/apagartelefone/{id}', 'listaTelefonicaController:confirmarApagarTelefone');

$app->post('/apagartelefone', 'listaTelefonicaController:apagarTelefone');