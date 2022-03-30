<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->ArticleModel = $this->model('Article');
    }

    public function index()
    {
        $articles = $this->ArticleModel->getArticle();
        $data = [
            'title' => 'WebProgMVC',
            'articles' => $articles
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
