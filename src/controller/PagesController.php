<?php

namespace App\Controller;

class PagesController extends AbstractController
{

    /**
     * Route: page d'accueil ('/')
     */
    public function index()
    {
        $rooms = $this->container->getRoomManager()->findAll();
        $clients = $this->container->getClientManager()->findAll();

        //2. Afficher la client
        echo $this->container->getTwig()->render('pages/index.html.twig', [
            'rooms' => $rooms,
            'clients' => $clients,
        ]);
    }
}
