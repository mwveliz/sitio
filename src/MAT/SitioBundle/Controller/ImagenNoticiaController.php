<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\ImagenNoticia;
use MAT\SitioBundle\Form\ImagenNoticiaType;

/**
 * ImagenNoticia controller.
 *
 * @Route("/imagennoticia")
 */
class ImagenNoticiaController extends Controller
{
    /**
     * Lists all ImagenNoticia entities.
     *
     * @Route("/", name="imagennoticia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imagenNoticias = $em->getRepository('SitioBundle:ImagenNoticia')->findAll();

        return $this->render('imagennoticia/index.html.twig', array(
            'imagenNoticias' => $imagenNoticias,
        ));
    }

    /**
     * Creates a new ImagenNoticia entity.
     *
     * @Route("/new", name="imagennoticia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imagenNoticium = new ImagenNoticia();
        $form = $this->createForm('MAT\SitioBundle\Form\ImagenNoticiaType', $imagenNoticium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNoticium);
            $em->flush();

            return $this->redirectToRoute('imagennoticia_show', array('id' => $imagenNoticium->getId()));
        }

        return $this->render('imagennoticia/new.html.twig', array(
            'imagenNoticium' => $imagenNoticium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImagenNoticia entity.
     *
     * @Route("/{id}", name="imagennoticia_show")
     * @Method("GET")
     */
    public function showAction(ImagenNoticia $imagenNoticium)
    {
        $deleteForm = $this->createDeleteForm($imagenNoticium);

        return $this->render('imagennoticia/show.html.twig', array(
            'imagenNoticium' => $imagenNoticium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImagenNoticia entity.
     *
     * @Route("/{id}/edit", name="imagennoticia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImagenNoticia $imagenNoticium)
    {
        $deleteForm = $this->createDeleteForm($imagenNoticium);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ImagenNoticiaType', $imagenNoticium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNoticium);
            $em->flush();

            return $this->redirectToRoute('imagennoticia_edit', array('id' => $imagenNoticium->getId()));
        }

        return $this->render('imagennoticia/edit.html.twig', array(
            'imagenNoticium' => $imagenNoticium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImagenNoticia entity.
     *
     * @Route("/{id}", name="imagennoticia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImagenNoticia $imagenNoticium)
    {
        $form = $this->createDeleteForm($imagenNoticium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagenNoticium);
            $em->flush();
        }

        return $this->redirectToRoute('imagennoticia_index');
    }

    /**
     * Creates a form to delete a ImagenNoticia entity.
     *
     * @param ImagenNoticia $imagenNoticium The ImagenNoticia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImagenNoticia $imagenNoticium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagennoticia_delete', array('id' => $imagenNoticium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
