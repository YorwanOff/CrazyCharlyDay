<?php
session_start();

use crazycharlyday\vue\VueAccueil;
use crazycharlyday\vue\VueCreneau;
use Illuminate\Database\Capsule\Manager as DB;
use Slim\Slim;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';

//Important pour l'execution de slim et pour afficher les erreurs(pour le dev)
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
]];
$app = new Slim($config);



$app->get('/', function () {
    $vueIndex = new VueAccueil();
    $vueIndex->render(1);
})->setName("Menu");

$app->get('/creneaux', function () {
    $vueCre = new VueCreneau();
    $vueCre->render('LIST');
})->setName("Menu");


$db = new DB();
$db->addConnection(parse_ini_file("src/conf/conf.ini"));
$db->setAsGlobal();
$db->bootEloquent();

$app->run();
