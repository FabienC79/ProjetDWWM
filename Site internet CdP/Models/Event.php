<?php

namespace Models;

class Event
{
    private string $title;
    private string $description;
    private \DateTime $date_debut;
    private \DateTime $date_fin;
    private string $lieu;
    private string $categorie;
    private bool $private = true;

    public function __construct(string $title, string $description, \DateTime $date_debut, \DateTime $date_fin, string $lieu, string $categorie, bool $private)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->lieu = $lieu;
        $this->categorie = $categorie;
        $this->private = $private;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDateDebut(): \DateTime
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTime $date_debut): void
    {
        $this->date_debut = $date_debut;
    }

    public function getDateFin(): \DateTime
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTime $date_fin): void
    {
        $this->date_fin = $date_fin;
    }

    public function getLieu(): string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): void
    {
        $this->lieu = $lieu;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function isPrivate(): bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }


}