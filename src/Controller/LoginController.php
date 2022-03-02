<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistryType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('login/login.html.twig',[
        'name' => 'login',
        ]);
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request,UserPasswordEncoderInterface  $encoder)
    {
        $manager = $this->getDoctrine()->getManager();
        $user = new User();
      $form = $this->createform( RegistryType::class,$user);
       $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $user->setPassword($encoder->encodePassword($user,$user->getPassword()));
            $user->setRole('user');
            $manager->persist($user);
            $manager-> flush();
            return $this->redirectToRoute('login');

        }


        return $this->render('login/register.html.twig', [
            'form' => $form->createview(),'name'=>'register','button'=>'subscribe'
        ]);
    }
    /**
     * @Route("/update_password/{id}", name="update_user")
     */
    public function update_user(Request $request,$id,UserPasswordEncoderInterface  $encoder,UserRepository $userRepository)
    {
        $manager = $this->getDoctrine()->getManager();
        $user = $userRepository->find($id);
        $form = $this->createform( RegistryType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $user->setPassword($encoder->encodePassword($user,$user->getPassword()));

            $manager-> flush();
            return $this->redirectToRoute('login');

        }


        return $this->render('login/register.html.twig', [
            'form' => $form->createview(),'name'=>'register','button'=>'update'
        ]);
    }

}
