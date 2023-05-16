<?php

namespace App\Controller;


use App\Entity\Utilisateur;
use App\Repository\DemandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class HomeController extends AbstractController
{
    public function __invoke(
        Utilisateur $utilisateur,
        DemandeRepository $demandeRepository
    ): JsonResponse
    {
        $reponseDemande = $demandeRepository->findBy(
            ['nom' => $this->getUser()]
        );

        return $this->json($reponseDemande);
    }
}
//return $this->render('main/allwhishes.html.twig',
//    [
//        'tabWish'=> $wishRepository->findby(
//            ['autor' => $this->getUser()],
//            []
//        )
//    ]);
