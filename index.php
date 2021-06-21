<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\Views\Twig;

require_once "config.php";

require_once "bootstrap.php";

$app = new \Slim\App($AppConfig);

#dependencies
$container = $app->getContainer();

$container['twig'] = function($c)
{
	$view = new Twig("views", array('cache' => 'cache/twig', 'debug' => true));
	return $view;
};

$container['entityManager'] = function($c)
{
	global $entityManager;
	return $entityManager;
};

#routes (future controller)
$app->get('/hello/{name}', function(Request $request, Response $response, array $args){
	$name = $args['name'];
	$response->getBody()->write('Hello, ' . $name);
	return $response;
});

$app->get('/index', function(Request $request, Response $response, array $args){
	return $response->withRedirect('/listatelefonica', 301);
});

$app->get('/listatelefonica', function(Request $request, Response $response, array $args){
	global $app;
	$em = $app->getContainer()['entityManager'];
	$telefones = $em->getRepository('Telefone')->findAll();
	$view = $app->getContainer()['twig'];
	return $view->render($response, "listatelefonica.html", [ "telefones" => $telefones ]);
});

$app->get('/inserirnovotelefone', function(Request $request, Response $response, array $args) {
	global $app;
	$view = $app->getContainer()['twig'];
	return $view->render($response, "inserirnovotelefone.html", [ ]);
});

$app->post('/inserirnovotelefone', function(Request $request, Response $response, array $args) {
	global $app;
	
	$postParams = $request->getParsedBody();
	$telefone = new Telefone();
	$telefone->setNome($postParams['nome']);
	$telefone->setTelefone($postParams['telefone']);
	$em = $app->getContainer()['entityManager'];
	$em->persist($telefone);
	$em->flush();
	$view = $app->getContainer()['twig'];
	return $view->render($response, "telefonegravado.html", [ ]);
});

$app->get('/visualizardetalhes/{id}', function(Request $request, Response $response, array $args) {
	global $app;
	
	$em = $app->getContainer()['entityManager'];
	$telefone = $em->find('Telefone', $args["id"]);
	
	$view = $app->getContainer()['twig'];
	return $view->render($response, "visualizardetalhes.html", [ "telefone" => $telefone ]);
});

$app->get('/apagartelefone/{id}', function(Request $request, Response $response, array $args) {
	global $app;
	
	$em = $app->getContainer()['entityManager'];
	$telefone = $em->find('Telefone', $args["id"]);
	
	$view = $app->getContainer()['twig'];
	return $view->render($response, "apagartelefone.html", [ "telefone" => $telefone ]);
});

$app->post('/apagartelefone', function(Request $request, Response $response, array $args) {
	global $app;
	
	$postParams = $request->getParsedBody();
	
	$em = $app->getContainer()['entityManager'];
	$telefone = $em->find('Telefone', $postParams['id']);
	$em->remove($telefone);
	$em->flush();
	
	$view = $app->getContainer()['twig'];
	return $view->render($response, "telefoneapagado.html", [ ]);
});

$app->run();
