<?php 
namespace controllers;

use \Slim\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



class HelloController
{
    private $container;
    public function __construct(Container $c)
    {
        $this->container = $c;
    }
    public function __invoke(Request $request, Response $response, array $args)
    {
        $name = $args['name'];
        $response->getBody()->write('Hello, ' . $name);
        return $response;
    }
}