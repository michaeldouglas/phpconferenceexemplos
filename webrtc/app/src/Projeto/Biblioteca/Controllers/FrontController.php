<?php

namespace Projeto\Biblioteca\Controllers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Projeto\Biblioteca\Session\Session;
use Projeto\Biblioteca\Token\Token;

class FrontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/index.twig');
        });

        $controllers->get('/token', function (Application $app, $id = 1) {
            $session = new Session();
            $token = new Token(new Session());

            //$data = $db->getPaginas($app, $id);

            /*if(count($data) > 0) {
                return $app->json($data, 200);
            }*/

            return $app->json(['token' => $token->getToken(), 'sessionId' => $session->getSession(), 'apiKey' => $session->apiKey], 200);
        });

        return $controllers;
    }
}