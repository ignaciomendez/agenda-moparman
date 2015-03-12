<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // mdo_agenda_moparman_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mdo_agenda_moparman_index');
            }

            return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mdo_agenda_moparman_index',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/contact')) {
                if (0 === strpos($pathinfo, '/contacts')) {
                    // mdo_agenda_moparman_contacts
                    if ($pathinfo === '/contacts') {
                        return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::indexAction',  '_route' => 'mdo_agenda_moparman_contacts',);
                    }

                    // mdo_agenda_moparman_contacts_add
                    if ($pathinfo === '/contacts/add') {
                        return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::addContactAction',  'page' => 1,  '_route' => 'mdo_agenda_moparman_contacts_add',);
                    }

                    // mdo_agenda_moparman_contacts_category
                    if (0 === strpos($pathinfo, '/contacts/category') && preg_match('#^/contacts/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_contacts_category')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::showContactsAction',));
                    }

                    // mdo_agenda_moparman_contacts_delete
                    if ($pathinfo === '/contacts/delete') {
                        return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::deleteContactsAction',  '_route' => 'mdo_agenda_moparman_contacts_delete',);
                    }

                }

                // mdo_agenda_moparman_contacts_single
                if (preg_match('#^/contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_contacts_single')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::showContactAction',));
                }

                // mdo_agenda_moparman_contacts_edit
                if (0 === strpos($pathinfo, '/contact/edit') && preg_match('#^/contact/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_contacts_edit')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\ContactsController::editContactAction',));
                }

            }

            if (0 === strpos($pathinfo, '/categories')) {
                // mdo_agenda_moparman_categories
                if ($pathinfo === '/categories') {
                    return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'mdo_agenda_moparman_categories',);
                }

                // mdo_agenda_moparman_categories_add
                if ($pathinfo === '/categories/add') {
                    return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::addCategoryAction',  '_route' => 'mdo_agenda_moparman_categories_add',);
                }

                // mdo_agenda_moparman_categories_edit
                if (0 === strpos($pathinfo, '/categories/edit') && preg_match('#^/categories/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_categories_edit')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::editCategoryAction',));
                }

                // mdo_agenda_moparman_categories_delete
                if ($pathinfo === '/categories/delete') {
                    return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\CategoriesController::deleteCategoriesAction',  '_route' => 'mdo_agenda_moparman_categories_delete',);
                }

            }

        }

        // mdo_agenda_moparman_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<result>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_search')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\SearchController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
