<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Ente;
use MAT\SitioBundle\Form\EnteType;

/**
 * Ente controller.
 *
 * @Route("/ente")
 */
class EnteController extends Controller
{
    /**
     * Lists all Ente entities.
     *
     * @Route("/", name="ente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entes = $em->getRepository('SitioBundle:Ente')->findAll();

        return $this->render('ente/index.html.twig', array(
            'entes' => $entes,
        ));
    }

    /**
     * Creates a new Ente entity.
     *
     * @Route("/new", name="ente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ente = new Ente();
        $form = $this->createForm('MAT\SitioBundle\Form\EnteType', $ente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	
	
            $em = $this->getDoctrine()->getManager();
            $em->persist($ente);
            $em->flush();

            return $this->redirectToRoute('ente_index', array('id' => $ente->getId()));
        }

        return $this->render('ente/new.html.twig', array(
            'ente' => $ente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ente entity.
     *
     * @Route("/{id}", name="ente_show")
     * @Method("GET")
     */
    public function showAction(Ente $ente)
    {
        $deleteForm = $this->createDeleteForm($ente);

        return $this->render('ente/show.html.twig', array(
            'ente' => $ente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ente entity.
     *
     * @Route("/{id}/edit", name="ente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ente $ente)
    {
        $deleteForm = $this->createDeleteForm($ente);
        $editForm = $this->createForm('MAT\SitioBundle\Form\EnteType', $ente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ente);
            $em->flush();

            return $this->redirectToRoute('ente_index', array('id' => $ente->getId()));
        }

        return $this->render('ente/edit.html.twig', array(
            'ente' => $ente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ente entity.
     *
     * @Route("/{id}", name="ente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ente $ente)
    {
        $form = $this->createDeleteForm($ente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ente);
            $em->flush();
        }

        return $this->redirectToRoute('ente_index');
    }

    /**
     * Creates a form to delete a Ente entity.
     *
     * @param Ente $ente The Ente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ente $ente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ente_delete', array('id' => $ente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

   /**
     * Informaciones REST solo buscando una pagina 
     */
     public function getEnteAction($pagina)
    {
       // $response = new Response();;
        /*$response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        $response->send();*/
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:ente i'
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
     public function getCountenteAction()
    {
    $em = $this->getDoctrine()->getManager();
    
     $results = $em->getRepository('SitioBundle:Ente')->findAll();
             
               return count($results); 
    }
}
    



