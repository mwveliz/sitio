<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\ImagenDestacado;
use MAT\SitioBundle\Form\ImagenDestacadoType;

/**
 * ImagenDestacado controller.
 *
 * @Route("/imagendestacado")
 */
class ImagenDestacadoController extends Controller
{
    /**
     * Lists all ImagenDestacado entities.
     *
     * @Route("/", name="imagendestacado_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imagenDestacados = $em->getRepository('SitioBundle:ImagenDestacado')->findAll();

        return $this->render('imagendestacado/index.html.twig', array(
            'imagenDestacados' => $imagenDestacados,
        ));
    }

    /**
     * Creates a new ImagenDestacado entity.
     *
     * @Route("/new", name="imagendestacado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $imagenDestacado = new ImagenDestacado();
        $form = $this->createForm('MAT\SitioBundle\Form\ImagenDestacadoType', $imagenDestacado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenDestacado);
            $em->flush();

            return $this->redirectToRoute('imagendestacado_show', array('id' => $imagenDestacado->getId()));
        }

        return $this->render('imagendestacado/new.html.twig', array(
            'imagenDestacado' => $imagenDestacado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ImagenDestacado entity.
     *
     * @Route("/{id}", name="imagendestacado_show")
     * @Method("GET")
     */
    public function showAction(ImagenDestacado $imagenDestacado)
    {
        $deleteForm = $this->createDeleteForm($imagenDestacado);

        return $this->render('imagendestacado/show.html.twig', array(
            'imagenDestacado' => $imagenDestacado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ImagenDestacado entity.
     *
     * @Route("/{id}/edit", name="imagendestacado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ImagenDestacado $imagenDestacado)
    {
        $deleteForm = $this->createDeleteForm($imagenDestacado);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ImagenDestacadoType', $imagenDestacado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenDestacado);
            $em->flush();

            return $this->redirectToRoute('imagendestacado_edit', array('id' => $imagenDestacado->getId()));
        }

        return $this->render('imagendestacado/edit.html.twig', array(
            'imagenDestacado' => $imagenDestacado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ImagenDestacado entity.
     *
     * @Route("/{id}", name="imagendestacado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ImagenDestacado $imagenDestacado)
    {
        $form = $this->createDeleteForm($imagenDestacado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagenDestacado);
            $em->flush();
        }

        return $this->redirectToRoute('imagendestacado_index');
    }

    /**
     * Creates a form to delete a ImagenDestacado entity.
     *
     * @param ImagenDestacado $imagenDestacado The ImagenDestacado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ImagenDestacado $imagenDestacado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagendestacado_delete', array('id' => $imagenDestacado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
