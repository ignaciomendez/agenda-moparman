<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'mdo_agenda_moparman_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacts',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::addContactAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacts/add',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts_category' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::showContactsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contacts/category',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::deleteContactsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacts/delete',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts_single' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::showContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_contacts_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::editContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contact/edit',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_categories_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::addCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories/add',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_categories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::editCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categories/edit',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_categories_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::deleteCategoriesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories/delete',    ),  ),  4 =>   array (  ),),
        'mdo_agenda_moparman_search' => array (  0 =>   array (    0 => 'result',  ),  1 =>   array (    '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\SearchController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'result',    ),    1 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
