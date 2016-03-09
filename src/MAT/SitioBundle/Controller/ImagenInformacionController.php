<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\ImagenInformacion;
use MAT\SitioBundle\Form\ImagenInformacionType;

/**
 * ImagenInformacion controller.
 *
 * @Route("/imageninformacion")
 */
class ImagenInformacionController extends Controller
{
    /**
     * Lists all ImagenInformacion entities.
     *
     * @Route("/", name="imageninformacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imagenInformacions = $em->getRepository('SitioBundle:ImagenInformacion')->findAll();

        return $this->render('imageninformacion/index.html.twig', array(
            'imagenInformacions' => $imagenInformacions,
        ));
    }

    /**
     * Creates a new ImagenInformacion entity.
     *
     * @Route("/new", name="imageninformacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imagenInformacion = new ImagenInformacion();
        $form = $this->createForm('MAT\SitioBundle\Form\ImagenInformacionType', $imagenInformacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenInformacion);
            $em->flush();

            return $this->redirectToRoute('imageninformacion_show', array('id' => $imagenInformacion->getId()));
        }

        return $this->render('imageninformacion/new.html.twig', array(
            'imagenInformacion' => $imagenInformacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImagenInformacion entity.
     *
     * @Route("/{id}", name="imageninformacion_show")
     * @Method("GET")
     */
    public function showAction(ImagenInformacion $imagenInformacion)
    {
        $deleteForm = $this->createDeleteForm($imagenInformacion);

        return $this->render('imageninformacion/show.html.twig', array(
            'imagenInformacion' => $imagenInformacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImagenInformacion entity.
     *
     * @Route("/{id}/edit", name="imageninformacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImagenInformacion $imagenInformacion)
    {
        $deleteForm = $this->createDeleteForm($imagenInformacion);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ImagenInformacionType', $imagenInformacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenInformacion);
            $em->flush();

            return $this->redirectToRoute('imageninformacion_edit', array('id' => $imagenInformacion->getId()));
        }

        return $this->render('imageninformacion/edit.html.twig', array(
            'imagenInformacion' => $imagenInformacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImagenInformacion entity.
     *
     * @Route("/{id}", name="imageninformacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImagenInformacion $imagenInformacion)
    {
        $form = $this->createDeleteForm($imagenInformacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagenInformacion);
            $em->flush();
        }

        return $this->redirectToRoute('imageninformacion_index');
    }

    /**
     * Creates a form to delete a ImagenInformacion entity.
     *
     * @param ImagenInformacion $imagenInformacion The ImagenInformacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImagenInformacion $imagenInformacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imageninformacion_delete', array('id' => $imagenInformacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
