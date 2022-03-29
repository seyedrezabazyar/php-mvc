<?php

class Articles extends Controller
{
    public function __construct()
    {
        // echo 'Articles Load';
    }
    public function index()
    {
        // $this->model('article');
        $this->view('article');
    }
    public function edit($id)
    {
        echo $id;
    }
}
