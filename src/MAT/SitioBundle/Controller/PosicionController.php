<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Posicion;
use MAT\SitioBundle\Form\PosicionType;

/**
 * Posicion controller.
 *
 * @Route("/posicion")
 */
class PosicionController extends Controller
{
    /**
     * Lists all Posicion entities.
     *
     * @Route("/", name="posicion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();

        $registros= $em->getRepository('SitioBundle:Noticia')->findAll();
            
        return $this->render('posicion/index.html.twig', array(
            'registros' => $registros,
        ));
    }

    /**
     * Lists all Posicion entities.
     *
     * @Route("/tabla", name="tabla_index")
     * @Method("POST")
     */
    public function tablaAction(Request $request)
    {
        
        
        $em = $this->getDoctrine()->getManager();
        $seleccion=$request->get('seleccion');
        switch ($seleccion) {
            case 'noticia':
                $registros= $em->getRepository('SitioBundle:Noticia')->findAll();
                break;
            case 'interna':
                $registros= $em->getRepository('SitioBundle:NoticiaInterna')->findAll();
                break;
            case 'destacado':
                $registros= $em->getRepository('SitioBundle:Destacado')->findAll();
                break;
            case 'enlace':
                $registros= $em->getRepository('SitioBundle:Enlace')->findAll();
                break;
            case 'estadistica':
                $registros= $em->getRepository('SitioBundle:Estadistica')->findAll();
                break;
            case 'video':
                $registros= $em->getRepository('SitioBundle:Video')->findAll();
                break;

            default:
                    $registros= $em->getRepository('SitioBundle:Noticia')->findAll();

                break;
        }
        
            
        return $this->render('posicion/tabla.html.twig', array(
            'registros' => $registros,
        ));
    }

    /**
     * Creates a new Posicion entity.
     *
     * @Route("/new", name="posicion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $posicion = new Posicion();
        $form = $this->createForm('MAT\SitioBundle\Form\PosicionType', $posicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($posicion);
            $em->flush();

            return $this->redirectToRoute('posicion_show', array('id' => $posicion->getId()));
        }

        return $this->render('posicion/new.html.twig', array(
            'posicion' => $posicion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Posicion entity.
     *
     * @Route("/{id}", name="posicion_show")
     * @Method("GET")
     */
    public function showAction(Posicion $posicion)
    {
        $deleteForm = $this->createDeleteForm($posicion);

        return $this->render('posicion/show.html.twig', array(
            'posicion' => $posicion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Posicion entity.
     *
     * @Route("/{id}/edit", name="posicion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Posicion $posicion)
    {
        $deleteForm = $this->createDeleteForm($posicion);
        $editForm = $this->createForm('MAT\SitioBundle\Form\PosicionType', $posicion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($posicion);
            $em->flush();

            return $this->redirectToRoute('posicion_edit', array('id' => $posicion->getId()));
        }

        return $this->render('posicion/edit.html.twig', array(
            'posicion' => $posicion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Posicion entity.
     *
     * @Route("/{id}", name="posicion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Posicion $posicion)
    {
        $form = $this->createDeleteForm($posicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($posicion);
            $em->flush();
        }

        return $this->redirectToRoute('posicion_index');
    }

    /**
     * Creates a form to delete a Posicion entity.
     *
     * @param Posicion $posicion The Posicion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Posicion $posicion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('posicion_delete', array('id' => $posicion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
     
   /**
     * Informaciones REST solo buscando una pagina 
     */
     public function getPosicionAction($pagina)
    {
        $response = new Response();;
        /*$response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        $response->send();*/
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:Posicion i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
}
