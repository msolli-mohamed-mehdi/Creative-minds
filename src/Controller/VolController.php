<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VolRepository;
use App\Entity\Vol;



class VolController extends AbstractController
{
    /**
 * @Route("/vol", name="vol")
 */
    public function index(VolRepository $repo,Request $request): Response
    {
        $vols = $repo->findAll();
        /*
        $destination = $request->get('destination');
        $aller = $request->get('aller');
        $retour = $request->get('retour');
        /*
        if ($destination){

        $filtered = array_filter($vols, function($vol) use ($destination) {
            return $vol->getDestination() == $destination; // Return (include) current item if expression is truthy
        });
        $filtered = array_filter($filtered, function($vol) use ($aller) {
            return $vol->getDateAller() == $aller; // Return (include) current item if expression is truthy
        });
        $filtered = array_filter($filtered, function($vol) use ($retour) {
            return $vol->getDateRetour() == $retour; // Return (include) current item if expression is truthy
        });
            return $this->redirectToRoute('vol', ['vols' => $filtered]);


        }*/






        return $this->render('vol/index.html.twig', [
            'vols' => $vols
        ]);
    }

    /**
     * @Route("/reserver/{id}", name="reserver")
     */
    public function reserver(VolRepository $repo,Request $request,$id): Response
    {
        $vol = $repo->find($id);
        $repo->reserver($vol);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        return $this->redirectToRoute('vol');

    }
    /**
     * @Route("/vol_back", name="vol_back")
     */
    public function index_back(VolRepository $repo): Response
    {
        $vols = $repo->findAll();

        return $this->render('vol/index_back.html.twig', [
            'vols' => $vols
        ]);
    }
    /**
     * @Route("/vol_back_delete/{id}", name="vol_back_delete")
     */
    public function delete_back($id,VolRepository $repo): Response
    {
        $vol = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('vol_back');
    }



    /**
     * @param Request $request
     * @return Response
     * @Route("/vol_back_create", name="vol_back_create")
     */
    public function vol_back_create(Request $request): Response
    {
        $vol = new Vol();
        $nom = $request->get('nom');
        $destination = $request->get('destination');
        $prix = $request->get('prix');
        $capacity = $request->get('capacity');
        $date_aller = $request->get('date_aller');
        $date_retour = $request->get('date_retour');

        $entityManager = $this->getDoctrine()->getManager();

        if ($nom){




            $vol->setNom($nom);
            $vol->setDestination($destination);
            $vol->setPrix($prix);
            $vol->setcapacity($capacity);
            $vol->setDateAller($date_aller);
            $vol->setDateRetour($date_retour);
            


            $entityManager->persist($vol);
            $entityManager->flush();
            return $this->redirectToRoute('vol_back');
        }





        return $this->render('vol/create_back.html.twig');
    }
    /**
     * @param Request $request
     * @return Response
     * @Route("/vol_back_update/{id}", name="vol_back_update")
     */
    public function vol_back_update(VolRepository $repository,$id, Request $request): Response
    {

        $vol=$repository->find($id);

        $nom = $request->get('nom');
        $destination = $request->get('destination');
        $prix = $request->get('prix');
        $capacity = $request->get('capacity');
        $date_aller = $request->get('date_aller');
        $date_retour = $request->get('date_retour');

        $entityManager = $this->getDoctrine()->getManager();

        if ($nom){





            $vol->setNom($nom);
            $vol->setDestination($destination);
            $vol->setCapacity($capacity);
            $vol->setDateAller($date_aller);

            $vol->setDateRetour($date_retour);

            $entityManager->flush();
            return $this->redirectToRoute('vol_back');
        }








        return $this->render('vol/update_back.html.twig',['vol'=>$vol]);


    }

}
