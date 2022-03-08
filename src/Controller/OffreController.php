<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\Vol;
use App\Entity\Guide;
use App\Entity\Hotel;
use App\Entity\Resoffre;
use App\Form\OffreType;
use App\Form\ResoffreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\OffreRepository;

use Dompdf\Dompdf;
use Dompdf\Options;
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

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($offre->getValablede() < $offre->getValablea()) {
                $image = $form->get('image')->getData();
                $file = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $file
                );
                $offre->setImage($file);

                $em = $this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirectToRoute('viewoffre');
            } else {
                $this->addFlash('notice' , 'erreur ressayer ') ; 
                return $this->redirectToRoute('createoffre');
            }
        }


        return $this->render('offre/create.html.twig', ['formoffre' => $form->createView()]);
    }


    /**
     * @Route("/viewoffre", name="viewoffre")
     */

    public function view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        //$dest = []; 
        $dest = array();

        foreach ($data as $x) {
            //$dest[] = [$x->getDestination()] ; 
            array_push($dest, $x->getDestination());
        }
        /*
        $destinations=array(); ; 
        foreach ($data as $x)
        {
            $dest = $x->getDestination() ;
            array_push($destinations,$dest) ; 
        }
        */

        if ($request->isMethod("POST")) {

            $name = $request->get('searchbar');
            if ($name != NULL) {
                $data =  $this->getDoctrine()->getRepository(Offre::class)->findBy(array('name' => $name));
                if ($data == NULL) {
                    $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
                }
            } else {
                $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
            }
        }


        $array_dest_occ = array_count_values($dest);

        //['sadasd'=>2 , 'sadsad'=>5] ; 

        /*foreach ($dest as $x)
        {
            if (array_search($x , $dest)!=-1  ) {
                $array_dest_occ[] = [$x , ] 
            }

        }*/
        $final = [
            ['country ', 'number of offres']

        ];
        //$array_dest_occ["Germany"]; 

        foreach ($array_dest_occ as $x => $x_value) {
            $final[] = [$x, (int)$x_value];
        }


        // charrtt  
        $pieChart = new PieChart();
        /*$pieChart->getData()->setArrayToDataTable(
                [   
                    ['Country', 'Number of offres'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['Commute',  2],
                    ['Watch TV', 2],
                    ['Sleep',    7]
                ]
            );*/

        $pieChart->getData()->setArrayToDataTable($final);

        $pieChart->getOptions()->setTitle('Representation des offres ');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(700);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        //
        /*
                return $this->render('offre/view.html.twig' ,  [
                    'list' => $data  
                    //'list_dest' => $dest
                    
                    //'destinationx' =>$destinations
                ]   ) ; 
            */
        return $this->render(
            'offre/view.html.twig',
            array(
                'piechart' => $pieChart,
                'list' => $data,
                'test' => $final
            )
        );
    }


    /**
     * @Route("/frontviewoffre", name="frontviewoffre")
     */

    public function front_view(Request $request)
    {
        $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        $resoffre = new Resoffre();

        $form = $this->createForm(ResoffreType::class, $resoffre);

        $form->handleRequest($request);



        return $this->render(
            'offre/frontview.html.twig',
            [
                'list' => $data
            ]
        );
    }


    /**
     * @Route("/updateoffre/{id}", name="updateoffre")
     */

    public function update(Request $request, $id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($offre->getValablede() < $offre->getValablea()) {
                $image = $form->get('image')->getData();
                $file = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $file
                );
                $offre->setImage($file);


                $em = $this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                return $this->redirectToRoute('viewoffre');
            } else {
                return $this->redirectToRoute('createoffre');
            }
        }

        return $this->render('offre/update.html.twig', ['formoffre' => $form->createView()]);
    }



    /**
     * @Route("/deleteoffre/{id}", name="deleteoffre")
     */

    public function delete(Request $request, $id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($offre);
        $em->flush();

        return $this->redirectToRoute('viewoffre');
    }


    /**
     * @Route("/downloadpdf", name="downloadpdf")
     */

    public function downloadpdf()
    {
        $data = $this->getDoctrine()->getRepository(Offre::class)->findAll();
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
        $html = $this->renderView('offre/downloadpdf.html.twig', [
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
