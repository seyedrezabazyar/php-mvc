<?php

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethods = 'index';
    protected $Params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // Lock in controllers for first value
        if ($url && file_exists('../app/controllers/' . ucwords($url['0']) . '.php')) {
            // if exists set as controller
            $this->currentController = ucwords($url['0']);
            // unset 0 index
            unset($url['0']);
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Init the controller
        $this->currentController = new $this->currentController;
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
