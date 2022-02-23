<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Reservationhotel ; 
use App\Entity\Client ; 
use App\Entity\Hotel ; 
use App\Form\ReshotelType;

class ReservationHotelController extends AbstractController
{
    /**
     * @Route("/reservation/hotel", name="reservation_hotel")
     */
    public function index(): Response
    {
        return $this->render('reservationhotel/index.html.twig', [
            'controller_name' => 'ReservationHotelController',
        ]);
    }

   /**
     * @Route("/createreservationhotel", name="createreservationhotel")
     */

    public function create(Request $request)
    {
        $reservationhotel = new Reservationhotel();
        $form = $this->createForm(ReshotelType::class, $reservationhotel);
        $form->handleRequest($request) ; 
        
        if ($form->isSubmitted() && $form->isValid()) {
            
           
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($reservationhotel) ; 
                $em->flush() ;
                return $this->redirectToRoute('backend') ; 
            
         

        }
        
        return $this->render('reservation_hotel/create.html.twig' , ['formreshotel'=> $form->createView() ]) ; 
    }


    /**
     * @Route("/updatereservationhotel/{id}", name="updatereservationhotel")
     */

    public function update(Request $request ,$id)
    {
        $reservationhotel = $this->getDoctrine()->getRepository(Reservationhotel::class)->find($id) ; 
        $form = $this->createForm(ReshotelType::class, $reservationhotel) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($reservationhotel) ; 
            $em->flush() ;
           
            return $this->redirectToRoute('viewreservationhotel') ; 
        }

        return $this->render('reservation_hotel/update.html.twig', ['formreshotel'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/viewreshotel", name="viewreshotel")
     */

    public function view()
    {
        $data = $this->getDoctrine()->getRepository(Reservationhotel::class)->findAll();
        return $this->render('reservation_hotel/view.html.twig' , [
            'list' => $data 
        ]) ; 

    }

    /**
     * @Route("/deletereshotel/{id}", name="deletereshotel")
     */

    public function delete(Request $request ,$id)
    {
        $reservationhotel = $this->getDoctrine()->getRepository(Reservationhotel::class)->find($id) ; 
        $em = $this->getDoctrine()->getManager() ; 
        $em->remove($reservationhotel) ;
        $em->flush() ;
        
        return $this->redirectToRoute('viewreshotel') ;
    }






}

