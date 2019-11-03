<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use mtgsdk\Card;

use App\Entity\User;

class DashboardController extends AbstractController
{
  public function index(Environment $twig)
  {

  	/* Redirige si non Logged*/
/*   	$securityContext = $this->container->get('security.authorization_checker');
  	if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
  	    return $this->redirectToRoute('security_login');		
  	}
*/
   // $user = $this->getUser();
   
   // Récupération d'une carte 
   $cards = Card::find(386616);

   // Echo de son nom
   echo $cards->name;

	die('ok');   

    $content = $twig->render("Dashboard/dashboard.html.twig");

    return new Response($content);
  }


}