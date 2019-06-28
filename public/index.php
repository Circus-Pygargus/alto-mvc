<?php 

// dirname(__DIR) retourne le chemin indiqué dans apache2.cof
require_once dirname(__DIR__). '/vendor/autoload.php';

$router = new AltoRouter();
/*
    ici les mots /, /produits, /a-propos et /contact sont lus dans l'url en méthode GET
    'c' donne le nom de la classe Controller appelée
    'a' donne le nom de la méthode de la classe ci-dessus
*/
$router->map('GET', '/', array('c' => 'DefaultController', 'a' => 'index'));
$router->map('GET', '/a-propos', array('c' => 'DefaultController', 'a' => 'about'));
$router->map('GET', '/contact', array('c' => 'DefaultController', 'a' => 'contact'));
$router->map('GET', '/produits', array('c' => 'ProduitController', 'a' => 'default'));

// on passe par altorouter::addMatchTypes() pour check la variable d'url avec la regex (ici qd /produit/delete/id à effacer)
$router->addMatchTypes(array('idProduit' => '[0-9]{1,5}'));
$router->map('GET', '/produit/delete/[i:idProduit]', array('c' =>'produitController', 'a' => 'delete'));

$match = $router->match();
$controller = 'App\\Controller\\' . $match['target']['c'];
$action = $match['target']['a'];

// instancier l'objet d'après l'url
$object = new $controller();
// ['params'] correspond à ce qu'il y a après /produit/delete/ dans l'url
if (count($match['params']) === 0) {
    $print = $object->{$action}();
}
else {
    $print = $object->{$action}($match['params']);
}

echo $print;
