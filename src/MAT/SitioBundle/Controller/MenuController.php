<?php

namespace MAT\SitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MAT\SitioBundle\Entity\Menu;
use MAT\SitioBundle\Form\MenuType;

/**
 * Menu controller.
 *
 * @Route("/menu")
 */
class MenuController extends Controller
{
    /**
     * Lists all Menu entities.
     *
     * @Route("/", name="menu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('SitioBundle:Menu')->findAll();

        return $this->render('menu/index.html.twig', array(
            'menus' => $menus,
        ));
    }

    /**
     * Creates a new Menu entity.
     *
     * @Route("/new", name="menu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $menu = new Menu();
        $form = $this->createForm('MAT\SitioBundle\Form\MenuType', $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($menu);
            $em->flush();

            return $this->redirectToRoute('menu_index', array('id' => $menu->getId()));
        }

        return $this->render('menu/new.html.twig', array(
            'menu' => $menu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Menu entity.
     *
     * @Route("/{id}", name="menu_show")
     * @Method("GET")
     */
    public function showAction(Menu $menu)
    {
        $deleteForm = $this->createDeleteForm($menu);

        return $this->render('menu/show.html.twig', array(
            'menu' => $menu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Menu entity.
     *
     * @Route("/{id}/edit", name="menu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Menu $menu)
    {
        $deleteForm = $this->createDeleteForm($menu);
        $editForm = $this->createForm('MAT\SitioBundle\Form\MenuType', $menu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($menu);
            $em->flush();

            return $this->redirectToRoute('menu_index', array('id' => $menu->getId()));
        }

        return $this->render('menu/edit.html.twig', array(
            'menu' => $menu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Menu entity.
     *
     * @Route("/{id}", name="menu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Menu $menu)
    {
        $form = $this->createDeleteForm($menu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($menu);
            $em->flush();
        }

        return $this->redirectToRoute('menu_index');
    }

    /**
     * Creates a form to delete a Menu entity.
     *
     * @param Menu $menu The Menu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Menu $menu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('menu_delete', array('id' => $menu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
public function getMenuAction($pagina)
    {
        $response = new Response();;
        /*$response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        $response->send();*/
    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder('i');
     $results = $em->createQuery('SELECT i FROM SitioBundle:Menu i'
                           . ' ORDER BY i.id DESC')
                    //->setParameters($parameters)
                    ->setFirstResult($pagina)
                    ->setMaxResults(1)
                    ->getResult();            
               return $results; 
    }
    
}
    