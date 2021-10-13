<?php

namespace App\Controller;

use App\Entity\MedP;
use App\Form\MedPType;
use App\Repository\MedPRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/med/p")
 */
class MedPController extends AbstractController
{
    /**
     * @Route("/", name="med_p_index", methods={"GET"})
     */
    public function index(MedPRepository $medPRepository): Response
    {
        return $this->render('med_p/index.html.twig', [
            'med_ps' => $medPRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="med_p_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $medP = new MedP();
        $form = $this->createForm(MedPType::class, $medP);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medP);
            $entityManager->flush();

            return $this->redirectToRoute('med_p_index');
        }

        return $this->render('med_p/new.html.twig', [
            'med_p' => $medP,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="med_p_show", methods={"GET"})
     */
    public function show(MedP $medP): Response
    {
        return $this->render('med_p/show.html.twig', [
            'med_p' => $medP,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="med_p_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MedP $medP): Response
    {
        $form = $this->createForm(MedPType::class, $medP);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('med_p_index');
        }

        return $this->render('med_p/edit.html.twig', [
            'med_p' => $medP,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="med_p_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MedP $medP): Response
    {
        if ($this->isCsrfTokenValid('delete'.$medP->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($medP);
            $entityManager->flush();
        }

        return $this->redirectToRoute('med_p_index');
    }
}
