<?php

namespace Projeto\Biblioteca\Token;

use Projeto\Biblioteca\Session\Session;
//use OpenTok\Session;
use OpenTok\Role;

class Token
{
    private $token;

    public function __construct(Session $session)
    {
        //$token = $session->session->generateToken($session->getSession());

        $this->token = $session->session->generateToken($session->getSession());

        /*$this->token = $session->session->generateToken(array(
            'role'       => Role::MODERATOR,
            'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
            'data'       => 'name=Johnny'
        ));*/
    }

    public function getToken()
    {
        return $this->token;
    }
}