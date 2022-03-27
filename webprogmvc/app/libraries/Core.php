<?php

class Core
{
    protected $currentController = 'pages';
    protected $currentMethods = 'index';
    protected $Params = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}
