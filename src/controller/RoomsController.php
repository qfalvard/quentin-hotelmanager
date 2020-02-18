<?php

namespace App\Controller;

class RoomsController extends AbstractController
{

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id)
    {
        // 1. Récupérer le car par son id
        $room = $this->container->getRoomManager()->findOneById($id);
        

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room,
        ]);
    }

    public function new()
    {
        $clients = $this->container->getClientManager()->findAll();
        $rooms = $this->container->getRoomManager()->findAll();

        echo $this->container->getTwig()->render('/rooms/new.html.twig', [
            'clients' => $clients,
            'rooms'  => $rooms
        ]);
    }

    public function create()
    {
        $this->container->getRoomManager()->create($_POST);
        header('Location: ' . $this->configuration['env']['base_path']);
    }

    public function delete(int $id)
    {
        $this->container->getRoomManager()->delete($id);
        header('Location: ' . $this->configuration['env']['base_path']);

    }
}
