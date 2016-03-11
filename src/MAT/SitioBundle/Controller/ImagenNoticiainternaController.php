<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\ImagenNoticiainterna;
use MAT\SitioBundle\Form\ImagenNoticiainternaType;

/**
 * ImagenNoticiainterna controller.
 *
 * @Route("/imagennoticiainterna")
 */
class ImagenNoticiainternaController extends Controller
{
    /**
     * Lists all ImagenNoticiainterna entities.
     *
     * @Route("/", name="imagennoticiainterna_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imagenNoticiainternas = $em->getRepository('SitioBundle:ImagenNoticiainterna')->findAll();

        return $this->render('imagennoticiainterna/index.html.twig', array(
            'imagenNoticiainternas' => $imagenNoticiainternas,
        ));
    }

    /**
     * Creates a new ImagenNoticiainterna entity.
     *
     * @Route("/new", name="imagennoticiainterna_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imagenNoticiainterna = new ImagenNoticiainterna();
        $form = $this->createForm('MAT\SitioBundle\Form\ImagenNoticiainternaType', $imagenNoticiainterna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNoticiainterna);
            $em->flush();

            return $this->redirectToRoute('imagennoticiainterna_show', array('id' => $imagenNoticiainterna->getId()));
        }

        return $this->render('imagennoticiainterna/new.html.twig', array(
            'imagenNoticiainterna' => $imagenNoticiainterna,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImagenNoticiainterna entity.
     *
     * @Route("/{id}", name="imagennoticiainterna_show")
     * @Method("GET")
     */
    public function showAction(ImagenNoticiainterna $imagenNoticiainterna)
    {
        $deleteForm = $this->createDeleteForm($imagenNoticiainterna);

        return $this->render('imagennoticiainterna/show.html.twig', array(
            'imagenNoticiainterna' => $imagenNoticiainterna,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImagenNoticiainterna entity.
     *
     * @Route("/{id}/edit", name="imagennoticiainterna_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImagenNoticiainterna $imagenNoticiainterna)
    {
        $deleteForm = $this->createDeleteForm($imagenNoticiainterna);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ImagenNoticiainternaType', $imagenNoticiainterna);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNoticiainterna);
            $em->flush();

            return $this->redirectToRoute('imagennoticiainterna_edit', array('id' => $imagenNoticiainterna->getId()));
        }

        return $this->render('imagennoticiainterna/edit.html.twig', array(
            'imagenNoticiainterna' => $imagenNoticiainterna,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImagenNoticiainterna entity.
     *
     * @Route("/{id}", name="imagennoticiainterna_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImagenNoticiainterna $imagenNoticiainterna)
    {
        $form = $this->createDeleteForm($imagenNoticiainterna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagenNoticiainterna);
            $em->flush();
        }

        return $this->redirectToRoute('imagennoticiainterna_index');
    }

    /**
     * Creates a form to delete a ImagenNoticiainterna entity.
     *
     * @param ImagenNoticiainterna $imagenNoticiainterna The ImagenNoticiainterna entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImagenNoticiainterna $imagenNoticiainterna)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagennoticiainterna_delete', array('id' => $imagenNoticiainterna->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
