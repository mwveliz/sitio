<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Video;
use MAT\SitioBundle\Form\VideoType;


/**
 * Video controller.
 *
 * @Route("/video")
 */
class VideoController extends Controller
{
    /**
     * Lists all Video entities.
     *
     * @Route("/", name="video_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('SitioBundle:Video')->findAll();

        return $this->render('video/index.html.twig', array(
            'videos' => $videos,
        ));
    }

    /**
     * Creates a new Video entity.
     *
     * @Route("/new", name="video_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $video = new Video();
        $form = $this->createForm('MAT\SitioBundle\Form\VideoType', $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $userId= $this->getUser()->getId();
             $em = $this->getDoctrine()->getManager();
             $form->getdata()->setIdUsuario( $id_usuario = $em->getReference('MAT\SitioBundle\Entity\Usuario', $userId));
                        $temporal=$_FILES['video']['tmp_name']['ruta'];
                        $nombre_png=$_FILES['video']['name']['ruta'];
                        move_uploaded_file($temporal, $this->get('kernel')->getRootDir().'/../web/upload/'.$nombre_png);
                        $em = $this->getDoctrine()->getManager();
                        $video->setRuta($nombre_png); //nombre original
                        $em->persist($video);
                        $em->flush();

            return $this->redirectToRoute('video_index', array('id' => $video->getId()));
        }

        return $this->render('video/new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Video entity.
     *
     * @Route("/{id}", name="video_show")
     * @Method("GET")
     */
    public function showAction(Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);

        return $this->render('video/show.html.twig', array(
            'video' => $video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Video entity.
     *
     * @Route("/{id}/edit", name="video_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);
        $editForm = $this->createForm('MAT\SitioBundle\Form\VideoType', $video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('video_index', array('id' => $video->getId()));
        }

        return $this->render('video/edit.html.twig', array(
            'video' => $video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Video entity.
     *
     * @Route("/{id}", name="video_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Video $video)
    {
        $form = $this->createDeleteForm($video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($video);
            $em->flush();
        }

        return $this->redirectToRoute('video_index');
    }

    /**
     * Creates a form to delete a Video entity.
     *
     * @param Video $video The Video entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Video $video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('video_delete', array('id' => $video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
       public function getVideoAction($pagina)
    {
        //$response = new Response();;
        
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
	$parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
    //query para filtrar las visibles y con fecha anterior al dia de hoy (no futura)
     $results = $em->createQuery('SELECT i FROM SitioBundle:Video i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
    /**
     * CONTADOR DE ELEMENTOS REST  
     */
     public function getCountvideoAction()
    {
    $em = $this->getDoctrine()->getManager();
     $qb = $em->createQueryBuilder('i');
    $parameters = array( //parametros para el query
        'fechadehoy' => new \DateTime(),
        
    );
    
     $results = $em->createQuery('SELECT i FROM SitioBundle:Video i'
                           . ' WHERE i.visible=TRUE and i.fechaHora <= :fechadehoy'
                           . ' ORDER BY i.id DESC')
                    ->setParameters($parameters)
                    ->getResult();            
               return count($results); 
    }
}

