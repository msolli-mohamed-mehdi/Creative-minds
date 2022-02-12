<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
 //done
    /**
     * @Route("/reclamation/liste", name="reclamationliste")
     */
    public function afficherAction()

    {
        $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/reclamationback.html.twig',["reclamation"=>$reclamation] );
    }
    //semi done
    /**
     * @Route("/reclamation/delete/{id}", name="reclamationsuupp")
     */
    public function DeleteAction(int $id,Request $request): Response

    {

        $entityManager = $this->getDoctrine()->getManager();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $form = $this->createForm(ReclamationFormType::class,$reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            return $this->redirectToRoute('reclamationliste');
        }
        return $this->render("reclamation/reclamationdelete.html.twig", [
            "form_title" => "delete un reclamation",
            "form_product" => $form->createView(),
        ]);


    }
    //done

    /**
     * @Route("/reclamation/update/{id}", name="reclamationuuppdate")
     */
    public function UpdateAction(int $id ,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $form = $this->createForm(ReclamationFormType::class,$reclamation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->flush();
            return $this->redirectToRoute('reclamationliste');
        }
        return $this->render("reclamation/reclamationedit.html.twig", [
            "form_title" => "edite un reclamation",
            "form_product" => $form->createView(),
        ]);
      //  return $this->render('reclamation/reclamationedit.html.twig',["reclamation"=>$reclamation] );
    }
    //done

    /**
     * @Route("/reclamation/user/{id}", name="reclamationuser")
     */
    public function ListreclamationparuserAction(int $id)

    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository(Reclamation::class)->findBy([
            "userid" => $id,

        ]);

        if (!$entities) {
            throw $this->createNotFoundException(
                'No reclamation  found for this user '.$id
            );
        }
        return $this->render('reclamation/reclamationfront.html.twig',["reclamation"=>$entities] );
    }


}
