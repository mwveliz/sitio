<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Documento;
use MAT\SitioBundle\Form\DocumentoType;

/**
 * Documento controller.
 *
 * @Route("/documento")
 */
class DocumentoController extends Controller
{
    /**
     * Lists all Documento entities.
     *
     * @Route("/", name="documento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentos = $em->getRepository('SitioBundle:Documento')->findAll();

        return $this->render('documento/index.html.twig', array(
            'documentos' => $documentos,
        ));
    }

    /**
     * Creates a new Documento entity.
     *
     * @Route("/new", name="documento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $documento = new Documento();
        $form = $this->createForm('MAT\SitioBundle\Form\DocumentoType', $documento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	//die(var_dump($_FILES));
                        $temporal=$_FILES['documento']['tmp_name']['ruta'];
                        $nombre_odt=$_FILES['documento']['name']['ruta'];
                        move_uploaded_file($temporal, $this->get('kernel')->getRootDir().'/../web/upload/'.$nombre_odt);
                    $em = $this->getDoctrine()->getManager();
                    $documento->setRuta($nombre_odt); //nombre original
            $em->persist($documento);
            $em->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($documento);
            $em->flush();

            return $this->redirectToRoute('documento_index');
        }

        return $this->render('documento/new.html.twig', array(
            'documento' => $documento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Documento entity.
     *
     * @Route("/{id}", name="documento_show")
     * @Method("GET")
     */
    public function showAction(Documento $documento)
    {
        $deleteForm = $this->createDeleteForm($documento);

        return $this->render('documento/show.html.twig', array(
            'documento' => $documento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Documento entity.
     *
     * @Route("/{id}/edit", name="documento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Documento $documento)
    {
        $deleteForm = $this->createDeleteForm($documento);
        $editForm = $this->createForm('MAT\SitioBundle\Form\DocumentoType', $documento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($documento);
            $em->flush();

            return $this->redirectToRoute('documento_index');
        }

        return $this->render('documento/edit.html.twig', array(
            'documento' => $documento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Documento entity.
     *
     * @Route("/{id}", name="documento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Documento $documento)
    {
        $form = $this->createDeleteForm($documento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documento);
            $em->flush();
        }

        return $this->redirectToRoute('documento_index');
    }

    /**
     * Creates a form to delete a Documento entity.
     *
     * @param Documento $documento The Documento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Documento $documento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documento_delete', array('id' => $documento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

   /**
     * Informaciones REST solo buscando una pagina 
     */
     public function getDocumentoAction($pagina)
    {
        $response = new Response();
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
     $results = $em->createQuery('SELECT i FROM SitioBundle:Documento i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(20)
                    ->getResult();            
               return $results; 
    }
      /* CONTADOR DE ELEMENTOS REST   */
     public function getCountdocumentoAction()
    {
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
    $parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
     $results = $em->createQuery('SELECT i FROM SitioBundle:Documento i'
                           . ' WHERE i.visible=TRUE and i.fechaHora <= :fechadehoy'
                           . ' ORDER BY i.id DESC')
                    ->setParameters($parameters)
                    ->getResult();            
               return count($results); 
    }
}

     
 
