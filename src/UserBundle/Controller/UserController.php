<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/registers")
     */
    public function registerAction()
    {
        return $this->render('UserBundle:User:register.html.twig', array(
            'joe' => 'name'
             // ...
        ));
    }

    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('UserBundle:User:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
        return $this->render('UserBundle:User:logout.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/settings")
     */
    public function settingsAction()
    {
        return $this->render('UserBundle:User:settings.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('UserBundle:User:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/profile")
     */
    public function profileAction()
    {
        return $this->render('UserBundle:User:profile.html.twig', array(
            // ...
        ));
    }

    public function dbGetUsers()
    {
        //EntityManger
        //Repository

        //will return Collection
        $products = $this->get('doctrine')
            ->getRepository(Product::class)
            ->findAll()
        ;
        // Call toArray to get as array



        //get connection
        $conn = $this->get('database_connection');
        //run a query
        $users = $conn->fetchAll('select * from users');
        return $users;
    }

}
