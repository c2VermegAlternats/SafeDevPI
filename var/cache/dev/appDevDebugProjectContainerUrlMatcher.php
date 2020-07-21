<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // association_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AssociationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'association_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_association_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'association_homepage'));
            }

            return $ret;
        }
        not_association_homepage:

        if (0 === strpos($pathinfo, '/add')) {
            // add_categorie
            if ('/addCategorie' === $pathinfo) {
                return array (  '_controller' => 'AssociationBundle\\Controller\\CategorieController::addCategorieAction',  '_route' => 'add_categorie',);
            }

            // add_reclamation
            if ('/addReclamation' === $pathinfo) {
                return array (  '_controller' => 'AssociationBundle\\Controller\\ReclamationController::addReclamationAction',  '_route' => 'add_reclamation',);
            }

            // add_association
            if ('/addAssociation' === $pathinfo) {
                return array (  '_controller' => 'AssociationBundle\\Controller\\AssociationController::addAssociationAction',  '_route' => 'add_association',);
            }

            // add
            if ('/add' === $pathinfo) {
                return array (  '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::addAction',  '_route' => 'add',);
            }

            // addBen
            if ('/addBen' === $pathinfo) {
                return array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::addAction',  '_route' => 'addBen',);
            }

        }

        // affiche
        if ('/affiche' === $pathinfo) {
            return array (  '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::getAllRefugeesAction',  '_route' => 'affiche',);
        }

        if (0 === strpos($pathinfo, '/update')) {
            // update_categorie
            if (0 === strpos($pathinfo, '/updateCategorie') && preg_match('#^/updateCategorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_categorie']), array (  '_controller' => 'AssociationBundle\\Controller\\CategorieController::updateCategorieAction',));
            }

            // update_reclamation
            if ('/updateReclamation' === $pathinfo) {
                return array (  '_controller' => 'AssociationBundle\\Controller\\ReclamationController::updateReclamationAction',  '_route' => 'update_reclamation',);
            }

            // update_association
            if (0 === strpos($pathinfo, '/updateAssociation') && preg_match('#^/updateAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_association']), array (  '_controller' => 'AssociationBundle\\Controller\\AssociationController::updateAssociationAction',));
            }

            // update
            if (preg_match('#^/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update']), array (  '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::updateRefugeeAction',));
            }

            // update_benevole
            if (0 === strpos($pathinfo, '/updateBenevole') && preg_match('#^/updateBenevole/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_benevole']), array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::updateBenevoleAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/get')) {
            if (0 === strpos($pathinfo, '/getAll')) {
                // get_all_categorie
                if ('/getAllCategorie' === $pathinfo) {
                    return array (  '_controller' => 'AssociationBundle\\Controller\\CategorieController::getAllCategorieAction',  '_route' => 'get_all_categorie',);
                }

                // get_all_reclamations
                if ('/getAllReclamations' === $pathinfo) {
                    return array (  '_controller' => 'AssociationBundle\\Controller\\ReclamationController::getAllReclamationsAction',  '_route' => 'get_all_reclamations',);
                }

                // get_all_association
                if ('/getAllAssociation' === $pathinfo) {
                    return array (  '_controller' => 'AssociationBundle\\Controller\\AssociationController::getAllAssociationAction',  '_route' => 'get_all_association',);
                }

                // get_all
                if ('/getAllBen' === $pathinfo) {
                    return array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getAllAction',  '_route' => 'get_all',);
                }

            }

            // get_association
            if (0 === strpos($pathinfo, '/getAssociation') && preg_match('#^/getAssociation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'get_association']), array (  '_controller' => 'AssociationBundle\\Controller\\AssociationController::getAssociationAction',));
            }

            // get_benevole
            if (0 === strpos($pathinfo, '/getBenevoleBen') && preg_match('#^/getBenevoleBen/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'get_benevole']), array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getBenevoleAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/delete')) {
            // delete_categorie
            if (0 === strpos($pathinfo, '/deleteCategorie') && preg_match('#^/deleteCategorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_categorie']), array (  '_controller' => 'AssociationBundle\\Controller\\CategorieController::deleteCategorieAction',));
            }

            // delete_reclamation
            if ('/deleteReclamation' === $pathinfo) {
                return array (  '_controller' => 'AssociationBundle\\Controller\\ReclamationController::deleteReclamationAction',  '_route' => 'delete_reclamation',);
            }

            // delete_association
            if (0 === strpos($pathinfo, '/deleteAssociation') && preg_match('#^/deleteAssociation(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_association']), array (  '_controller' => 'AssociationBundle\\Controller\\AssociationController::deleteAssociationAction',));
            }

            // delete
            if (preg_match('#^/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::deleteAction',));
            }

            // deleteBen
            if (0 === strpos($pathinfo, '/deleteBen') && preg_match('#^/deleteBen/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBen']), array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::deleteAction',));
            }

        }

        // refugee_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'RefugeeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'refugee_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_refugee_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'refugee_homepage'));
            }

            return $ret;
        }
        not_refugee_homepage:

        // recherche
        if (0 === strpos($pathinfo, '/recherche') && preg_match('#^/recherche/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'recherche']), array (  '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::getRefugeeAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
