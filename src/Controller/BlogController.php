<?php
class BlogController
{
    public function index()
    {
        include __DIR__ . '/../../Templates/index.php';
    }

    public function tous_articles()
    {
        include __DIR__ . '/../Templates/about.php';
        $a = new Articles();
        $a->findAll();
    }

    public function un_article()
    {
        include __DIR__ . '/../Templates/blog_single.php';
        $a = new Articles();
        $a->findOne(1);
    }

    public function supp_article()
    {
        include __DIR__ . '/../Entity/Articles.php';
        $a = new Articles();
        $a->deleteOne(1);
    }
}
