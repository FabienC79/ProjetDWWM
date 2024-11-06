<?php

namespace Models;

class User
{
    private string $pseudo;
    private string $name;
    private string $firstname;
    private string $email;
    private string $password;
    private \DateTime $registration_date;
    private string $profil_picture;

    public function __construct($pseudo, $name, $firstname, $email, $password, $registration_date, $profil_picture)
    {
        $this->pseudo = $pseudo;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;
        $this->registration_date = $registration_date;
        $this->profil_picture = $profil_picture;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getRegistrationDate(): \DateTime
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(\DateTime $registration_date): void
    {
        $this->registration_date = $registration_date;
    }

    public function getProfilPicture(): string
    {
        return $this->profil_picture;
    }

    public function setProfilPicture(string $profil_picture): void
    {
        $this->profil_picture = $profil_picture;
    }


}