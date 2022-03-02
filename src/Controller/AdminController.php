<?php

namespace App\Controller;

use App\Form\MailFormType;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="users")
     */
    public function listUsers(UserRepository $repository,Request $request)
    {
        if(isset($_GET['page'])){
            $nb = $_GET['page'];

        }
        else{
            $nb = 1;
        }


        if($request->isXmlHttpRequest()){

             $data = $repository->getusersByUsername($_GET['data'],$nb);
             return $this->json(['data'=>$this->renderView('admin/users.html.twig',['users'=>$data])]);


          //   return $this->;
         }

        return $this->render('admin/index.html.twig', [
            'users' => $repository->getusersByUsername('',$nb),
        ]);
    }
    /**
     * @Route("/admin/delete_user/{id}",name="delete_user")
     */
    public function deleteUser($id,UserRepository $userRepository){
        $user = $userRepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('users');




    }
    /**
     * @Route("/admin/send",name="mailing")
     */
    public function sendMail(\Swift_Mailer $mailer,Request $request){
        $form= $this->createForm(MailFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $result = $form->getData();
            $message = (new \Swift_Message($result['sujet']))->setFrom('ala.romdhani@esprit.tn')->setTo($result['mail_to'])->setBody($result['body']);
            $mailer->send($message);
            return $this->redirectToRoute('users');

        }
        return $this->render('admin/mail.html.twig',['form'=>$form->createView()]);




    }
    /*public function sendMail(\Swift_Mailer $mailer){

    $message = (new \Swift_Message('new Message'))->setFrom('ala.romdhani@esprit.tn')->setTo('bessem.benammar@esprit.tn')->setBody('hi!!!!');
    $mailer->send($message);
    return $this->json(['mailer'=>$mailer]);




    }*/
}
