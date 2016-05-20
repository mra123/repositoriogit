<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionarController extends Controller
{
    /**
     * @Route("/gestionar", name="gestionar")
     */
    public function gestionarAction(Request $request)
    {
        //esta función controla la web /gestionar.

        return $this->render('gestionar/gestionar.html.twig');

    }
}
?>

    
