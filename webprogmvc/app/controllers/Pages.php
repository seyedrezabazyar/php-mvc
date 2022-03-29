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
            // 'article' => $articles
        ];
        $this->view('pages/index', $data);
    }
    public function about()
    {
        $this->view('pages/about');
    }
}
