<?php
session_start();
// 1. Crea una classe `User` che rappresenti un utente con attributi come nome, cognome, email e password.

$users = array(
    0 => 'culo'
);


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

    public function push($var){
        array_push($users, $var);
    }
}
?>