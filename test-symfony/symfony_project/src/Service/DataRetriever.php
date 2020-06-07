<?php

namespace App\Service;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DataRetriever extends AbstractController
{
    public function getUserData()
    {
        return $this->getDoctrine()->getRepository(Usuario::class)->findAll();
    }
}