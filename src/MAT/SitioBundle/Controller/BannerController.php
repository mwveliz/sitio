<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Banner;
use MAT\SitioBundle\Form\BannerType;

/**
 * Banner controller.
 *
 * @Route("/banner")
 */
class BannerController extends Controller
{
    /**
     * Lists all Banner entities.
     *
     * @Route("/", name="banner_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $banners = $em->getRepository('SitioBundle:Banner')->findAll();

        return $this->render('banner/index.html.twig', array(
            'banners' => $banners,
        ));
    }

    /**
     * Creates a new Banner entity.
     *
     * @Route("/new", name="banner_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $banner = new Banner();
        $form = $this->createForm('MAT\SitioBundle\Form\BannerType', $banner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
                $userId= $this->getUser()->getId();
                $em = $this->getDoctrine()->getManager();
                $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
                $temporal=$_FILES['banner']['tmp_name']['rutaBanner'];
                $nombre_png=$_FILES['banner']['name']['rutaBanner'];
                move_uploaded_file($temporal, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png);
                $temporal2=$_FILES['banner']['tmp_name']['rutaFooter'];
                $nombre_png2=$_FILES['banner']['name']['rutaFooter'];
                move_uploaded_file($temporal2, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png2);
                $temporal3=$_FILES['banner']['tmp_name']['rutaSplash'];
                $nombre_png3=$_FILES['banner']['name']['rutaSplash'];
                move_uploaded_file($temporal3, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png3);
                $temporal4=$_FILES['banner']['tmp_name']['rutaLogo'];
                $nombre_png4=$_FILES['banner']['name']['rutaLogo'];
                move_uploaded_file($temporal4, $this->get('kernel')->getRootDir().'/../web/imagenes/'.$nombre_png4);
                 
            $em = $this->getDoctrine()->getManager();
            $banner->setRutaBanner($nombre_png);  //nombre original
            $banner->setRutaFooter($nombre_png2);
            $banner->setRutaSplash($nombre_png3);
            $banner->setRutaLogo($nombre_png4);
            $em->persist($banner);
    
            $em->flush();

            return $this->redirectToRoute('banner_index', array('id' => $banner->getId()));
        }

        return $this->render('banner/new.html.twig', array(
            'banner' => $banner,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Banner entity.
     *
     * @Route("/{id}", name="banner_show")
     * @Method("GET")
     */
    public function showAction(Banner $banner)
    {
        $deleteForm = $this->createDeleteForm($banner);

        return $this->render('banner/show.html.twig', array(
            'banner' => $banner,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Banner entity.
     *
     * @Route("/{id}/edit", name="banner_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Banner $banner)
    {
        $deleteForm = $this->createDeleteForm($banner);
        $editForm = $this->createForm('MAT\SitioBundle\Form\BannerType', $banner);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banner);
            $em->flush();

            return $this->redirectToRoute('banner_index', array('id' => $banner->getId()));
        }

        return $this->render('banner/edit.html.twig', array(
            'banner' => $banner,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Banner entity.
     *
     * @Route("/{id}", name="banner_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Banner $banner)
    {
        $form = $this->createDeleteForm($banner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($banner);
            $em->flush();
        }

        return $this->redirectToRoute('banner_index');
    }

    /**
     * Creates a form to delete a Banner entity.
     *
     * @param Banner $banner The Banner entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Banner $banner)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('banner_delete', array('id' => $banner->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function getBannerAction($pagina)
    {
        $response = new Response();;
       
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:Banner i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
}
