<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function showAction($gameUserName)
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
            return $this->render('AcmeUserBundle:Default:log.html.twig');
        }else{


            $userManager = $this->get('fos_user.user_manager');
    
            $gameUser = $userManager->findUserByUsername($gameUserName);
            if(!is_object($gameUser)){
                echo $gameUser;
                return $this->render('AcmeUserBundle:Game:no_game_user.html.twig');
            }
            else{


               return $this->render('AcmeUserBundle:Game:show.html.twig', array(
                    'user' => $user,    
                    'game_user' => $gameUser
                )); 
            }
            
            //return $this->render('AcmeUserBundle:Game:show.html.twig');  
        }
        
        
    }

    public function playAction()
    {
        var_dump($user);
        return $this->render('AcmeUserBundle:Game:play.html.twig');
    }
}
