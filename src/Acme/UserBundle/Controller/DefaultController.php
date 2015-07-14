<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $user = $this->getUser();
        if (!is_object($user)) {
            //throw new AccessDeniedException('This user does not have access to this section.');
            //echo "cette variable n'est pas un objet \n";
            //var_dump($user);
            return $this->render('FOSUserBundle:Default:log.html.twig');
        }
        else{
        	$userManager = $this->get('fos_user.user_manager');
        	$gameUsers = $userManager->findUsers();
      
        	return $this->render('AcmeUserBundle:Default:index.html.twig', array(
            'user' => $user,
            'game_users'=> $gameUsers
        ));
        }

      
        
    }
}
