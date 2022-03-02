<?php

namespace App\Controller;
use App\Entity\Hotel ; 
use App\Form\HotelType; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ;  
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{
    /**
     * @Route("/hotel", name="hotel")
     */
    public function index(): Response
    {
        return $this->render('hotel/index.html.twig', [
            'controller_name' => 'HotelController',
        ]);
    }

    /**
     * @Route("/ajouterhotel", name="ajouterhotel")
     */
    public function ajouter(Request $request)
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request) ; 

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($hotel) ; 
            $em->flush() ;
            return $this->redirectToRoute('backend') ; 
        }

        return $this->render('hotel/ajouter.html.twig' , ['formhotel'=> $form->createView() ]) ; 
    }

    /**
     * @Route("/afficherhotel", name="afficherhotel")
     */

    public function afficher()
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();
        return $this->render('hotel/afficher.html.twig' , [
            'list' => $data 
        ]) ; 

    }



    
    /**
     * @Route("/modifierhotel/{id}", name="modifierhotel")
     */

    public function modifier(Request $request ,$id)
    {
        $hotel = $this->getDoctrine()->getRepository(Hotel::class)->find($id) ; 
        $form = $this->createForm(HotelType::class, $hotel) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($hotel) ; 
            $em->flush() ;
            $this->addFlash('notice' , 'modifier ') ; 
            return $this->redirectToRoute('afficherhotel') ; 
        }

        return $this->render('hotel/modifier.html.twig', ['formhotel'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/supprimerhotel/{id}", name="supprimerhotel")
     */

    public function supprimer(Request $request ,$id)
    {
        $hotel = $this->getDoctrine()->getRepository(Hotel::class)->find($id) ; 
        $em = $this->getDoctrine()->getManager() ; 
        $em->remove($hotel) ;
        $em->flush() ;
        
        return $this->redirectToRoute('afficherhotel') ;
    }





}
