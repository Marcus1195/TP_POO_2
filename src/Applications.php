<?php


// Routeur a developper ici ...
class Application {
    public static function run(){

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }

    if ($path==''){
        include __DIR__.'/../src/Controller/HomeController.php';
        $controller = new HomeController();
        $controller->home(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/articles'){
        include __DIR__.'/../src/Controller/BlogController.php';
        $articles = new BlogController();
        $articles->index(); //Renvoyer la vue du formulaire de connexion
    }

        

    if ($path=='/tous_articles'){
        include __DIR__.'/../src/Controller/BlogController.php';
        $articles = new BlogController();
        $articles->tous_articles(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/un_article'){
        include __DIR__.'/../src/Controller/BlogController.php';
        $articles = new BlogController();
         $articles->un_article(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/supp_article'){
        include __DIR__.'/../src/Controller/BlogController.php';
        $articles = new BlogController();
        $articles->supp_article(); //Renvoyer la vue du formulaire de connexion
    }


        
    }
}