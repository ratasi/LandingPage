<?php

namespace ejerRafaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function indexAction(){
        return $this->render('ejerRafaBundle:Default:index.html.twig');
    }

    public function motoAction($num){
      
          return $this->render('ejerRafaBundle:Default:moto.html.twig', array('num'=>$num));
      }
}
?>
