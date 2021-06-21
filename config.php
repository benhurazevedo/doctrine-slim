<?php
$AppConfig = [
	'settings' => [
		'displayErrorDetails' => true
		,'conn' => [
			"driver" => "pdo_sqlite",
			"path" => __DIR__."\db.sqlite"
		]
		,'models' => [
			__DIR__."\models"
		]
	]
];