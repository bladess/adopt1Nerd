

<?php// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Form\CreateAnnounceController;

use AppBundle\Entity\Announce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CreateAnnounceController extends Controller
{
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $announce = new Announce();
        
        $form = $this->createFormBuilder($announce)
            ->add('title', TextType::class)
            ->add('content', DateType::class)
            ->add('category', SubmitType::class, array('label' => 'Create Announce'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
        return new Response("Je cherche un nerf");
    }
}