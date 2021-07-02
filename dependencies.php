<?php
use \Slim\Views\Twig;
use \controllers\helloController;
use \controllers\listaTelefonicaController;

global $app;

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

$container['helloController'] = function($c)
{
	return new helloController($c);
};

$container['listaTelefonicaController'] = function ($c)
{
	return new listaTelefonicaController($c);
};