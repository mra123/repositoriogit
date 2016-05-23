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

   //Validar que el usuario está logado??
     
    return $this->render('alta/alta.html.twig');
    }


	/**
     * @Route("/consulta_actividades", name="consulta_actividades")
     */
    public function consulta_actividadesAction(Request $request)  {
	
	//select que muestra el listado de actividades que existen en la tabla actividades:
		$em = $this->getDoctrine()->getManager();
        $nombreActividad = $em->getRepository('AppBundle:Actividad')

        ->findAll();

		if($nombreActividad==null){
		   return new Response("No hay actividades");
		}else{
		   return $this->render('alta/consulta_actividades.html.twig',['nombre'=>$nombreActividad]);
		}
	}

    /**
     * @Route("/altaedicion/{idactividad}", name="altaedicion")
     */
    public function altaedicionAction($idactividad)  {

    $edicion = new Edicion();

    $form = $this->createFormBuilder($edicion)
            ->add('actividadactividad', TextType::class)
            ->add('fechaEdicion', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
            ->getForm();

    //$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
       echo "bien hecho!";

        return $this->redirectToRoute('task_success');
    }

    return $this->render('alta/altaedicion.html.twig',array('form' => $form->createView(), )
    );
    }
	
	/**
     * @Route("/crear_actividades", name="crear_actividades")
     */
    public function crear_actividadesAction(Request $request)  {
	
	//inserta una actividad en la tabla actividades:
	$actividad = new Actividades();

    $form = $this->createFormBuilder($edicion)
        ->add('nombreActividad', TextType::class)
        ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
       echo "ACTIVIDAD CREADA CORRECTAMENTE, AHORA PUEDES DAR DE ALTA LA EDICIÓN";

        return $this->redirectToRoute('task_success');
    }

    return $this->render('alta/crear_actividades.html.twig',array('form' => $form->createView(), )
    );
	

	}
	}
	
?>

    
