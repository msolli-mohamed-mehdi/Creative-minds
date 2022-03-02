<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'name' => 'home',
        ]);
    }
    /**
     * @Route("/", name="index")
     */
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'name' => 'home',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'name' => 'contact',
        ]);
    }
    /**
     * @Route("/blog", name="blog")
     */

    public function blog(): Response
    {
        return $this->render('home/blog.html.twig', [
            'name' => 'blog',
        ]);
    }
    /**
     * @Route("/service", name="service")
     */

    public function service(): Response
    {
        return $this->render('home/services.html.twig', [
            'name' => 'service',
        ]);
    }
    /**
     * @Route("/hotel", name="hotel")
     */

    public function hotel(): Response
    {
        return $this->render('home/hot.html.twig', [
            'name' => 'hotel',
        ]);
    }
}
