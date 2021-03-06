<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use AppBundle\Entity\Edicion;
use AppBundle\Entity\Actividad;
use AppBundle\Entity\Gestion;
use AppBundle\Entity\Grupo;
use AppBundle\Entity\Ciclo;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\StringToArrayTransformer;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use	Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;


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
 
       $em = $this->getDoctrine()->getManager();
       $idestado = $em->getRepository('AppBundle:Estado')
       ->findOneBynombreEstado("PENDIENTE DE CONFIRMAR");

    
    //recupero el nombre de la actividad para mostrarlo:
        $em = $this->getDoctrine()->getManager();
        $nombreActividad = $em->getRepository('AppBundle:Actividad')
        ->find($idactividad);
        $nombre = $nombreActividad->getnombreActividad();
        echo "Nombre actividad: ".$nombre; 

           
     //recupero las ids de ciclo: 
       $query = $this->getDoctrine()->getManager()
       ->createQuery('SELECT c.idciclo
                      FROM AppBundle:Ciclo c 
                      ORDER BY c.idciclo ASC 
                     ');      
       $ciclo = $query->getResult();

	//recupero los nombres:
    $query = $this->getDoctrine()->getManager()
       ->createQuery('SELECT c.idciclo, c.nombreCiclo, g.curso, g.turno
                      FROM AppBundle:Ciclo c, AppBundle:Grupo g
                      WHERE c.grupogrupo = g.idgrupo
                      ORDER BY c.idciclo ASC  ');
       $ciclo2 = $query->getResult();

												/*foreach ($ciclo2 as $c){

												    $ciclo=$c['idciclo']." ".$c['nombreCiclo']." ".$c['curso']." ".$c['turno'];
												} */           

    //creo el formulario:    
    $edicion = new Edicion();    
    
    $edicion->setEstadoestado($idestado);
    $edicion->setActividadactividad($idactividad);    
   
 
    
    //Creo el formulario para dar de alta el resto de campos de la tabla:

    $form = $this->createFormBuilder($edicion)
    
            ->add('fechaEdicion', DateType::class, array('label' => ' '))
            ->add('menoresEdad', ChoiceType::class, array( 	'label' => ' ',
            												'choices' => array(
            													'SI' =>1,
            													'NO' =>0,
            													),

            												'expanded' =>TRUE,))

            	
            ->add('observaciones', TextAreaType::class, array('label' =>' '))
           
            ->add('idciclo', ChoiceType::class, array(
                                                
                               'choices'=> $ciclo,
                               'label'=> " ",
                  	           'choice_label' => function ($value, $key, $index) {    

                                return $value;
                                   },

                                'multiple' =>false,
                                'expanded' =>TRUE,
                                'required' =>TRUE,

                                ))
          

 			->add('save', SubmitType::class, array('label' => 'Dar de alta'))

            ->getForm();

	    $edicion->setEstadoestado($idestado);
	    $form->handleRequest($request);

		    
		    if ($form->isSubmitted() && $form->isValid()) {

		       //insert
		        $em = $this->getDoctrine()->getEntityManager();
		        $em->persist($edicion);
		        $em->flush();

		    	return $this->redirectToRoute('profesores');
		   
		    } 
		       
		 		return $this->render('alta/altaedicion.html.twig',array('form' => $form->createView()));
		   
   
  	 }

	/**
     * @Route("/grupos", name="grupos")
     */
    public function gruposAction(Request $request)  {
	
	//select que muestra el listado de grupos que existen:
		
 		$query = $this->getDoctrine()->getManager()
	   ->createQuery('SELECT c.idciclo, c.nombreCiclo, g.curso, g.turno
					  FROM AppBundle:Ciclo c, AppBundle:Grupo g
					  WHERE c.grupogrupo = g.idgrupo
					  ORDER BY c.idciclo ASC  ');
	   $ciclo = $query->getResult();


		if($ciclo==null){
		   return new Response("No hay actividades");
		}else{
		   return $this->render('alta/grupos.html.twig',['ciclos'=>$ciclo]);
		}
	}

	/**
     * @Route("/profesores", name="profesores")
     */
    public function profesoresAction(Request $request){  

	//formulario para insertar usuarios en Gestionar tras click en el submit del alta de formulario:

	//recupero el listado de profesores:  
	 $query = $this->getDoctrine()->getManager()
	 ->createQuery('SELECT c.username, c.idusuario
			  	FROM AppBundle:Usuario c
				WHERE c.tipoUsuariotipoUsuario BETWEEN 1 AND 3
				ORDER BY c.departamentodepartamento ASC  ');

	$username = $query->getResult();

	//recupero la última idedicion: 
       $query = $this->getDoctrine()->getManager()
       ->createQuery('SELECT MAX(c.idedicion)
                      FROM AppBundle:Edicion c                                         
                   ');   
        $idedicion = $query->getSingleResult();


    return $this->render('alta/profesores.html.twig',array('agregarprofesor'=>$username, 'agregarprofesor2'=>$idedicion ));
  
   }

   /**
     * @Route("/agregarprofesor/{idusuario}/{id}", name="agregarprofesor")
     */
    public function agregarprofesorAction(\AppBundle\Entity\Usuario $idusuario,\AppBundle\Entity\Edicion $id, Request $request){  

 		      
      $gestion = new Gestion();
      $gestion->setEdicionedicion($id);
      $gestion->setUsuariousuario($idusuario);

      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($gestion);
      $em->flush();
     
    return $this->render('alta/agregarprofesor.html.twig', ['idusuario'=>$idusuario, 'idedicion'=>$id]);
   
    
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
	$nombreActividad = new Actividad();

    $form = $this->createFormBuilder($nombreActividad)
        ->add('nombreActividad', TextType::class, array('label' => 'Nombre actividad: '))
        ->add('save', SubmitType::class, array('label' => 'Dar de alta'))
        ->getForm();

    $form->handleRequest($request);   
    
    if ($form->isSubmitted() && $form->isValid()) {
	
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($nombreActividad);
        $flush = $em->flush();
      
        echo "creada correctamente";
       $idactividad=$nombreActividad->getIdactividad();
       
       return $this->redirectToRoute('altaedicion', array('idactividad' => $idactividad) );
    }
     return $this->render('alta/crear_actividades.html.twig',array('form' => $form->createView(), ));
	}

    /**
     * @Route("/consultaractividad/{idedicion}", name="consultaractividad")
     */
       public function consultaractividadAction(\AppBundle\Entity\Edicion $id, Request $request){  

        $em = $this->getDoctrine()->getManager();
        $datosEdicion = $em->getRepository('AppBundle:Edicion')
        ->findBy($id);

          if($datosEdicion==null){
             return new Response("No existe esa edición");
          }else{
             return $this->render('alta/consultaractividad.html.twig',['nombre'=>$datosEdicion]);
          }
        }
           
          




  }  
?>