<?php

namespace App\Controller;

use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamationindex")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }
    /**
     * @Route("/reclamation/liste", name="reclamationliste")
     */
    public function afficherAction()

    {
        $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/reclamtion.html.twig',["reclamation"=>$reclamation] );
    }
    /**
     * @Route("/reclamation/delete/{id}", name="reclamationsuupp")
     */
    public function DeleteAction(int $id)

    {

        $entityManager = $this->getDoctrine()->getManager();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        else{
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }
        return $this->redirectToRoute('reclamationliste');
    }

    /**
     * @Route("/reclamation/update/{id}", name="reclamationuuppdate")
     */
    public function UpdateAction(int $id, Request $request)

    {

        $entityManager = $this->getDoctrine()->getManager();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }
        else{
            $reclamation->setMessage('New Message jjjjjj');
            $reclamation->setStatus('Active');
            $reclamation->setType('New type');
            //$reclamation->setDate();
            $entityManager->flush();
        }
        return $this->redirectToRoute('reclamationliste');
    }


}
