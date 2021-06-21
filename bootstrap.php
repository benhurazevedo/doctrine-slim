<?php 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(
	$AppConfig['settings']['models'],
	$isDevMode,
	$proxyDir, 
	$cache,
	$useSimpleAnnotationReader
	);

$conn = $AppConfig['settings']['conn'];

$entityManager = EntityManager::create($conn, $config);