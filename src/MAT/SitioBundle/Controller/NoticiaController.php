<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Noticia;
use MAT\SitioBundle\Form\NoticiaType;

/**
 * Noticia controller.
 *
 * @Route("/noticia")
 */
class NoticiaController extends Controller
{
    /**
     * Lists all Noticia entities.
     *
     * @Route("/", name="noticia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noticias = $em->getRepository('SitioBundle:Noticia')->findAll();

        return $this->render('noticia/index.html.twig', array(
            'noticias' => $noticias,
        ));
    }

    /**
     * Creates a new Noticia entity.
     *
     * @Route("/new", name="noticia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noticium = new Noticia();
        $form = $this->createForm('MAT\SitioBundle\Form\NoticiaType', $noticium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			 /*agregar para que el usuario logueado sea el dueño de la noticia*/
                $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
        // fin usuario logueado
          
			
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticium);
            $em->flush();

             return $this->redirectToRoute('noticia_index');
        }

        return $this->render('noticia/new.html.twig', array(
            'noticium' => $noticium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Noticia entity.
     *
     * @Route("/{id}", name="noticia_show")
     * @Method("GET")
     */
    public function showAction(Noticia $noticia)
    {
        $deleteForm = $this->createDeleteForm($noticia);

        return $this->render('noticia/show.html.twig', array(
            'noticia' => $noticia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Noticia entity.
     *
     * @Route("/{id}/edit", name="noticia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Noticia $noticium)
    {
        $deleteForm = $this->createDeleteForm($noticium);
        $editForm = $this->createForm('MAT\SitioBundle\Form\NoticiaType', $noticium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
        	 
		
        // fin usuario logueado$id_usuario
			
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticium);
            $em->flush();

            return $this->redirectToRoute('noticia_index');
        }

        return $this->render('noticia/edit.html.twig', array(
            'noticium' => $noticium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Noticia entity.
     *
     * @Route("/{id}", name="noticia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Noticia $noticium)
    {
        $form = $this->createDeleteForm($noticium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticium);
            $em->flush();
        }

        return $this->redirectToRoute('noticia_index');
    }

    /**
     * Creates a form to delete a Noticia entity.
     *
     * @param Noticia $noticium The Noticia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Noticia $noticium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticia_delete', array('id' => $noticium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
     
   /**
     * Informaciones REST solo buscando una pagina 
     */
     public function getNoticiaAction($pagina)
    {
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
    $parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
    //query para filtrar las visibles y con fecha anterior al dia de hoy (no futura)
     $results = $em->createQuery('SELECT i FROM SitioBundle:Noticia i'
                           . ' WHERE i.visible=TRUE and i.fechaHora <= :fechadehoy'
                           . ' ORDER BY i.id DESC')
                    ->setParameters($parameters)
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
    
     $results = $em->createQuery('SELECT COUNT(i) FROM SitioBundle:Noticia i'
                           . ' WHERE i.visible=TRUE and i.fechaHora <= :fechadehoy'
                           . ' ORDER BY i.id DESC')
                    ->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
             
               return count($results); 
    }
}

