<?php

namespace App\Model;

class Client 
{
    public function __construct(
        private int $id,
        private string $name,
        private string $first_name,
        private string $email
    ) {
        
    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function getName() : string 
    {
        return $this->name;
    }

    public function getFirstName() : string 
    {
        return $this->first_name;
    }

    public function getEmail() : string 
    {
        return $this->email;
    }


}