<?php

class User {
    
    //ATTRIBUTES
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $password;
    
    //CONSTRUCTOR
    public function __construct($first_name, $last_name, $email, $password)
    {
        $this->id = null;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
    
    //ID
    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    //FIRST NAME
    public function getFirstName() : string
    {
        return $this->first_name;
    }
    public function setFirstName(string $first_name) : void
    {
        $this->first_name = $first_name;
    }
    
    //LAST NAME
    public function getLastName() : string
    {
        return $this->last_name;
    }
    public function setLastName(string $last_name) : void
    {
        $this->last_name = $last_name;
    }
    
    //EMAIL
    public function getEmail() : string
    {
        return $this->email;
    }
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    //PASSWORD
    public function getPassword() : string
    {
        return $this->password;
    }
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
}

?>