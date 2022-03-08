<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request ;  
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Resoffre ; 
use App\Entity\User ; 
use App\Entity\Reclamation ; 

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
     * @Route("/admin/createresoffre", name="createresoffre")
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
                return $this->redirectToRoute('viewresoffre') ; 
            }
            else {
                return $this->redirectToRoute('createresoffre') ;
            }

        }
        
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
            $user = $this->getDoctrine()->getRepository(User::class)->find(5);
            $resoffre->setOffre($offre);
            $resoffre->setUser($user) ; 
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
                $strid = (string) $id ; 
                $this->addFlash('notice' , 'erreur ressayer ') ; 
                return $this->redirectToRoute('frontcreateresoffre') ;
            }
            
           
        }



        return $this->render('resoffre/frontcreate.html.twig' , ['formresoffre'=> $form->createView() ]) ; 
    }



    
    /**
     * @Route("/admin/viewresoffre", name="viewresoffre")
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


    /**
     * @Route("/front/calender", name="calender")
     */

    public function viewcal()
    {
        $list = $this->getDoctrine()->getRepository(Resoffre::class)->findAll();

        $res = [] ; 

        foreach ($list as $x)
        {
            $res[] = [
                //'id'=> $x->getId(),
                'title'=>$x->getOffre()->getName(),
                //'Client'=>$x->getClient()->getName() , 
                'start'=>$x->getDateRes()->format('Y-m-d'),
                'end'=>$x->getDateRes()->format('Y-m-d'),
            ] ; 

        }

        $data = json_encode($res);

        return $this->render('resoffre/calendar.html.twig', compact('data'));

    }


    // trie / recherche / impression pdf,csv / statistique / 


}
