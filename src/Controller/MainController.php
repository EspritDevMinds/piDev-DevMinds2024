<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffresRepository;
use App\Repository\PromotionRepository;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(OffresRepository $offresRepository,PromotionRepository $promotionRepository): Response
    {
        $offres = $offresRepository->findAll();
        $promotions = $promotionRepository->findAll();

        return $this->render('main/index.html.twig', [
            'offres' => $offres,
            'promotions' => $promotions
        ]);
    }
}
