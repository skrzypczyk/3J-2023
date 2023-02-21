<?php
$uri = strtolower(trim($_SERVER["REQUEST_URI"], "/"));

if(!file_exists("routes.yml")){
    die("Le fichier routes.yml n'existe pas");
}
$routes  = yaml_parse_file("routes.yml");

//Si l'uri n'existe pas dans $routes die page 404
//Sinon si l'uri ne possède pas de controller ni d'action die erreur fichier routes.yml
//Sinon si il n'y a pas de fichier controller correspondant die absence du fichier controller
//Sinon si l'action n'existe pas die action inexistante
//Sinon appel de l'action


