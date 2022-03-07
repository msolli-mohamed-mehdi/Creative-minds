<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BlogRepository;
use App\Form\BlogType;
use App\Entity\Blog;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\VolRepository;




class BlogController extends AbstractController
{

    /**
     * @Route("/blog", name="blog")
     */
    public function index(BlogRepository $repo): Response
    {
        $blogs = $repo->findAll();


        return $this->render('blog/index.html.twig', [
            'blogs' => $blogs
        ]);
    }

    /**
     * @Route("/blog_back", name="blog_back")
     */
    public function index_back(BlogRepository $repo): Response
    {
        $blogs = $repo->findAll();

        return $this->render('blog/index_back.html.twig', [
            'blogs' => $blogs
        ]);
    }
    /**
     * @Route("/blog_back_delete/{id}", name="blog_back_delete")
     */
    public function delete_back($id,BlogRepository $repo): Response
    {
        $blog = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('blog_back');
    }


    /**
     * @Route("/blog/{id}", name="read_blog")
     */
    public function read_blog(BlogRepository $repo,Request $request, $id): Response
    {


        $blog = $repo->find($id);
        if ($request->isXmlHttpRequest()) {
            $repo->upvoteBlog($blog);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $blog = $repo->find($id);
            $blog->setBlogvotes($blog->getBlogvotes()+1);


            $jsonData = array();
            $temp = array(
                'votes' => $blog->getBlogvotes(),

            );
            $jsonData[0] = $temp;

            return new JsonResponse($jsonData);
        }

        if (is_null($id_vol = $blog->getVol())) {
            $destination="";

        } else {
            $id_vol = $blog->getVol()->getId();
            $destination=$repo->joinVol($id_vol)[0];

        }

            return $this->render('blog/one_blog.html.twig', array('blog' => $blog,'destination' => $destination));

    }

    /**
     * @Route("/delete_blog/{id}", name="delete_blog")
     */
    public function delete_Blog(BlogRepository $repo, $id): Response
    {
        $blog = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('blog');

    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/create_blog", name="create_blog")
     */
    public function create_blog(Request $request,VolRepository $repo): Response
    {
        $blog = new Blog();

        $titre = $request->get('titre');
        $contenu = $request->get('contenu');
        $vol_id = $request->get('vol_id');
        $image = $request->get('image');
        $entityManager = $this->getDoctrine()->getManager();

        $allow = array("jpg", "jpeg", "gif", "png");

        $todir = 'C:/xampp/htdocs/Journey/public/image_db/';
            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            if ($titre){


                if ( !!$_FILES['image']['tmp_name'] ) // is the file uploaded yet?
                {
                    $info = explode('.', strtolower( $_FILES['image']['name']) ); // whats the extension of the file

                    if ( in_array( end($info), $allow) ) // is this file allowed
                    {
                        if ( move_uploaded_file( $_FILES['image']['tmp_name'], $todir . basename($_FILES['image']['name'] ) ) )
                        {
                            // the file has been moved correctly
                        }
                    }
                    else
                    {
                        // error this file ext is not allowed
                    }
                }


                $blog->setImage("image_db/" . $_FILES['image']['name']);
                $blog->setVol($repo->find($vol_id));
                $blog->setTitre($titre);
                $blog->setIdClient(100);
                $blog->setContenu($contenu);
                $blog->setBlogvotes(0);
                $entityManager->persist($blog);
                $entityManager->flush();
                return $this->redirectToRoute('blog');
            }




            $vols = $repo->findAll();

            return $this->render('blog/create_blog.html.twig',['vols'=>$vols]);
        }


    /**
     * @param Request $request
     * @return Response
     * @Route("/update_blog/{id}", name="update_blog")
     */
    public function update_blog($id,Request $request,BlogRepository $repo): Response
    {
        $blog = $repo->find($id);

        $titre = $request->get('titre');
        $contenu = $request->get('contenu');
        $image = $request->get('image');
        $entityManager = $this->getDoctrine()->getManager();

        $allow = array("jpg", "jpeg", "gif", "png");

        $todir = 'C:/xampp/htdocs/Journey/public/image_db/';
        // updates the 'brochureFilename' property to store the PDF file name
        // instead of its contents



        if ($titre){


            if ( !!$_FILES['image']['tmp_name'] ) // is the file uploaded yet?
            {
                $info = explode('.', strtolower( $_FILES['image']['name']) ); // whats the extension of the file

                if ( in_array( end($info), $allow) ) // is this file allowed
                {
                    if ( move_uploaded_file( $_FILES['image']['tmp_name'], $todir . basename($_FILES['image']['name'] ) ) )
                    {
                        // the file has been moved correctly
                    }
                }
                else
                {
                    // error this file ext is not allowed
                }
            }


            $blog->setImage("image_db/" . $_FILES['image']['name']);
            $blog->setTitre($titre);
            $blog->setIdClient(100);
            $blog->setContenu($contenu);
            $entityManager->flush();
            return $this->redirectToRoute('blog');
        }





        return $this->render('blog/update_blog.html.twig',['blog'=>$blog]);
    }







}

