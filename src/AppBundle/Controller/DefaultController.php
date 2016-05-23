<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Actividad;
use AppBundle\Entity\Departamento;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function loginAction(Request $request)
    {

         $authenticationUtils = $this->get('security.authentication_utils');

         // get the login error if there is one
         $error = $authenticationUtils->getLastAuthenticationError();

         // last username entered by the user
         $lastUsername = $authenticationUtils->getLastUsername();

         return $this->render('security/login.html.twig', array( // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        )   
		);
    }

	/**
     * @Route("/consultar/{idactividad}", name="consultar")
     */
	public function consultarAction($idactividad)
    {
	  $query = $this->getDoctrine()->getManager()
	   ->createQuery('SELECT u.nombreActividad
					  FROM AppBundle:Actividad u 
					  WHERE u.idactividad = :idactividad')
	   ->setParameter('idactividad',$idactividad);
	   $nombreActividad = $query->getResult();
	   if($nombreActividad==null){
		   return new Response("No hay actividades");
	   }else{
		   return $this->render('consultar/consultar.html.twig',['nombre'=>$nombreActividad]);
		}
	}
	
	  /**
     * @Route("/consultardept/{iddept}", name="consultar")
     */
	public function consultarDept($iddept)
    {
	  $query = $this->getDoctrine()->getManager()
	   ->createQuery('SELECT a.nombreActividad
					  FROM AppBundle:Actividad a, AppBundle:Gestion g, AppBundle:Usuario u, AppBundle:Edicion e
					  WHERE g.usuariousuario = u.idusuario and g.edicionedicion = e.idedicion and e.actividadactividad =a.idactividad
					  and u.departamentodepartamento = :iddept')
	   ->setParameter('iddept',$iddept);
	   $nombreActividad = $query->getResult();
	   if($nombreActividad==null){
		   return new Response("No hay actividades");
	   }else{
		   return $this->render('consultar/consultar.html.twig',['nombre'=>$nombreActividad]);
		}
	}	
	
	 /**
     * @Route("/gestionar", name="gestionar")
     */
	 public function gestionarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('gestionar/gestionar.html.twig');
    }
	/**
     * @Route("/noauto", name="noauto")
     */
	 public function noautoAction(Request $request)
    {
        return new Response("Actividad No autorizada");
    }
	
	/**
     * @Route("/baja/{idactividad}", name="baja")
     */
	public function bajaAction($idactividad)
    {
       $borrar = $this->getDoctrine()->getRepository("AppBundle:Actividad");
	   $a = $borrar->findOneByidactividad($idactividad);
	   $borrar2 = $this->getDoctrine()->getManager();
	   $borrar2->remove($a);
	   $borrar2->flush();
	   return new Response("Actividad dada de baja correctamente");
	}
}
