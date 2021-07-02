<?php 
namespace controllers;

use \Slim\Container;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Telefone;

class listaTelefonicaController
{
    private $container;
    public function __construct(Container $c)
    {
        $this->container = $c;
    }
    public function index(Request $request, Response $response, array $args)
    {
        return $response->withRedirect('/listatelefonica', 301);
    }
    public function listatelefonica (Request $request, Response $response, array $args)
    {
        $em = $this->container['entityManager'];
        $telefones = $em->getRepository('Telefone')->findAll();
        $view = $this->container['twig'];
        return $view->render($response, "listatelefonica.html", [ "telefones" => $telefones ]);
    }
    
    public function inserirnovotelefone (Request $request, Response $response, array $args) 
    {
        $view = $this->container['twig'];
        return $view->render($response, "inserirnovotelefone.html", [ ]);
    }
    
    public function gravarTelefone (Request $request, Response $response, array $args) 
    {
        $postParams = $request->getParsedBody();
        $telefone = new Telefone();
        $telefone->setNome($postParams['nome']);
        $telefone->setTelefone($postParams['telefone']);
        $em = $this->container['entityManager'];
        $em->persist($telefone);
        $em->flush();
        $view = $this->container['twig'];
        return $view->render($response, "telefonegravado.html", [ ]);
    }
    
    public function visualizarDetalhes(Request $request, Response $response, array $args) 
    {
        
        $em = $this->container['entityManager'];
        $telefone = $em->find('Telefone', $args["id"]);
        
        $view = $this->container['twig'];
        return $view->render($response, "visualizardetalhes.html", [ "telefone" => $telefone ]);
    }
    
    public function confirmarApagarTelefone(Request $request, Response $response, array $args) 
    {
        $em = $this->container['entityManager'];
        $telefone = $em->find('Telefone', $args["id"]);
        
        $view = $this->container['twig'];
        return $view->render($response, "apagartelefone.html", [ "telefone" => $telefone ]);
    }
    
    public function apagarTelefone(Request $request, Response $response, array $args) 
    {
        $postParams = $request->getParsedBody();
        
        $em = $this->container['entityManager'];
        $telefone = $em->find('Telefone', $postParams['id']);
        $em->remove($telefone);
        $em->flush();
        
        $view = $this->container['twig'];
        return $view->render($response, "telefoneapagado.html", [ ]);
    }
}