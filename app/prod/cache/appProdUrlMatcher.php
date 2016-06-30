<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_informacion_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_informacion_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::indexAction',  '_format' => NULL,));
            }
            not_api_informacion_index:

            // api_informacion_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_informacion_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::newAction',  '_format' => NULL,));
            }
            not_api_informacion_new:

            // api_informacion_show
            if (preg_match('#^/api/(?P<informacion>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_informacion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::showAction',  '_format' => NULL,));
            }
            not_api_informacion_show:

            // api_informacion_edit
            if (preg_match('#^/api/(?P<informacion>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_informacion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::editAction',  '_format' => NULL,));
            }
            not_api_informacion_edit:

            // api_informacion_delete
            if (preg_match('#^/api/(?P<informacion>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_informacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::deleteAction',  '_format' => NULL,));
            }
            not_api_informacion_delete:

            // api_informacion_get_informacion
            if (0 === strpos($pathinfo, '/api/informacions') && preg_match('#^/api/informacions/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_informacion_get_informacion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_get_informacion')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::getInformacionAction',  '_format' => NULL,));
            }
            not_api_informacion_get_informacion:

            // api_informacion_get_countinformacion
            if (0 === strpos($pathinfo, '/api/countinformacion') && preg_match('#^/api/countinformacion(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_informacion_get_countinformacion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_informacion_get_countinformacion')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::getCountinformacionAction',  '_format' => NULL,));
            }
            not_api_informacion_get_countinformacion:

            // api_noticia_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_noticia_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::indexAction',  '_format' => NULL,));
            }
            not_api_noticia_index:

            // api_noticia_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_noticia_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::newAction',  '_format' => NULL,));
            }
            not_api_noticia_new:

            // api_noticia_show
            if (preg_match('#^/api/(?P<noticia>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_noticia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::showAction',  '_format' => NULL,));
            }
            not_api_noticia_show:

            // api_noticia_edit
            if (preg_match('#^/api/(?P<noticium>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_noticia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::editAction',  '_format' => NULL,));
            }
            not_api_noticia_edit:

            // api_noticia_delete
            if (preg_match('#^/api/(?P<noticium>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_noticia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::deleteAction',  '_format' => NULL,));
            }
            not_api_noticia_delete:

            // api_noticia_get_noticia
            if (0 === strpos($pathinfo, '/api/noticias') && preg_match('#^/api/noticias/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_noticia_get_noticia;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_get_noticia')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::getNoticiaAction',  '_format' => NULL,));
            }
            not_api_noticia_get_noticia:

            // api_noticia_get_countnoticia
            if (0 === strpos($pathinfo, '/api/countnoticia') && preg_match('#^/api/countnoticia(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_noticia_get_countnoticia;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_noticia_get_countnoticia')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::getCountnoticiaAction',  '_format' => NULL,));
            }
            not_api_noticia_get_countnoticia:

            // api_interna_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_interna_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::indexAction',  '_format' => NULL,));
            }
            not_api_interna_index:

            // api_interna_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_interna_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::newAction',  '_format' => NULL,));
            }
            not_api_interna_new:

            // api_interna_show
            if (preg_match('#^/api/(?P<noticiainterna>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_interna_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::showAction',  '_format' => NULL,));
            }
            not_api_interna_show:

            // api_interna_edit
            if (preg_match('#^/api/(?P<noticiaInterna>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_interna_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::editAction',  '_format' => NULL,));
            }
            not_api_interna_edit:

            // api_interna_delete
            if (preg_match('#^/api/(?P<noticiaInterna>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_interna_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::deleteAction',  '_format' => NULL,));
            }
            not_api_interna_delete:

            // api_interna_get_noticia_interna
            if (0 === strpos($pathinfo, '/api/noticias') && preg_match('#^/api/noticias/(?P<pagina>[^/]++)/interna(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_interna_get_noticia_interna;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_get_noticia_interna')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::getNoticiaInternaAction',  '_format' => NULL,));
            }
            not_api_interna_get_noticia_interna:

            // api_interna_get_countnoticiainterna
            if (0 === strpos($pathinfo, '/api/countnoticiainterna') && preg_match('#^/api/countnoticiainterna(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_interna_get_countnoticiainterna;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_interna_get_countnoticiainterna')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::getCountnoticiainternaAction',  '_format' => NULL,));
            }
            not_api_interna_get_countnoticiainterna:

            // api_video_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_video_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::indexAction',  '_format' => NULL,));
            }
            not_api_video_index:

            // api_video_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_video_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::newAction',  '_format' => NULL,));
            }
            not_api_video_new:

            // api_video_show
            if (preg_match('#^/api/(?P<video>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_video_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::showAction',  '_format' => NULL,));
            }
            not_api_video_show:

            // api_video_edit
            if (preg_match('#^/api/(?P<video>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_video_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::editAction',  '_format' => NULL,));
            }
            not_api_video_edit:

            // api_video_delete
            if (preg_match('#^/api/(?P<video>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_video_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::deleteAction',  '_format' => NULL,));
            }
            not_api_video_delete:

            // api_video_get_video
            if (0 === strpos($pathinfo, '/api/videos') && preg_match('#^/api/videos/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_video_get_video;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_get_video')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::getVideoAction',  '_format' => NULL,));
            }
            not_api_video_get_video:

            // api_video_get_countvideo
            if (0 === strpos($pathinfo, '/api/countvideo') && preg_match('#^/api/countvideo(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_video_get_countvideo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_video_get_countvideo')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::getCountvideoAction',  '_format' => NULL,));
            }
            not_api_video_get_countvideo:

            // api_ente_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_ente_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::indexAction',  '_format' => NULL,));
            }
            not_api_ente_index:

            // api_ente_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_ente_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::newAction',  '_format' => NULL,));
            }
            not_api_ente_new:

            // api_ente_show
            if (preg_match('#^/api/(?P<ente>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_ente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::showAction',  '_format' => NULL,));
            }
            not_api_ente_show:

            // api_ente_edit
            if (preg_match('#^/api/(?P<ente>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_ente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::editAction',  '_format' => NULL,));
            }
            not_api_ente_edit:

            // api_ente_delete
            if (preg_match('#^/api/(?P<ente>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_ente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::deleteAction',  '_format' => NULL,));
            }
            not_api_ente_delete:

            // api_ente_get_ente
            if (0 === strpos($pathinfo, '/api/entes') && preg_match('#^/api/entes/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_ente_get_ente;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_get_ente')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::getEnteAction',  '_format' => NULL,));
            }
            not_api_ente_get_ente:

            // api_ente_get_countente
            if (0 === strpos($pathinfo, '/api/countente') && preg_match('#^/api/countente(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_ente_get_countente;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_ente_get_countente')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::getCountenteAction',  '_format' => NULL,));
            }
            not_api_ente_get_countente:

            // api_enlace_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_enlace_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::indexAction',  '_format' => NULL,));
            }
            not_api_enlace_index:

            // api_enlace_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_enlace_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::newAction',  '_format' => NULL,));
            }
            not_api_enlace_new:

            // api_enlace_show
            if (preg_match('#^/api/(?P<enlace>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_enlace_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::showAction',  '_format' => NULL,));
            }
            not_api_enlace_show:

            // api_enlace_edit
            if (preg_match('#^/api/(?P<enlace>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_enlace_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::editAction',  '_format' => NULL,));
            }
            not_api_enlace_edit:

            // api_enlace_delete
            if (preg_match('#^/api/(?P<enlace>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_enlace_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::deleteAction',  '_format' => NULL,));
            }
            not_api_enlace_delete:

            // api_enlace_get_enlace
            if (0 === strpos($pathinfo, '/api/enlaces') && preg_match('#^/api/enlaces/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_enlace_get_enlace;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_enlace_get_enlace')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::getEnlaceAction',  '_format' => NULL,));
            }
            not_api_enlace_get_enlace:

            // api_estadistica_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_estadistica_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::indexAction',  '_format' => NULL,));
            }
            not_api_estadistica_index:

            // api_estadistica_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_estadistica_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::newAction',  '_format' => NULL,));
            }
            not_api_estadistica_new:

            // api_estadistica_show
            if (preg_match('#^/api/(?P<estadistica>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_estadistica_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::showAction',  '_format' => NULL,));
            }
            not_api_estadistica_show:

            // api_estadistica_edit
            if (preg_match('#^/api/(?P<estadistica>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_estadistica_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::editAction',  '_format' => NULL,));
            }
            not_api_estadistica_edit:

            // api_estadistica_delete
            if (preg_match('#^/api/(?P<estadistica>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_estadistica_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::deleteAction',  '_format' => NULL,));
            }
            not_api_estadistica_delete:

            // api_estadistica_get_estadistica
            if (0 === strpos($pathinfo, '/api/estadisticas') && preg_match('#^/api/estadisticas/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_estadistica_get_estadistica;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_estadistica_get_estadistica')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::getEstadisticaAction',  '_format' => NULL,));
            }
            not_api_estadistica_get_estadistica:

            // api_imagen_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_imagen_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::indexAction',  '_format' => NULL,));
            }
            not_api_imagen_index:

            // api_imagen_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_imagen_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::newAction',  '_format' => NULL,));
            }
            not_api_imagen_new:

            // api_imagen_show
            if (preg_match('#^/api/(?P<imagen>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_imagen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::showAction',  '_format' => NULL,));
            }
            not_api_imagen_show:

            // api_imagen_edit
            if (preg_match('#^/api/(?P<imagen>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_imagen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::editAction',  '_format' => NULL,));
            }
            not_api_imagen_edit:

            // api_imagen_delete
            if (preg_match('#^/api/(?P<imagen>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_imagen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::deleteAction',  '_format' => NULL,));
            }
            not_api_imagen_delete:

            if (0 === strpos($pathinfo, '/api/i')) {
                // api_imagen_get_imagen
                if (0 === strpos($pathinfo, '/api/imagens') && preg_match('#^/api/imagens/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_imagen_get_imagen;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_imagen_get_imagen')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::getImagenAction',  '_format' => NULL,));
                }
                not_api_imagen_get_imagen:

                // api_destacado_index
                if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_destacado_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::indexAction',  '_format' => NULL,));
                }
                not_api_destacado_index:

            }

            // api_destacado_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_destacado_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::newAction',  '_format' => NULL,));
            }
            not_api_destacado_new:

            // api_destacado_show
            if (preg_match('#^/api/(?P<destacado>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_destacado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::showAction',  '_format' => NULL,));
            }
            not_api_destacado_show:

            // api_destacado_edit
            if (preg_match('#^/api/(?P<destacado>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_destacado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::editAction',  '_format' => NULL,));
            }
            not_api_destacado_edit:

            // api_destacado_delete
            if (preg_match('#^/api/(?P<destacado>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_destacado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::deleteAction',  '_format' => NULL,));
            }
            not_api_destacado_delete:

            // api_destacado_get_destacado
            if (0 === strpos($pathinfo, '/api/destacados') && preg_match('#^/api/destacados/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_destacado_get_destacado;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_destacado_get_destacado')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::getDestacadoAction',  '_format' => NULL,));
            }
            not_api_destacado_get_destacado:

            // api_banner_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_banner_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::indexAction',  '_format' => NULL,));
            }
            not_api_banner_index:

            // api_banner_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_banner_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::newAction',  '_format' => NULL,));
            }
            not_api_banner_new:

            // api_banner_show
            if (preg_match('#^/api/(?P<banner>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_banner_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::showAction',  '_format' => NULL,));
            }
            not_api_banner_show:

            // api_banner_edit
            if (preg_match('#^/api/(?P<banner>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_banner_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::editAction',  '_format' => NULL,));
            }
            not_api_banner_edit:

            // api_banner_delete
            if (preg_match('#^/api/(?P<banner>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_banner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::deleteAction',  '_format' => NULL,));
            }
            not_api_banner_delete:

            // api_banner_get_banner
            if (0 === strpos($pathinfo, '/api/banners') && preg_match('#^/api/banners/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_banner_get_banner;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_banner_get_banner')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::getBannerAction',  '_format' => NULL,));
            }
            not_api_banner_get_banner:

            // api_documento_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_documento_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::indexAction',  '_format' => NULL,));
            }
            not_api_documento_index:

            // api_documento_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_documento_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_new')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::newAction',  '_format' => NULL,));
            }
            not_api_documento_new:

            // api_documento_show
            if (preg_match('#^/api/(?P<documento>[^/]++)/show(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_api_documento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::showAction',  '_format' => NULL,));
            }
            not_api_documento_show:

            // api_documento_edit
            if (preg_match('#^/api/(?P<documento>[^/]++)/edit(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_documento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::editAction',  '_format' => NULL,));
            }
            not_api_documento_edit:

            // api_documento_delete
            if (preg_match('#^/api/(?P<documento>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_documento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::deleteAction',  '_format' => NULL,));
            }
            not_api_documento_delete:

            // api_documento_get_documento
            if (0 === strpos($pathinfo, '/api/documentos') && preg_match('#^/api/documentos/(?P<pagina>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_documento_get_documento;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_get_documento')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::getDocumentoAction',  '_format' => NULL,));
            }
            not_api_documento_get_documento:

            // api_documento_get_countdocumento
            if (0 === strpos($pathinfo, '/api/countdocumento') && preg_match('#^/api/countdocumento(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_documento_get_countdocumento;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_documento_get_countdocumento')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::getCountdocumentoAction',  '_format' => NULL,));
            }
            not_api_documento_get_countdocumento:

        }

        if (0 === strpos($pathinfo, '/destacado')) {
            // destacado_index
            if (rtrim($pathinfo, '/') === '/destacado') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_destacado_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'destacado_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::indexAction',  '_route' => 'destacado_index',);
            }
            not_destacado_index:

            // destacado_new
            if ($pathinfo === '/destacado/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_destacado_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::newAction',  '_route' => 'destacado_new',);
            }
            not_destacado_new:

            // destacado_show
            if (preg_match('#^/destacado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_destacado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::showAction',));
            }
            not_destacado_show:

            // destacado_edit
            if (preg_match('#^/destacado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_destacado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::editAction',));
            }
            not_destacado_edit:

            // destacado_delete
            if (preg_match('#^/destacado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_destacado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'destacado_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DestacadoController::deleteAction',));
            }
            not_destacado_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/noticia')) {
            // noticia_index
            if (rtrim($pathinfo, '/') === '/noticia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_noticia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticia_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::indexAction',  '_route' => 'noticia_index',);
            }
            not_noticia_index:

            // noticia_new
            if ($pathinfo === '/noticia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_noticia_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::newAction',  '_route' => 'noticia_new',);
            }
            not_noticia_new:

            // noticia_show
            if (preg_match('#^/noticia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_noticia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::showAction',));
            }
            not_noticia_show:

            // noticia_edit
            if (preg_match('#^/noticia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_noticia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::editAction',));
            }
            not_noticia_edit:

            // noticia_delete
            if (preg_match('#^/noticia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_noticia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaController::deleteAction',));
            }
            not_noticia_delete:

            if (0 === strpos($pathinfo, '/noticiainterna')) {
                // noticiainterna_index
                if (rtrim($pathinfo, '/') === '/noticiainterna') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_noticiainterna_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'noticiainterna_index');
                    }

                    return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::indexAction',  '_route' => 'noticiainterna_index',);
                }
                not_noticiainterna_index:

                // noticiainterna_new
                if ($pathinfo === '/noticiainterna/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_noticiainterna_new;
                    }

                    return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::newAction',  '_route' => 'noticiainterna_new',);
                }
                not_noticiainterna_new:

                // noticiainterna_show
                if (preg_match('#^/noticiainterna/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_noticiainterna_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticiainterna_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::showAction',));
                }
                not_noticiainterna_show:

                // noticiainterna_edit
                if (preg_match('#^/noticiainterna/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_noticiainterna_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticiainterna_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::editAction',));
                }
                not_noticiainterna_edit:

                // noticiainterna_delete
                if (preg_match('#^/noticiainterna/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_noticiainterna_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticiainterna_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\NoticiaInternaController::deleteAction',));
                }
                not_noticiainterna_delete:

            }

        }

        if (0 === strpos($pathinfo, '/informacion')) {
            // informacion_index
            if (rtrim($pathinfo, '/') === '/informacion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_informacion_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'informacion_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::indexAction',  '_route' => 'informacion_index',);
            }
            not_informacion_index:

            // informacion_new
            if ($pathinfo === '/informacion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_informacion_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::newAction',  '_route' => 'informacion_new',);
            }
            not_informacion_new:

            // informacion_show
            if (preg_match('#^/informacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_informacion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informacion_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::showAction',));
            }
            not_informacion_show:

            // informacion_edit
            if (preg_match('#^/informacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_informacion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informacion_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::editAction',));
            }
            not_informacion_edit:

            // informacion_delete
            if (preg_match('#^/informacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_informacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'informacion_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\InformacionController::deleteAction',));
            }
            not_informacion_delete:

        }

        if (0 === strpos($pathinfo, '/ente')) {
            // ente_index
            if (rtrim($pathinfo, '/') === '/ente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ente_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ente_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::indexAction',  '_route' => 'ente_index',);
            }
            not_ente_index:

            // ente_new
            if ($pathinfo === '/ente/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ente_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::newAction',  '_route' => 'ente_new',);
            }
            not_ente_new:

            // ente_show
            if (preg_match('#^/ente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ente_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::showAction',));
            }
            not_ente_show:

            // ente_edit
            if (preg_match('#^/ente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ente_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::editAction',));
            }
            not_ente_edit:

            // ente_delete
            if (preg_match('#^/ente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ente_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnteController::deleteAction',));
            }
            not_ente_delete:

        }

        if (0 === strpos($pathinfo, '/documento')) {
            // documento_index
            if (rtrim($pathinfo, '/') === '/documento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'documento_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::indexAction',  '_route' => 'documento_index',);
            }
            not_documento_index:

            // documento_new
            if ($pathinfo === '/documento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_documento_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::newAction',  '_route' => 'documento_new',);
            }
            not_documento_new:

            // documento_show
            if (preg_match('#^/documento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::showAction',));
            }
            not_documento_show:

            // documento_edit
            if (preg_match('#^/documento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_documento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::editAction',));
            }
            not_documento_edit:

            // documento_delete
            if (preg_match('#^/documento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_documento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DocumentoController::deleteAction',));
            }
            not_documento_delete:

        }

        if (0 === strpos($pathinfo, '/reporteagricola')) {
            // reporteagricola_index
            if (rtrim($pathinfo, '/') === '/reporteagricola') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reporteagricola_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reporteagricola_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ReporteAgricolaController::indexAction',  '_route' => 'reporteagricola_index',);
            }
            not_reporteagricola_index:

            // reporteagricola_new
            if ($pathinfo === '/reporteagricola/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reporteagricola_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ReporteAgricolaController::newAction',  '_route' => 'reporteagricola_new',);
            }
            not_reporteagricola_new:

            // reporteagricola_show
            if (preg_match('#^/reporteagricola/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reporteagricola_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reporteagricola_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ReporteAgricolaController::showAction',));
            }
            not_reporteagricola_show:

            // reporteagricola_edit
            if (preg_match('#^/reporteagricola/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reporteagricola_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reporteagricola_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ReporteAgricolaController::editAction',));
            }
            not_reporteagricola_edit:

            // reporteagricola_delete
            if (preg_match('#^/reporteagricola/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reporteagricola_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reporteagricola_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ReporteAgricolaController::deleteAction',));
            }
            not_reporteagricola_delete:

        }

        if (0 === strpos($pathinfo, '/enlace')) {
            // enlace_index
            if (rtrim($pathinfo, '/') === '/enlace') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enlace_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enlace_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::indexAction',  '_route' => 'enlace_index',);
            }
            not_enlace_index:

            // enlace_new
            if ($pathinfo === '/enlace/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_enlace_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::newAction',  '_route' => 'enlace_new',);
            }
            not_enlace_new:

            // enlace_show
            if (preg_match('#^/enlace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enlace_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::showAction',));
            }
            not_enlace_show:

            // enlace_edit
            if (preg_match('#^/enlace/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_enlace_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::editAction',));
            }
            not_enlace_edit:

            // enlace_delete
            if (preg_match('#^/enlace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_enlace_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enlace_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EnlaceController::deleteAction',));
            }
            not_enlace_delete:

        }

        if (0 === strpos($pathinfo, '/banner')) {
            // banner_index
            if (rtrim($pathinfo, '/') === '/banner') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_banner_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'banner_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::indexAction',  '_route' => 'banner_index',);
            }
            not_banner_index:

            // banner_new
            if ($pathinfo === '/banner/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_banner_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::newAction',  '_route' => 'banner_new',);
            }
            not_banner_new:

            // banner_show
            if (preg_match('#^/banner/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_banner_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::showAction',));
            }
            not_banner_show:

            // banner_edit
            if (preg_match('#^/banner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_banner_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::editAction',));
            }
            not_banner_edit:

            // banner_delete
            if (preg_match('#^/banner/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_banner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banner_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\BannerController::deleteAction',));
            }
            not_banner_delete:

        }

        if (0 === strpos($pathinfo, '/imagen')) {
            // imagen_index
            if (rtrim($pathinfo, '/') === '/imagen') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_imagen_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'imagen_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::indexAction',  '_route' => 'imagen_index',);
            }
            not_imagen_index:

            // imagen_new
            if ($pathinfo === '/imagen/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_imagen_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::newAction',  '_route' => 'imagen_new',);
            }
            not_imagen_new:

            // imagen_show
            if (preg_match('#^/imagen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_imagen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagen_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::showAction',));
            }
            not_imagen_show:

            // imagen_edit
            if (preg_match('#^/imagen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_imagen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagen_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::editAction',));
            }
            not_imagen_edit:

            // imagen_delete
            if (preg_match('#^/imagen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_imagen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagen_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\ImagenController::deleteAction',));
            }
            not_imagen_delete:

        }

        if (0 === strpos($pathinfo, '/video')) {
            // video_index
            if (rtrim($pathinfo, '/') === '/video') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_video_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'video_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::indexAction',  '_route' => 'video_index',);
            }
            not_video_index:

            // video_new
            if ($pathinfo === '/video/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_video_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::newAction',  '_route' => 'video_new',);
            }
            not_video_new:

            // video_show
            if (preg_match('#^/video/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_video_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::showAction',));
            }
            not_video_show:

            // video_edit
            if (preg_match('#^/video/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_video_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::editAction',));
            }
            not_video_edit:

            // video_delete
            if (preg_match('#^/video/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_video_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\VideoController::deleteAction',));
            }
            not_video_delete:

        }

        if (0 === strpos($pathinfo, '/posicion')) {
            // posicion_index
            if (rtrim($pathinfo, '/') === '/posicion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_posicion_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'posicion_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::indexAction',  '_route' => 'posicion_index',);
            }
            not_posicion_index:

            // tabla_index
            if (preg_match('#^/posicion/(?P<seleccion>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tabla_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tabla_index')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::tablaAction',));
            }
            not_tabla_index:

            // posicion_new
            if ($pathinfo === '/posicion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_posicion_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::newAction',  '_route' => 'posicion_new',);
            }
            not_posicion_new:

            // posicion_show
            if (preg_match('#^/posicion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_posicion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'posicion_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::showAction',));
            }
            not_posicion_show:

            // posicion_edit
            if (preg_match('#^/posicion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_posicion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'posicion_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::editAction',));
            }
            not_posicion_edit:

            // posicion_delete
            if (preg_match('#^/posicion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_posicion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'posicion_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\PosicionController::deleteAction',));
            }
            not_posicion_delete:

        }

        if (0 === strpos($pathinfo, '/menu')) {
            // menu_index
            if (rtrim($pathinfo, '/') === '/menu') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'menu_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\MenuController::indexAction',  '_route' => 'menu_index',);
            }
            not_menu_index:

            // menu_new
            if ($pathinfo === '/menu/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
            }
            not_menu_new:

            // menu_show
            if (preg_match('#^/menu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\MenuController::showAction',));
            }
            not_menu_show:

            // menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_menu_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\MenuController::editAction',));
            }
            not_menu_edit:

            // menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_menu_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\MenuController::deleteAction',));
            }
            not_menu_delete:

        }

        if (0 === strpos($pathinfo, '/fosgroup')) {
            // fosgroup_index
            if (rtrim($pathinfo, '/') === '/fosgroup') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fosgroup_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fosgroup_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\FosGroupController::indexAction',  '_route' => 'fosgroup_index',);
            }
            not_fosgroup_index:

            // fosgroup_new
            if ($pathinfo === '/fosgroup/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fosgroup_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\FosGroupController::newAction',  '_route' => 'fosgroup_new',);
            }
            not_fosgroup_new:

            // fosgroup_show
            if (preg_match('#^/fosgroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fosgroup_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosgroup_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\FosGroupController::showAction',));
            }
            not_fosgroup_show:

            // fosgroup_edit
            if (preg_match('#^/fosgroup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fosgroup_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosgroup_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\FosGroupController::editAction',));
            }
            not_fosgroup_edit:

            // fosgroup_delete
            if (preg_match('#^/fosgroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_fosgroup_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fosgroup_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\FosGroupController::deleteAction',));
            }
            not_fosgroup_delete:

        }

        if (0 === strpos($pathinfo, '/estadistica')) {
            // estadistica_index
            if (rtrim($pathinfo, '/') === '/estadistica') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadistica_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estadistica_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::indexAction',  '_route' => 'estadistica_index',);
            }
            not_estadistica_index:

            // estadistica_new
            if ($pathinfo === '/estadistica/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadistica_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::newAction',  '_route' => 'estadistica_new',);
            }
            not_estadistica_new:

            // estadistica_show
            if (preg_match('#^/estadistica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadistica_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadistica_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::showAction',));
            }
            not_estadistica_show:

            // estadistica_edit
            if (preg_match('#^/estadistica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadistica_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadistica_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::editAction',));
            }
            not_estadistica_edit:

            // estadistica_delete
            if (preg_match('#^/estadistica/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estadistica_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadistica_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\EstadisticaController::deleteAction',));
            }
            not_estadistica_delete:

        }

        if (0 === strpos($pathinfo, '/tipodocumento')) {
            // tipodocumento_index
            if (rtrim($pathinfo, '/') === '/tipodocumento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipodocumento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipodocumento_index');
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\TipoDocumentoController::indexAction',  '_route' => 'tipodocumento_index',);
            }
            not_tipodocumento_index:

            // tipodocumento_new
            if ($pathinfo === '/tipodocumento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipodocumento_new;
                }

                return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\TipoDocumentoController::newAction',  '_route' => 'tipodocumento_new',);
            }
            not_tipodocumento_new:

            // tipodocumento_show
            if (preg_match('#^/tipodocumento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipodocumento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodocumento_show')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\TipoDocumentoController::showAction',));
            }
            not_tipodocumento_show:

            // tipodocumento_edit
            if (preg_match('#^/tipodocumento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipodocumento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodocumento_edit')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\TipoDocumentoController::editAction',));
            }
            not_tipodocumento_edit:

            // tipodocumento_delete
            if (preg_match('#^/tipodocumento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipodocumento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipodocumento_delete')), array (  '_controller' => 'MAT\\SitioBundle\\Controller\\TipoDocumentoController::deleteAction',));
            }
            not_tipodocumento_delete:

        }

        // sitio_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitio_homepage');
            }

            return array (  '_controller' => 'MAT\\SitioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sitio_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_new;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
