<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array('lucky_number' => mt_rand(0, 100));
        $users = NULL;
//        $users = $this->dbGetUsers();


        $array = array('lucky_number'=>$data, 'users'=>$users);

        return new Response(
            json_encode($array),
            200,
            array('Content-Type' => 'application/json')
        );
    }

}
