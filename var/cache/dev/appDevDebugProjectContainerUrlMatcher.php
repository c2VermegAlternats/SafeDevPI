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

        // event_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_event_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_homepage'));
            }

            return $ret;
        }
        not_event_homepage:

        if (0 === strpos($pathinfo, '/add')) {
            if (0 === strpos($pathinfo, '/addEvent')) {
                // addEvent
                if (preg_match('#^/addEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'addEvent']), array (  '_controller' => 'EventBundle\\Controller\\EventController::addEventAction',));
                }

                // addEventCategory
                if ('/addEventCategory' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle:EventCategory:addEventCategory',  '_route' => 'addEventCategory',);
                }

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

        if (0 === strpos($pathinfo, '/delete')) {
            if (0 === strpos($pathinfo, '/deleteEvent')) {
                // deleteEvent
                if (preg_match('#^/deleteEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteEvent']), array (  '_controller' => 'EventBundle\\Controller\\EventController::deleteEventAction',));
                }

                // deleteEventCategory
                if (0 === strpos($pathinfo, '/deleteEventCategory') && preg_match('#^/deleteEventCategory/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteEventCategory']), array (  '_controller' => 'EventBundle:EventCategory:deleteEventCategory',));
                }

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

        elseif (0 === strpos($pathinfo, '/update')) {
            if (0 === strpos($pathinfo, '/updateEvent')) {
                // updateEvent
                if (preg_match('#^/updateEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateEvent']), array (  '_controller' => 'EventBundle\\Controller\\EventController::updateEventAction',));
                }

                // updateEventCategory
                if (0 === strpos($pathinfo, '/updateEventCategory') && preg_match('#^/updateEventCategory/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateEventCategory']), array (  '_controller' => 'EventBundle:EventCategory:updateEventCategory',));
                }

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

        elseif (0 === strpos($pathinfo, '/listEvent')) {
            // listEvent
            if ('/listEvent' === $pathinfo) {
                return array (  '_controller' => 'EventBundle\\Controller\\EventController::listEventAction',  '_route' => 'listEvent',);
            }

            // listEventCategory
            if ('/listEventCategory' === $pathinfo) {
                return array (  '_controller' => 'EventBundle:EventCategory:listEventCategory',  '_route' => 'listEventCategory',);
            }

        }

        elseif (0 === strpos($pathinfo, '/searchEvent')) {
            // searchEvent
            if (preg_match('#^/searchEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'searchEvent']), array (  '_controller' => 'EventBundle\\Controller\\EventController::searchEventAction',));
            }

            // searchEventCategory
            if (0 === strpos($pathinfo, '/searchEventCategory') && preg_match('#^/searchEventCategory/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'searchEventCategory']), array (  '_controller' => 'EventBundle:EventCategory:searchEventCategory',));
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

        // get_all
        if ('/getAllBen' === $pathinfo) {
            return array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getAllAction',  '_route' => 'get_all',);
        }

        // get_benevole
        if (0 === strpos($pathinfo, '/getBenevoleBen') && preg_match('#^/getBenevoleBen/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'get_benevole']), array (  '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getBenevoleAction',));
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
