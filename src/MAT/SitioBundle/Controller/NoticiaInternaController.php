<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\NoticiaInterna;
use MAT\SitioBundle\Form\NoticiaInternaType;

/**
 * NoticiaInterna controller.
 *
 * @Route("/noticiainterna")
 */
class NoticiaInternaController extends Controller
{
    /**
     * Lists all NoticiaInterna entities.
     *
     * @Route("/", name="noticiainterna_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noticiaInternas = $em->getRepository('SitioBundle:NoticiaInterna')->findAll();

        return $this->render('noticiainterna/index.html.twig', array(
            'noticiaInternas' => $noticiaInternas,
        ));
    }

    /**
     * Creates a new NoticiaInterna entity.
     *
     * @Route("/new", name="noticiainterna_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noticiaInterna = new NoticiaInterna();
        $form = $this->createForm('MAT\SitioBundle\Form\NoticiaInternaType', $noticiaInterna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticiaInterna);
            $em->flush();

            return $this->redirectToRoute('noticiainterna_show', array('id' => $noticiaInterna->getId()));
        }

        return $this->render('noticiainterna/new.html.twig', array(
            'noticiaInterna' => $noticiaInterna,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NoticiaInterna entity.
     *
     * @Route("/{id}", name="noticiainterna_show")
     * @Method("GET")
     */
    public function showAction(NoticiaInterna $noticiaInterna)
    {
        $deleteForm = $this->createDeleteForm($noticiaInterna);

        return $this->render('noticiainterna/show.html.twig', array(
            'noticiaInterna' => $noticiaInterna,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing NoticiaInterna entity.
     *
     * @Route("/{id}/edit", name="noticiainterna_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, NoticiaInterna $noticiaInterna)
    {
        $deleteForm = $this->createDeleteForm($noticiaInterna);
        $editForm = $this->createForm('MAT\SitioBundle\Form\NoticiaInternaType', $noticiaInterna);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticiaInterna);
            $em->flush();

            return $this->redirectToRoute('noticiainterna_edit', array('id' => $noticiaInterna->getId()));
        }

        return $this->render('noticiainterna/edit.html.twig', array(
            'noticiaInterna' => $noticiaInterna,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NoticiaInterna entity.
     *
     * @Route("/{id}", name="noticiainterna_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, NoticiaInterna $noticiaInterna)
    {
        $form = $this->createDeleteForm($noticiaInterna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticiaInterna);
            $em->flush();
        }

        return $this->redirectToRoute('noticiainterna_index');
    }

    /**
     * Creates a form to delete a NoticiaInterna entity.
     *
     * @param NoticiaInterna $noticiaInterna The NoticiaInterna entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NoticiaInterna $noticiaInterna)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticiainterna_delete', array('id' => $noticiaInterna->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
