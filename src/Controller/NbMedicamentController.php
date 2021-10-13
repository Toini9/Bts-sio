<?php

namespace App\Controller;

use App\Repository\FamilleRepository;
use App\Repository\MedicamentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NbMedicamentController extends AbstractController
{
    /**
     * @Route("/nb/medicament", name="nb_medicament")
     */
    public function liste(MedicamentRepository $repoMed, FamilleRepository $repoFam): Response
    {
        $med = $repoMed->findAll();
        $famille = $repoFam->findAll();

        return $this->render('nb_medicament/index.html.twig', [
            'controller_name' => 'NbMedicamentController',
            'med' => $med,
            'famille' => $famille,
        ]);
    }
}
