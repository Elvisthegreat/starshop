<?php

namespace App\Repository;

use App\Model\Starship;

class StarshipRepository
{
    public function findAll(): array
    {
        return [
            new Starship(
                1,
                "Galaxy",
                1000,
                "Warp 9.6",
                "Photon Torpedoes"
            ),
            new Starship(
                2,
                "YT-1300",
                6,
                "Hyperdrive Class 0.5",
                "Laser Cannons"
            ),
            new Starship(
                3,
                "Battlestar",
                5000,
                "FTL Drive",
                "Rail Guns"
            ),
            new Starship(
                4,
                "Nebula Cruiser",
                800,
                "Warp 8.5",
                "Ion Cannons"
            )
        ];
    }
}