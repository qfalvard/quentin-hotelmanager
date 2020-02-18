<?php

namespace App\Controller;

class ClientsController extends AbstractController
{
    /**
     * Afficher la page des clients
     * Route: GET /clients/
     */
    public function index()
    {
        $clients = $this->container->getClientManager()->findAll();

        //2. Afficher la client
        echo $this->container->getTwig()->render('clients/index.html.twig', [
            'clients' => $clients,
        ]);
    }

    /**
     * Afficher la page de 1 client
     * Route: GET /clients/:id
     */
    public function show(int $id)
    {
        // 1. Récupérer le car par son id
        $client = $this->container->getClientManager()->findOneById($id);

        //2. Afficher la client
        echo $this->container->getTwig()->render('clients/show.html.twig', [
            'client' => $client
        ]);
    }

    public function delete(int $id)
    {
        $this->container->getClientManager()->delete($id);
        header('Location: ' . $this->configuration['env']['base_path'] . '/clients');
    }

    public function new()
    {
        echo $this->container->getTwig()->render('clients/new.html.twig');
    }

    public function create()
    {
        $this->container->getClientManager()->create();
        header('Location: ' . $this->configuration['env']['base_path'] . '/clients');
    }

    public function showedit(int $id)
    {
        $client = $this->container->getClientManager()->findOneById($id);

        echo $this->container->getTwig()->render('/clients/showedit.html.twig', [
            'client' => $client,
        ]);
    }

    public function edit(int $id)
    {
        $data = $_POST;
        $client = $this->container->getClientManager()->edit($id, $data);
        header('Location: ' . $this->configuration['env']['base_path'] . '/clients/');
    }
}
