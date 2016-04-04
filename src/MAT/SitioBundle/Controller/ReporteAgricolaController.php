<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\ReporteAgricola;
use MAT\SitioBundle\Form\ReporteAgricolaType;

/**
 * ReporteAgricola controller.
 *
 * @Route("/reporteagricola")
 */
class ReporteAgricolaController extends Controller
{
    /**
     * Lists all ReporteAgricola entities.
     *
     * @Route("/", name="reporteagricola_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reporteAgricolas = $em->getRepository('SitioBundle:ReporteAgricola')->findAll();

        return $this->render('reporteagricola/index.html.twig', array(
            'reporteAgricolas' => $reporteAgricolas,
        ));
    }

    /**
     * Creates a new ReporteAgricola entity.
     *
     * @Route("/new", name="reporteagricola_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reporteAgricola = new ReporteAgricola();
        $form = $this->createForm('MAT\SitioBundle\Form\ReporteAgricolaType', $reporteAgricola);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	 $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($reporteAgricola);
            $em->flush();

            return $this->redirectToRoute('reporteagricola_show', array('id' => $reporteAgricola->getId()));
        }

        return $this->render('reporteagricola/new.html.twig', array(
            'reporteAgricola' => $reporteAgricola,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReporteAgricola entity.
     *
     * @Route("/{id}", name="reporteagricola_show")
     * @Method("GET")
     */
    public function showAction(ReporteAgricola $reporteAgricola)
    {
        $deleteForm = $this->createDeleteForm($reporteAgricola);

        return $this->render('reporteagricola/show.html.twig', array(
            'reporteAgricola' => $reporteAgricola,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReporteAgricola entity.
     *
     * @Route("/{id}/edit", name="reporteagricola_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ReporteAgricola $reporteAgricola)
    {
        $deleteForm = $this->createDeleteForm($reporteAgricola);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ReporteAgricolaType', $reporteAgricola);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reporteAgricola);
            $em->flush();

            return $this->redirectToRoute('reporteagricola_edit', array('id' => $reporteAgricola->getId()));
        }

        return $this->render('reporteagricola/edit.html.twig', array(
            'reporteAgricola' => $reporteAgricola,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ReporteAgricola entity.
     *
     * @Route("/{id}", name="reporteagricola_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ReporteAgricola $reporteAgricola)
    {
        $form = $this->createDeleteForm($reporteAgricola);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reporteAgricola);
            $em->flush();
        }

        return $this->redirectToRoute('reporteagricola_index');
    }

    /**
     * Creates a form to delete a ReporteAgricola entity.
     *
     * @param ReporteAgricola $reporteAgricola The ReporteAgricola entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReporteAgricola $reporteAgricola)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reporteagricola_delete', array('id' => $reporteAgricola->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
