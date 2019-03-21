<?php
// src/Controller/PokemonController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PokemonController
{
  /**
   * @Route("/pokemon", name="pokemons_list")
   */
  public function get_list()
  {
    return new JsonResponse([
        '1' => [
            'name' => 'bulbasaur',
            'url' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png'
        ],
        '2' => [
                'name' => 'ivysaur',
                'url' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/2.png'
            ],
        '3' => [
                'name' => 'venusaur',
                'url' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/3.png'
        ]
    ]);
  }
}
