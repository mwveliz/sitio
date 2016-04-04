<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Destacado;
use MAT\SitioBundle\Form\DestacadoType;

/**
 * Destacado controller.
 *
 * @Route("/destacado")
 */
class DestacadoController extends Controller
{
    /**
     * Lists all Destacado entities.
     *
     * @Route("/", name="destacado_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $destacados = $em->getRepository('SitioBundle:Destacado')->findAll();

        return $this->render('destacado/index.html.twig', array(
            'destacados' => $destacados,
        ));
    }

    /**
     * Creates a new Destacado entity.
     *
     * @Route("/new", name="destacado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $destacado = new Destacado();
        $form = $this->createForm('MAT\SitioBundle\Form\DestacadoType', $destacado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	   /*agregar para que el usuario logueado sea el dueño de la noticia*/
                $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
        // fin usuario logueado
          
			
			
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($destacado);
            $em->flush();

            return $this->redirectToRoute('destacado_index', array('id' => $destacado->getId()));
        }

        return $this->render('destacado/new.html.twig', array(
            'destacado' => $destacado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Destacado entity.
     *
     * @Route("/{id}", name="destacado_show")
     * @Method("GET")
     */
    public function showAction(Destacado $destacado)
    {
        $deleteForm = $this->createDeleteForm($destacado);

        return $this->render('destacado/show.html.twig', array(
            'destacado' => $destacado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Destacado entity.
     *
     * @Route("/{id}/edit", name="destacado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Destacado $destacado)
    {
        $deleteForm = $this->createDeleteForm($destacado);
        $editForm = $this->createForm('MAT\SitioBundle\Form\DestacadoType', $destacado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($destacado);
            $em->flush();

            return $this->redirectToRoute('destacado_index', array('id' => $destacado->getId()));
        }

        return $this->render('destacado/edit.html.twig', array(
            'destacado' => $destacado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Destacado entity.
     *
     * @Route("/{id}", name="destacado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Destacado $destacado)
    {
        $form = $this->createDeleteForm($destacado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($destacado);
            $em->flush();
        }

        return $this->redirectToRoute('destacado_index');
    }

    /**
     * Creates a form to delete a Destacado entity.
     *
     * @param Destacado $destacado The Destacado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Destacado $destacado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('destacado_delete', array('id' => $destacado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
