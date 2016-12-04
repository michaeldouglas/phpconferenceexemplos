<?php

namespace Projeto\Biblioteca\Session;

use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\ArchiveMode;
use Dotenv\Dotenv;

class Session
{
    protected $dotenv;
    protected $opentok;
    public $session;
    public $apiKey;

    public function __construct()
    {
        $this->dotenv = (new Dotenv(__DIR__.'/../'))->load();

        $this->apiKey = getenv('API_KEY');
        $this->opentok = new OpenTok(getenv('API_KEY'), getenv('API_SECRET'));

        $this->setSession();
    }

    public function setSession()
    {
        $this->session = $this->opentok->createSession();

        $this->session = $this->opentok->createSession([ 'mediaMode' => MediaMode::ROUTED ]);

        $this->session = $this->opentok->createSession([ 'location' => '127.0.0.1' ]);

        $sessionOptions = array(
            'archiveMode' => ArchiveMode::ALWAYS,
            'mediaMode' => MediaMode::ROUTED
        );
        $this->session = $this->opentok->createSession($sessionOptions);
    }

    public function getSession()
    {
        return $this->session->getSessionId();
    }

    public function getOpenTok()
    {
        return $this->opentok;
    }
}