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

        // pa_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pa_user_homepage')), array (  '_controller' => 'PA\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // pa_user_index
            if ($pathinfo === '/user/index') {
                return array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'pa_user_index',);
            }

            if (0 === strpos($pathinfo, '/user/a')) {
                // pa_user_articles
                if (0 === strpos($pathinfo, '/user/articles') && preg_match('#^/user/articles(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pa_user_articles')), array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::articlesAction',  'page' => 1,));
                }

                // pa_user_add
                if ($pathinfo === '/user/add') {
                    return array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::addAction',  '_route' => 'pa_user_add',);
                }

            }

            // pa_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pa_user_edit')), array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::editAction',));
            }

            // pa_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pa_user_view')), array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::viewAction',));
            }

            // pa_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pa_user_delete')), array (  '_controller' => 'PA\\UserBundle\\Controller\\UserController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
