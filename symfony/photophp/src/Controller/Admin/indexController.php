<?php
// src/Controller/Admin/indexController.php
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;


class indexController extends AbstractController {

    /**
     * @Route("/admin", name="admin_index")
     */
    public function index(SessionInterface $session)
    {
        if(!$session->get('session_id'))
            return new Response('<html><body>First Login!</body></html>');
        else
            return new Response('<html><body>Hello Admin!</body></html>');
    }


}