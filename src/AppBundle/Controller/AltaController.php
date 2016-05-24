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
    public function altaedicionAction(Request $request, \AppBundle\Entity\Actividad $idactividad)  {
    //recupero el nombre de la actividad para mostrarlo:
        $em = $this->getDoctrine()->getManager();
        $nombreActividad = $em->getRepository('AppBundle:Actividad')
        ->find($idactividad);
        $nombre = $nombreActividad->getnombreActividad();
        echo "Nombre actividad: ".$nombre; 

    $edicion = new Edicion();    
    
    $edicion->setActividadactividad($idactividad);

    //Creo el formulario para dar de alta el resto de campos de la tabla:
    $form = $this->createFormBuilder($edicion)
                    
            ->add('fechaEdicion', DateType::class, array('label' => 'Fecha de la actividad: '))
            ->add('idciclo', TextType::class, array('label' => 'Ciclo que asistirá: '))
            ->add('menoresEdad', TextType::class, array('label' => '¿Asistirán menores de edad?'))
            ->add('observaciones', TextType::class, array('label' => 'Introduce las observaciones que consideres oportunas:'))
            ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
            ->getForm();
    
    
    $form->handleRequest($request);

    return $this->render('alta/altaedicion.html.twig',array('form' => $form->createView(),));
    
    if ($form->isSubmitted() && $form->isValid()) {
       //insert
   
    } 
    else {
      return $this->render('error_formulario.html.twig');
    }
   
   }
	
	/**
     * @Route("/crear_actividades", name="crear_actividades")
     */
    public function crear_actividadesAction(Request $request)  {
	
	//inserta una actividad en la tabla actividades:
	$actividad = new Actividad();

    $form = $this->createFormBuilder($actividad)
        ->add('nombreActividad', TextType::class, array('label' => 'Nombre actividad: '))
        ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
        ->getForm();

    $form->handleRequest($request);

    return $this->render('alta/crear_actividades.html.twig',array('form' => $form->createView(), ));
    
    if ($form->isSubmitted() && $form->isValid()) {

        $actividad->setNombreActividad($form->getnombreActividad());
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($post);
        $flush = $em->flush();

    //recoger el id de la actividad creada:
    //    return $this->redirectToRoute('/altaedicion/{idactividad}');
    }else {
      return $this->render('error_formulario.html.twig');
    }

     
	}
	


  }  
?>