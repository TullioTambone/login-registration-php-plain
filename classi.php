<?php
session_start();
// 1. Crea una classe `User` che rappresenti un utente con attributi come nome, cognome, email e password.

$users = [
    new User('nome' , 'cognome' , 'mail@mail.com', 'password'),
];

class User{
    //creo le variabili
    private $name;
    private $surname;
    private $email;
    private $password;

    //le istanzio
    public function __construct($name, $surname, $email, $password){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(){
        return $this->name;
    }
    public function getMail(){
        return $this->email;
    }

}

var_dump($users)
?>