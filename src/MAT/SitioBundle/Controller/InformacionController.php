<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Informacion;
use MAT\SitioBundle\Form\InformacionType;

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
            //chequeadno las fotos enviadas
            
            
            //var_dump($_POST['informacion']);
            //die();
            
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

            return $this->redirectToRoute('informacion_edit', array('id' => $informacion->getId()));
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
}
