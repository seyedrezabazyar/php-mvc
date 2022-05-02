<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index()
    {
        $allContacts = $this->contactModel->getAll();
        var_dump($allContacts);
        echo "Hi From HomeController of homebook";
    }
}
