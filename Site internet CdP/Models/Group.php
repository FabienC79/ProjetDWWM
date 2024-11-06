<?php

namespace Models;

class Group
{
    private string $name;
    private string $description;
    private string $name_creator;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getNameCreator(): string
    {
        return $this->name_creator;
    }

    public function setNameCreator(string $name_creator): void
    {
        $this->name_creator = $name_creator;
    }



}