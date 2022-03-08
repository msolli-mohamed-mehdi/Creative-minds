<?php

namespace App\Controller;
use App\Entity\Hotel ; 
use App\Form\HotelType; 
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Dompdf\Dompdf;
use Dompdf\Options;

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

    public function afficher(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();

        if ($request->isMethod("POST") ) {
            
            $type= $request->get('sort') ;
            if ($type == "name" ) {
                $data = $this->getDoctrine()->getRepository(Hotel::class)->findBy(array(),array('name' => 'ASC'));
            }
            
            elseif ($type == "nbr_exp") {
                $data = $this->getDoctrine()->getRepository(Hotel::class)->findBy(array(),array('nbr_chambre' => 'ASC'));
            }
            else {
                $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();
            }
            
        }

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
     * @Route("/admin/modifierhotel/{id}", name="modifierhotel")
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
     * @Route("front/hotel", name="fronthotel")
     */

    public function front_view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();


        return $this->render('hotel/frontview.html.twig', 
        [
            'list' => $data
        ] ) ; 

    }



    
    /**
     * @Route("/hoteldownloadpdf", name="hoteldownloadpdf")
     */

    public function downloadpdf()
    {
        $data = $this->getDoctrine()->getRepository(Hotel::class)->findAll();
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->setIsRemoteEnabled(true);


        $dompdf = new Dompdf($pdfoptions);
        $context =  stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);

        $dompdf->setHttpContext($context);
        $html = $this->renderView('hotel/downloadpdf.html.twig', [
            'list' => $data
        ]);

        $dompdf->loadHTML($html);
        $dompdf->setPaper('A2', 'portrait');
        $dompdf->render();
        $file = 'test.pdf';
        $dompdf->stream($file, [

            'Attachment' => false
        ]);

        return new Response();
    }









}
