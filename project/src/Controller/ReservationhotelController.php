<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request ; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Reservationhotel ; 
use App\Entity\User ; 

use App\Entity\Hotel ; 
use App\Form\ReservationhotelType;

class ReservationhotelController extends AbstractController
{
    /**
     * @Route("/reservationhotel", name="reservationhotel")
     */
    public function index(): Response
    {
        return $this->render('reservationhotel/index.html.twig', [
            'controller_name' => 'ReservationhotelController',
        ]);
    }


    /**
     * @Route("/admin/createreservationhotel", name="createreservationhotel")
     */

    public function create(Request $request)
    {
        $reservationhotel = new Reservationhotel();
        $form = $this->createForm(ReservationhotelType::class, $reservationhotel);
        $form->handleRequest($request) ; 
        
        if ($form->isSubmitted() && $form->isValid()) {
                       
            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($reservationhotel) ; 
            $em->flush() ;
            return $this->redirectToRoute('backend') ; 

        }
        
        return $this->render('reservationhotel/create.html.twig' , ['formreshotel'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/updatereservationhotel/{id}", name="updatereservationhotel")
     */

    public function update(Request $request ,$id)
    {
        $reservationhotel = $this->getDoctrine()->getRepository(Reservationhotel::class)->find($id) ; 
        $form = $this->createForm(ReservationhotelType::class, $reservationhotel) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($reservationhotel) ; 
            $em->flush() ;
           
            return $this->redirectToRoute('viewreshotel') ; 
        }

        return $this->render('reservationhotel/update.html.twig', ['formreshotel'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/admin/viewreshotel", name="viewreshotel")
     */

    public function view()
    {
        $data = $this->getDoctrine()->getRepository(Reservationhotel::class)->findAll();
        return $this->render('reservationhotel/view.html.twig' , [
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

    /**
     * @Route("/frontcreatereshotel/{id}", name="frontcreatereshotel")
     */

    public function front_create(Request $request , $id)
    {
        
        $reservationhotel = new reservationhotel();
        
        $form = $this->createForm(ReservationhotelType::class, $reservationhotel);
        $form->handleRequest($request) ; 
        
        if ($form->isSubmitted() ) {
            
            $hotel = $this->getDoctrine()->getRepository(Hotel::class)->find($id);
            $user = $this->getDoctrine()->getRepository(User::class)->find(5);
            $reservationhotel->setHotel($hotel);
            $reservationhotel->setUser($user) ; 
            
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($reservationhotel) ; 
                $em->flush() ;
                return $this->redirectToRoute('fronthotel') ; 
        }

        return $this->render('reservationhotel/frontcreate.html.twig' , ['formreshotel'=> $form->createView() ]) ; 
    }


}
