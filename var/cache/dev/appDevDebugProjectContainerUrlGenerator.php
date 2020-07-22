<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::addUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::updateUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::getUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::getAllUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::deleteUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'association_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_reclamation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\ReclamationController::addReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_reclamation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\ReclamationController::updateReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updateReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_reclamations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\ReclamationController::getAllReclamationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllReclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_reclamation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\ReclamationController::deleteReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteReclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_association' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\AssociationController::addAssociationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addAssociation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_association' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\AssociationController::updateAssociationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateAssociation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_association' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\AssociationController::getAllAssociationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllAssociation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_association' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\AssociationController::getAssociationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getAssociation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_association' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AssociationBundle\\Controller\\AssociationController::deleteAssociationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteAssociation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'donation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_don' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::getDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_don' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::deleteDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_don' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::addDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_don' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::updateDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_dron' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::deleteDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_don' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\DonController::getAllDonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllDon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_needs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\NeedsController::addNeedsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addNeeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_needs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\NeedsController::deleteNeedsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteNeeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_needs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\NeedsController::updateNeedsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateNeeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_needs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\NeedsController::getNeedsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getNeeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_needs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DonationBundle\\Controller\\NeedsController::getAllNeedsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllNeeds',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'refugee_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::getAllRefugeesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recherche' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::getRefugeeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::updateRefugeeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\RefugeeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addBen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addBen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAllBen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_benevole' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::getBenevoleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getBenevoleBen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_benevole' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::updateBenevoleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateBenevole',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteBen' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RefugeeBundle\\Controller\\BenevoleController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteBen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
