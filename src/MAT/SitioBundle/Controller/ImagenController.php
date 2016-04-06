<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Imagen;
use MAT\SitioBundle\Form\ImagenType;

/**
 * Imagen controller.
 *
 * @Route("/imagen")
 */
class ImagenController extends Controller
{
    /**
     * Lists all Imagen entities.
     *
     * @Route("/", name="imagen_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $imagens = $em->getRepository('SitioBundle:Imagen')->findAll();

        return $this->render('imagen/index.html.twig', array(
            'imagens' => $imagens,
        ));
    }

    /**
     * Creates a new Imagen entity.
     *
     * @Route("/new", name="imagen_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        
	   $imagen = new Imagen();
	

     	
       $form = $this->createForm('MAT\SitioBundle\Form\ImagenType', $imagen);
		
		
		$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	
			//die(var_dump($_FILES));
			$temporal=$_FILES['imagen']['tmp_name']['ruta'];
			$nombre_png=$_FILES['imagen']['name']['ruta'];
			move_uploaded_file($temporal, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png);
		    $em = $this->getDoctrine()->getManager();
		    $imagen->setRuta($nombre_png); //nombre original
            $em->persist($imagen);
            $em->flush();

            return $this->redirectToRoute('imagen_index');
        }

        return $this->render('imagen/new.html.twig', array(
            'imagen' => $imagen,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Imagen entity.
     *
     * @Route("/{id}", name="imagen_show")
     * @Method("GET")
     */
    public function showAction(Imagen $imagen)
    {
        $deleteForm = $this->createDeleteForm($imagen);

        return $this->render('imagen/show.html.twig', array(
            'imagen' => $imagen,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Imagen entity.
     *
     * @Route("/{id}/edit", name="imagen_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Imagen $imagen)
    {
        $deleteForm = $this->createDeleteForm($imagen);
        $editForm = $this->createForm('MAT\SitioBundle\Form\ImagenType', $imagen);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagen);
            $em->flush();

             return $this->redirectToRoute('imagen_index');
        }

        return $this->render('imagen/edit.html.twig', array(
            'imagen' => $imagen,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Imagen entity.
     *
     * @Route("/{id}", name="imagen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Imagen $imagen)
    {
        $form = $this->createDeleteForm($imagen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagen);
            $em->flush();
        }

        return $this->redirectToRoute('imagen_index');
    }

    /**
     * Creates a form to delete a Imagen entity.
     *
     * @param Imagen $imagen The Imagen entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Imagen $imagen)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imagen_delete', array('id' => $imagen->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
      public function getImagenAction($pagina)
    {
        $response = new Response();;
       
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:Imagen i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
}
