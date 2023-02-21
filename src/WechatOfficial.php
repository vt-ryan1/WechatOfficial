<?php

namespace Victtech\WechatOfficial;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class WechatOfficial
{
    protected $session;
    protected $config;
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function serve()
    {
        dd('^_^');
    }
}
