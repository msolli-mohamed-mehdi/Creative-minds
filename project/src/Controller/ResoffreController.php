<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ;  
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Resoffre ; 
use App\Entity\Client ; 
use App\Entity\Offre ; 
use App\Form\ResoffreType; 

class ResoffreController extends AbstractController
{
    /**
     * @Route("/resoffre", name="resoffre")
     */
    public function index(): Response
    {
        return $this->render('resoffre/index.html.twig', [
            'controller_name' => 'ResoffreController',
        ]);
    }


    /**
     * @Route("/createresoffre", name="createresoffre")
     */

    public function create(Request $request)
    {
        $resoffre = new Resoffre();
        $form = $this->createForm(ResoffreType::class, $resoffre);
        $form->handleRequest($request) ; 
        
        if ($form->isSubmitted() && $form->isValid()) {

            if ($resoffre->getOffre()->getValablede() < $resoffre->getDateRes() 
            && $resoffre->getOffre()->getValablea() > $resoffre->getDateRes() 
            && $resoffre->getNbrDePlace() < $resoffre->getOffre()->getPlaceDispo() ) {
                $resoffre->getOffre()->setPlaceDispo($resoffre->getOffre()->getPlaceDispo() - $resoffre->getNbrDePlace() ) ; 
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($resoffre) ; 
                $em->flush() ;
                return $this->redirectToRoute('backend') ; 
            }
            else {
                return $this->redirectToRoute('createresoffre') ;
            }

        }
        /*
        if ($form->isSubmitted() && $form->isValid()) {
            $client = $this->getDoctrine()->getRepository(Client::class)->find($resoffre->getIdClient());
            $offre = $this->getDoctrine()->getRepository(Offre::class)->find($resoffre->getIdOffre());
            if ($offre == NULL && $client == NULL ) {
                return $this->redirectToRoute('createresoffre') ; 
                
            }
            else {
                if ($offre->getPlaceDispo() > $resoffre->getNbrDePlace() && $offre->getValablede() < $resoffre->getDateRes() && $offre->getValablea() > $resoffre->getDateRes() ) {
                    $offre->setPlaceDispo( $offre->getPlaceDispo() -$resoffre->getNbrDePlace() );
                    $em = $this->getDoctrine()->getManager() ; 
                    $em->persist($offre) ; 
                    $em->persist($resoffre) ; 
                    $em->flush() ;
                    return $this->redirectToRoute('backend') ;
                    
                }
                else {
                    return $this->redirectToRoute('createresoffre') ;
                }
            }
            
            
        }
        */

        return $this->render('resoffre/create.html.twig' , ['formresoffre'=> $form->createView() ]) ; 
    }


    
    /**
     * @Route("/frontcreateresoffre/{id}", name="frontcreateresoffre")
     */

    public function front_create(Request $request , $id)
    {
        
        $resoffre = new Resoffre();
        
        $form = $this->createForm(ResoffreType::class, $resoffre);
        $form->handleRequest($request) ; 
        
        if ($form->isSubmitted() ) {

            $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
            $client = $this->getDoctrine()->getRepository(Client::class)->find(5);
            $resoffre->setOffre($offre);
            $resoffre->setClient($client) ; 
            if ($resoffre->getOffre()->getValablede() < $resoffre->getDateRes() 
            && $resoffre->getOffre()->getValablea() > $resoffre->getDateRes() 
            && $resoffre->getNbrDePlace() < $resoffre->getOffre()->getPlaceDispo() ) 
            {
                $resoffre->getOffre()->setPlaceDispo($resoffre->getOffre()->getPlaceDispo() - $resoffre->getNbrDePlace() ) ; 
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($resoffre) ; 
                $em->flush() ;
                return $this->redirectToRoute('frontviewoffre') ; 
            }
            else {
                return $this->redirectToRoute('frontviewoffre') ;
            }
            
           
        }



        return $this->render('resoffre/frontcreate.html.twig' , ['formresoffre'=> $form->createView() ]) ; 
    }



    
    /**
     * @Route("/viewresoffre", name="viewresoffre")
     */

    public function view()
    {
        $data = $this->getDoctrine()->getRepository(Resoffre::class)->findAll();
        return $this->render('resoffre/view.html.twig' , [
            'list' => $data 
        ]) ; 

    }

   
    /**
     * @Route("/updateresoffre/{id}", name="updateresoffre")
     */

    public function update(Request $request ,$id)
    {
        $resoffre = $this->getDoctrine()->getRepository(Resoffre::class)->find($id) ; 
        $form = $this->createForm(ResoffreType::class, $resoffre) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($resoffre) ; 
            $em->flush() ;
            $this->addFlash('notice' , 'eyyy baba update ') ; 
            return $this->redirectToRoute('viewresoffre') ; 
        }

        return $this->render('resoffre/update.html.twig', ['formresoffre'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/deleteresoffre/{id}", name="deleteresoffre")
     */

    public function delete(Request $request ,$id)
    {
        $resoffre = $this->getDoctrine()->getRepository(Resoffre::class)->find($id) ; 
        $em = $this->getDoctrine()->getManager() ; 
        $em->remove($resoffre) ;
        $em->flush() ;
        
        return $this->redirectToRoute('viewresoffre') ;
    }





    // trie / recherche / impression pdf,csv / statistique / 


}
