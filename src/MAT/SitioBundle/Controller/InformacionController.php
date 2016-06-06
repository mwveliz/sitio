<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Informacion;
use MAT\SitioBundle\Form\InformacionType;
use Doctrine\ORM\Query;

/**
 * Informacion controller.
 *
 * @Route("/informacion")
 */
class InformacionController extends Controller
{
    /**
     * Lists all Informacion entities.
     *
     * @Route("/", name="informacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $informacions = $em->getRepository('SitioBundle:Informacion')->findAll();

        return $this->render('informacion/index.html.twig', array(
            'informacions' => $informacions,
        ));
    }

    /**
     * Creates a new Informacion entity.
     *
     * @Route("/new", name="informacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $informacion = new Informacion();

        $form = $this->createForm('MAT\SitioBundle\Form\InformacionType', $informacion);
        $form->handleRequest($request);

        
        
        if ($form->isSubmitted() && $form->isValid()) {
        /*agregar para que el usuario logueado sea el dueño de la noticia*/
                $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
        // fin usuario logueado
          
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($informacion);
            $em->flush();

            return $this->redirectToRoute('informacion_show', array('id' => $informacion->getId()));
        }

        return $this->render('informacion/new.html.twig', array(
            'informacion' => $informacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Informacion entity.
     *
     * @Route("/{id}", name="informacion_show")
     * @Method("GET")
     */
    public function showAction(Informacion $informacion)
    {
        
        $deleteForm = $this->createDeleteForm($informacion);

        return $this->render('informacion/show.html.twig', array(
            'informacion' => $informacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Informacion entity.
     *
     * @Route("/{id}/edit", name="informacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Informacion $informacion)
    {
        $deleteForm = $this->createDeleteForm($informacion);
        $editForm = $this->createForm('MAT\SitioBundle\Form\InformacionType', $informacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($informacion);
            $em->flush();

            return $this->redirectToRoute('informacion_index', array('id' => $informacion->getId()));
        }

        return $this->render('informacion/edit.html.twig', array(
            'informacion' => $informacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Informacion entity.
     *
     * @Route("/{id}", name="informacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Informacion $informacion)
    {
        $form = $this->createDeleteForm($informacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($informacion);
            $em->flush();
        }

        return $this->redirectToRoute('informacion_index');
    }

    /**
     * Creates a form to delete a Informacion entity.
     *
     * @param Informacion $informacion The Informacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Informacion $informacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('informacion_delete', array('id' => $informacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
   /**
     * Informaciones REST solo buscando una pagina 
     */
     public function getInformacionAction($pagina)
    {
        $response = new Response();;
        /*$response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        $response->send();*/
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
	$parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
    //query para filtrar las visibles y con fecha anterior al dia de hoy (no futura)
     $results = $em->createQuery('SELECT i FROM SitioBundle:Informacion i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
 /**  
* CONTADOR DE ELEMENTOS REST  
     */
     public function getCountnoticiaAction()
    {
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
    $parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
     $results = $em->createQuery('SELECT i FROM SitioBundle:Noticia i'
                           . ' WHERE i.visible=TRUE and i.fechaHora <= :fechadehoy'
                           . ' ORDER BY i.id DESC')
                    ->setParameters($parameters)
                    ->getResult();            
               return count($results); 
    }
}

