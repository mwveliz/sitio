<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Estadistica;
use MAT\SitioBundle\Form\EstadisticaType;

/**
 * Estadistica controller.
 *
 * @Route("/estadistica")
 */
class EstadisticaController extends Controller
{
    /**
     * Lists all Estadistica entities.
     *
     * @Route("/", name="estadistica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadisticas = $em->getRepository('SitioBundle:Estadistica')->findAll();

        return $this->render('estadistica/index.html.twig', array(
            'estadisticas' => $estadisticas,
        ));
    }

    /**
     * Creates a new Estadistica entity.
     *
     * @Route("/new", name="estadistica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadistica = new Estadistica();
        $form = $this->createForm('MAT\SitioBundle\Form\EstadisticaType', $estadistica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	      /*agregar para que el usuario l
                      * ogueado sea el dueño de la noticia*/
           
                $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
        // fin usuario logueado
           //die(var_dump($_FILES));
                        $temporal=$_FILES['estadistica']['tmp_name']['ruta'];
                        $nombre_png=$_FILES['estadistica']['name']['ruta'];
                        move_uploaded_file($temporal, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png);
                        $em = $this->getDoctrine()->getManager();
                        $estadistica->setRuta($nombre_png); //nombre original
                        $em->persist($estadistica);
                        $em->flush();

            return $this->redirectToRoute('estadistica_index', array('id' => $estadistica->getId()));
        }

        return $this->render('estadistica/new.html.twig', array(
            'estadistica' => $estadistica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estadistica entity.
     *
     * @Route("/{id}", name="estadistica_show")
     * @Method("GET")
     */
    public function showAction(Estadistica $estadistica)
    {
        $deleteForm = $this->createDeleteForm($estadistica);

        return $this->render('estadistica/show.html.twig', array(
            'estadistica' => $estadistica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Estadistica entity.
     *
     * @Route("/{id}/edit", name="estadistica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Estadistica $estadistica)
    {
        $deleteForm = $this->createDeleteForm($estadistica);
        $editForm = $this->createForm('MAT\SitioBundle\Form\EstadisticaType', $estadistica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
         
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadistica);
            $em->flush();
           

            return $this->redirectToRoute('estadistica_index', array('id' => $estadistica->getId()));
        }

        return $this->render('estadistica/edit.html.twig', array(
            'estadistica' => $estadistica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Estadistica entity.
     *
     * @Route("/{id}", name="estadistica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Estadistica $estadistica)
    {
        $form = $this->createDeleteForm($estadistica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadistica);
            $em->flush();
        }

        return $this->redirectToRoute('estadistica_index');
    }

    /**
     * Creates a form to delete a Estadistica entity.
     *
     * @param Estadistica $estadistica The Estadistica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estadistica $estadistica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadistica_delete', array('id' => $estadistica->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
     public function getEstadisticaAction($pagina)
    {
        $response = new Response();;
        
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:Estadistica i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
}
