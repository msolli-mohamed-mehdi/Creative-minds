<?php

namespace App\Controller;
use App\Entity\Offre ; 
use App\Entity\Vol ; 
use App\Entity\Guide ; 
use App\Entity\Hotel ; 
use App\Entity\Resoffre ; 
use App\Form\OffreType; 
use App\Form\ResoffreType; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ;  

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class OffreController extends AbstractController
{
    /**
     * @Route("/offre", name="offre")
     */
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }

    /**
     * @Route("/createoffre", name="createoffre")
     */

    public function create(Request $request)
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);

        $form->handleRequest($request) ; 

        if ($form->isSubmitted() && $form->isValid()   ) {
            if ($offre->getValablede() < $offre->getValablea() ) {
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($offre) ; 
                $em->flush() ;
                return $this->redirectToRoute('viewoffre') ;
            }
            else {
                return $this->redirectToRoute('createoffre') ;
            }
            
                
        }
        

        return $this->render('offre/create.html.twig' , ['formoffre'=> $form->createView()  ]) ; 
    }


    /**
     * @Route("/viewoffre", name="viewoffre")
     */

    public function view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        if ($request->isMethod("POST") ) {
            
            $name= $request->get('searchbar') ;
            if ($name!=NULL) {
                $data =  $this->getDoctrine()->getRepository(Offre::class)->findBy(array('name'=>$name));
                if ($data == NULL) {
                    $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
                }
            }
            else {
                $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
            }
            
        }

        return $this->render('offre/view.html.twig' , [
            'list' => $data 
        ]) ; 

    }


    /**
     * @Route("/frontviewoffre", name="frontviewoffre")
     */

    public function front_view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        $resoffre = new Resoffre() ; 
        
        $form = $this->createForm(ResoffreType::class, $resoffre);

        $form->handleRequest($request) ; 



        return $this->render('offre/frontview.html.twig', 
        [
            'list' => $data
        ] ) ; 

    }




    
    
    /**
     * @Route("/updateoffre/{id}", name="updateoffre")
     */

    public function update(Request $request ,$id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id) ; 
        $form = $this->createForm(OffreType::class, $offre) ;
        $form->handleRequest($request) ;

        if ($form->isSubmitted() && $form->isValid()) {

            if ($offre->getValablede() < $offre->getValablea() ) {
                $em = $this->getDoctrine()->getManager() ; 
                $em->persist($offre) ; 
                $em->flush() ;
                return $this->redirectToRoute('backend') ;
            }
            else {
                return $this->redirectToRoute('createoffre') ;
            }
        }

        return $this->render('offre/update.html.twig', ['formoffre'=> $form->createView() ]) ; 
    }



    /**
     * @Route("/deleteoffre/{id}", name="deleteoffre")
     */

    public function delete(Request $request ,$id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id) ; 
        $em = $this->getDoctrine()->getManager() ; 
        $em->remove($offre) ;
        $em->flush() ;
        
        return $this->redirectToRoute('viewoffre') ;
    }


}
