<?php

namespace App\Controller;
use App\Entity\Hotel ; 
use App\Form\HotelType; 
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request ;  

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
     * @Route("/admin/ajouterhotel", name="ajouterhotel")
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
     * @Route("/admin/afficherhotel", name="afficherhotel")
     */

    public function afficher()
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();

        $hotel= [
                    ['hotel' , 'nombre de chambre']

                ]  ; 
        foreach ($data as $x) {
            $hotel[] = [$x->getName() , $x->getNbrChambre() ] ; 
            
        }
        $bar = new BarChart();
        $bar->getData()->setArrayToDataTable($hotel) ; 
        
        
        $bar->getOptions()->setTitle('Liste des chambres des hotels');
        $bar->getOptions()->getHAxis()->setTitle('nombre de chambres des hotels');
        $bar->getOptions()->getHAxis()->setMinValue(0);
        $bar->getOptions()->getVAxis()->setTitle('Hotel');
        $bar->getOptions()->setWidth(900);
        $bar->getOptions()->setHeight(500);


        return $this->render('hotel/afficher.html.twig', array('BarChart' => $bar , 'list' => $data));


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

    /**
     * @Route("/fronthotel", name="fronthotel")
     */

    public function front_view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();


        return $this->render('hotel/frontview.html.twig', 
        [
            'list' => $data
        ] ) ; 

    }









}
