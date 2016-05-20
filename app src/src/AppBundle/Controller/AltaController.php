<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use AppBundle\Entity\Edicion;
use AppBundle\Entity\Actividad;
use AppBundle\Entity\Gestion;

class AltaController extends Controller
{
    /**
     * @Route("/alta", name="alta")
     */
    public function altaAction(Request $request)  {

    $edicion = new Edicion();

    //$edicion->setActividadactividad(this->getIdactividad());
    //$edicion->setFechaEdicion('2016-01-01');

     //insertar la actividad en la tabla actividad:

     $form = $this->createFormBuilder($edicion)
           // ->add('actividadactividad', TextType::class)
            ->add('actividadactividad', TextType::class)
            ->add('fechaEdicion', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
            ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
       echo "bien hecho!";

        return $this->redirectToRoute('task_success');
    }

    return $this->render('alta/alta.html.twig',array('form' => $form->createView(), )
    );
    }


}
?>

    
