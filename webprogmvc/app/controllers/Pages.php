<?php

class Pages extends Controller
{
    public function __construct()
    {
        // echo 'Pages Load';
    }
    public function index()
    {
        // $articles = $this->model();
        $data = [
            'title' => 'WebProgMVC',
        ];
        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us',
        ];
        $this->view('pages/about');
    }
}
