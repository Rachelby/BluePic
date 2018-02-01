<?php

/**
*
*/
require "php-graph-sdk/src/Facebook/autoload.php";
class GalerieController
{
    public function indexAction($params)
    {
        $v = new View("galerie");

        $v->assign("title", "Galerie");
    }

    public function galerieAction($params)
    {
        $v = new View("galerie");

        $v->assign("title", "Galerie");
    }

    public function ajout_imageAction($params)
    {
        $v = new View("ajout_image");

        $v->assign("title", "Ajouter une photo");
    }
    
    
    public function ajout_albumAction($params)
    {
        $v = new View("ajout_album");

        $v->assign("title", "Ajouter un album");
    }
    
    

}
