<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ConsultarController extends Controller
{
    
	
	/**
     * @Route("/consultar/{idactividad}", name="consultar")
     */
	public function consultarAction()
    {
	return $this->render('consultar/consultardepartamento.html.twig');

	}

	/**
     * @Route("/consultardept/{iddept}", name="consultardepartamento")
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


	   ->createQuery('SELECT a.idactividad
					  FROM AppBundle:Actividad a
					  WHERE a.nombreActividad = : $nombreActividad')
	  
	   $idActividad = $query->getResult();

	   if($nombreActividad==null){
		   return new Response("No hay actividades");
	   }else{
		   return $this->render('consultar/consultaractividadesdepartamento.html.twig',['nombre'=>$nombreActividad], ['id'=>$idActividad]);
		}
	}	
	
	}
?>


