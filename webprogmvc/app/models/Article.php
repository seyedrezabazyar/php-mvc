<?php

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getArticle()
    {
        $this->db->query("SELECT * FROM articles");
        return $this->db->fetchAll();
    }
}
