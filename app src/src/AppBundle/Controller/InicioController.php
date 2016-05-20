<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InicioController extends Controller
{
     /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction(Request $request)
    {
        //esta función controla la web /inicio.

        return $this->render('inicio/inicio.html.twig');


    }    

   
}
?>
