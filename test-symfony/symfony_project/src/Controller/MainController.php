<?php

namespace App\Controller;

use App\Service\DataRetriever;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param DataRetriever $dataRetriever
     * @return Response
     */
    public function index(DataRetriever $dataRetriever)
    {
        $users = $dataRetriever->getUserData();

        return $this->render('users.html.twig', [
            'users' => $users
        ]);
    }
}