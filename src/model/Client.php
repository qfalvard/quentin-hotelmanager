<?php

namespace App\Model;

class Client
{

    private $id;
    private $firstname;
    private $lastname;
    private $entryDate;
    private $departureDate;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getEntryDate()
    {
        return $this->entryDate;
    }

    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;
    }

    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }
}
