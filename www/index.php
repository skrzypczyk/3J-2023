<?php
$uri = strtolower(trim($_SERVER["REQUEST_URI"], "/"));
$uri = empty($uri)?"default":$uri;


if(!file_exists("routes.yml")){
    die("Le fichier routes.yml n'existe pas");
}
$routes  = yaml_parse_file("routes.yml");

//Si l'uri n'existe pas dans $routes die page 404
if(empty($routes[$uri])){
    die("Page 404 : Not found");
}
//Sinon si l'uri ne possède pas de controller ni d'action die erreur fichier routes.yml
if(empty($routes[$uri]["controller"]) || empty($routes[$uri]["action"])){
    die("Erreur fichier routes.yml pour : ".$uri);
}

$c = $routes[$uri]["controller"]; //Security
$a = $routes[$uri]["action"]; //login

//Sinon si il n'y a pas de fichier controller correspondant die absence du fichier controller
if(!file_exists("controllers/".$c.".php")){
    die("Le fichier "."controllers/".$c.".php"." n'existe pas");
}

//Sinon si l'action n'existe pas die action inexistante
include "controllers/".$c.".php";
if(!class_exists($c)){
    die("La classe ".$c." n'existe pas");
}
$controller = new $c(); //new Front();

//Sinon appel de l'action
if(!method_exists($controller, $a)){
    die("La méthode ".$a." n'existe pas");
}

$controller->$a();


