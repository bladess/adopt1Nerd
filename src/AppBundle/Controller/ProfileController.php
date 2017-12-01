<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class ProfileController extends Controller
{
    /**
     * @Route("/profil", name="usr_profile")
     */
    public function consultAction(){

        $user = $this->getUser()->getId();
        $details = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($user);
        return $this->render('adopt/pages/profile.html.twig', ['usr' => $details]);
    }
}