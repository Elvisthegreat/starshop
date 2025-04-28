<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $class,
        private int $crew,
        private string $speed,
        private string $armament
    ){

    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCrew(): int
    {
        return $this->crew;
    }

    public function getSpeed(): int
    {
        return (int) $this->speed;
    }

    public function getArmament(): string
    {
        return $this->armament;
    }
}