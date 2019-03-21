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
    $json = file_get_contents("../src/pokemon.json");
    return new JsonResponse($json);
  }
}
