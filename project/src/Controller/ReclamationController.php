<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reclamation;
use App\Entity\User;

use App\Form\ReclamationType;
use App\Form\ReclamationBackType;

use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ReclamationRepository;

use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{

    /*****************ADMIN      ******* ********** */


    /**
     * @Route("/viewreclamation", name="viewreclamation", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }



    /**
     * @Route("/viewreclamationencours", name="viewreclamationencours", methods={"GET"})
     */
    public function indexb(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findBy(['status' => 'encours']),
        ]);
    }
    /**
     * @Route("/viewreclamationaccepted", name="viewreclamationaccepted", methods={"GET"})
     */
    public function indexA(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findBy(['status' => 'réclamation accepter']),
        ]);
    }
    /**
     * @Route("/viewreclamationrefused", name="viewreclamationrefused", methods={"GET"})
     */
    public function indexr(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findBy(['status' => 'réclamation refusé']),
        ]);
    }


    
    // **********************************update status reclamation *************************
    /**
     * @Route("/admin/{id}/edit", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ReclamationBackType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('viewreclamation', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }








    /*********** userrr */









    /**
     * @Route("/frontcreatereclamation", name="frontcreatereclamation", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,UserRepository $UserReppo): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(2);
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setUser($user);
            $reclamation->setStatus("encours");
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('frontviewreclamation', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/frontviewreclamation", name="frontviewreclamation", methods={"GET"})
     */
    public function indexf(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexf.html.twig', [
            'reclamations' => $reclamationRepository->findByExampleField(2),
        ]);
    }


    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('frontviewreclamation', [], Response::HTTP_SEE_OTHER);
    }




}
