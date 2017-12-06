<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('adopt/pages/index.html.twig', []);
    }
    /**
     * @Route("/list", name="usr_list")
     */
    public function listAction(){
        $repository = $this->getDoctrine()
        ->getRepository(User::class);

        $users = $repository->findAll();
        return $this->render('adopt/pages/users.html.twig', ["uti" => $users]);
    }
   
}
