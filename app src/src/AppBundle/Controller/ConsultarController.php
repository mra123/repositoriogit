<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConsultarController extends Controller
{
    
	/*public function consultarAction($idedicion)
    {
	  $query = $this->getDoctrine()->getManager()
	   ->createQuery('SELECT a.nombreActividad
					  FROM AppBundle:Edicion u, AppBundle:Actividad a
					  WHERE u.idActividad=
					  (select u.idActividad 
					  from AppBundle:Edicion u
					  where  u.idedicion = :$idedicion')
	   ->setParameter('idedicion',$idedicion)
	   $nombreActividad = $query->getResult();
	   if($nombreActividad==null){
		   return new Response("No hay actividades");
	   }else{
		   return $this->render('consultar/consultar.html.twig',['nombre'=>$nombreActividad]);
		}
	}*/
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
	
	}
?>


