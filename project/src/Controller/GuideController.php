<?php

namespace App\Controller;
use App\Entity\Guide ; 
use App\Form\GuideType; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ;  
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class GuideController extends AbstractController
{
    /**
     * @Route("/guide", name="guide")
     */
    public function index(): Response
    {
        return $this->render('guide/index.html.twig', [
            'controller_name' => 'GuideController',
        ]);
    }

    /**
     * @Route("/admin/createguide", name="createguide")
     */
    public function create(Request $request)
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request) ; 

        if ($form->isSubmitted() && $form->isValid()  ) {

            if (strpos($guide->getEmail(), '@gmail.com') !== false && $guide->getExperience() >0 ) {
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($guide) ; 
                $em->flush() ;
                return $this->redirectToRoute('viewguide') ; 
            }
            else {
                return $this->redirectToRoute('createguide') ; 
            }
            
        }

        return $this->render('guide/create.html.twig' , ['formguide'=> $form->createView() ]) ; 
    }

    /**
     * @Route("/admin/viewguide", name="viewguide")
     */

    public function view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Guide::class)->findAll();
        //$data = $this->getDoctrine()->getRepository(Offre::class)->findBy(array(),array('name' => 'ASC'));
        if ($request->isMethod("POST") ) {
            
            $type= $request->get('sort') ;
            if ($type == "name" ) {
                $data = $this->getDoctrine()->getRepository(Guide::class)->findBy(array(),array('name' => 'ASC'));
            }
            
            elseif ($type == "nbr_exp") {
                $data = $this->getDoctrine()->getRepository(Guide::class)->findBy(array(),array('experience' => 'ASC'));
            }
            else {
                $data = $this->getDoctrine()->getRepository(Guide::class)->findAll();
            }
            
        }
        
        return $this->render('guide/view.html.twig' , [
            'list' => $data 
        ]) ; 
        
    }



    
    /**
     * @Route("/updateguide/{id}", name="updateguide")
     */

    public function update(Request $request ,$id)
    {
        $guide = $this->getDoctrine()->getRepository(Guide::class)->find($id) ; 
        $form = $this->createForm(GuideType::class, $guide) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager() ; 
            $em->persist($guide) ; 
            $em->flush() ;
            $this->addFlash('notice' , 'eyyy baba update ') ; 
            return $this->redirectToRoute('viewguide') ; 
        }

        return $this->render('guide/update.html.twig', ['formguide'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/deleteguide/{id}", name="deleteguide")
     */

    public function delete(Request $request ,$id)
    {
        $guide = $this->getDoctrine()->getRepository(Guide::class)->find($id) ; 
        $em = $this->getDoctrine()->getManager() ; 
        $em->remove($guide) ;
        $em->flush() ;
        
        return $this->redirectToRoute('viewguide') ;
    }





}
