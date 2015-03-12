<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assetic/javascripts')) {
            // _assetic_javascripts
            if ($pathinfo === '/assetic/javascripts') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => NULL,  '_route' => '_assetic_javascripts',);
            }

            if (0 === strpos($pathinfo, '/assetic/javascripts_part_1_')) {
                if (0 === strpos($pathinfo, '/assetic/javascripts_part_1_f')) {
                    // _assetic_javascripts_0
                    if ($pathinfo === '/assetic/javascripts_part_1_fastclick_1') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 0,  '_route' => '_assetic_javascripts_0',);
                    }

                    // _assetic_javascripts_1
                    if ($pathinfo === '/assetic/javascripts_part_1_foundation.min_2') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 1,  '_format' => 'min_2',  '_route' => '_assetic_javascripts_1',);
                    }

                }

                if (0 === strpos($pathinfo, '/assetic/javascripts_part_1_jquery')) {
                    // _assetic_javascripts_2
                    if ($pathinfo === '/assetic/javascripts_part_1_jquery.cookie_3') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 2,  '_format' => 'cookie_3',  '_route' => '_assetic_javascripts_2',);
                    }

                    // _assetic_javascripts_3
                    if ($pathinfo === '/assetic/javascripts_part_1_jquery_4') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 3,  '_route' => '_assetic_javascripts_3',);
                    }

                }

                // _assetic_javascripts_4
                if ($pathinfo === '/assetic/javascripts_part_1_modernizr_5') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 4,  '_route' => '_assetic_javascripts_4',);
                }

                // _assetic_javascripts_5
                if ($pathinfo === '/assetic/javascripts_part_1_placeholder_6') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'javascripts',  'pos' => 5,  '_route' => '_assetic_javascripts_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/23fe30e')) {
            // _assetic_23fe30e
            if ($pathinfo === '/js/23fe30e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_23fe30e',);
            }

            if (0 === strpos($pathinfo, '/js/23fe30e_part_')) {
                // _assetic_23fe30e_0
                if ($pathinfo === '/js/23fe30e_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_23fe30e_0',);
                }

                if (0 === strpos($pathinfo, '/js/23fe30e_part_2_')) {
                    if (0 === strpos($pathinfo, '/js/23fe30e_part_2_f')) {
                        // _assetic_23fe30e_1
                        if ($pathinfo === '/js/23fe30e_part_2_fastclick_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_23fe30e_1',);
                        }

                        // _assetic_23fe30e_2
                        if ($pathinfo === '/js/23fe30e_part_2_foundation.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_23fe30e_2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/23fe30e_part_2_jquery')) {
                        // _assetic_23fe30e_3
                        if ($pathinfo === '/js/23fe30e_part_2_jquery.cookie_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_23fe30e_3',);
                        }

                        // _assetic_23fe30e_4
                        if ($pathinfo === '/js/23fe30e_part_2_jquery_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_23fe30e_4',);
                        }

                    }

                    // _assetic_23fe30e_5
                    if ($pathinfo === '/js/23fe30e_part_2_modernizr_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_23fe30e_5',);
                    }

                    // _assetic_23fe30e_6
                    if ($pathinfo === '/js/23fe30e_part_2_placeholder_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '23fe30e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_23fe30e_6',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/df9bcde')) {
            // _assetic_df9bcde
            if ($pathinfo === '/css/df9bcde.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df9bcde',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_df9bcde',);
            }

            if (0 === strpos($pathinfo, '/css/df9bcde_part_1_')) {
                // _assetic_df9bcde_0
                if ($pathinfo === '/css/df9bcde_part_1_foundation.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'df9bcde',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_df9bcde_0',);
                }

                // _assetic_df9bcde_1
                if ($pathinfo === '/css/df9bcde_part_1_styles_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'df9bcde',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_df9bcde_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/e255e7e')) {
            // _assetic_e255e7e
            if ($pathinfo === '/images/e255e7e.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e255e7e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_e255e7e',);
            }

            // _assetic_e255e7e_0
            if ($pathinfo === '/images/e255e7e_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e255e7e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_e255e7e_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // mdo_agenda_moparman_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mdo_agenda_moparman_index');
            }

            return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mdo_agenda_moparman_index',);
        }

        // mdo_agenda_moparman_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<result>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_search')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\SearchController::indexAction',));
        }

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

        if (0 === strpos($pathinfo, '/vehicles')) {
            // mdo_agenda_moparman_vehicles
            if ($pathinfo === '/vehicles') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::indexAction',  '_route' => 'mdo_agenda_moparman_vehicles',);
            }

            // mdo_agenda_moparman_vehicles_add
            if ($pathinfo === '/vehicles/add') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::addVehicleAction',  'page' => 1,  '_route' => 'mdo_agenda_moparman_vehicles_add',);
            }

            // mdo_agenda_moparman_vehicles_category
            if (0 === strpos($pathinfo, '/vehicles/category') && preg_match('#^/vehicles/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_vehicles_category')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::showVehiclesAction',));
            }

            // mdo_agenda_moparman_vehicles_delete
            if ($pathinfo === '/vehicles/delete') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::deleteVehiclesAction',  '_route' => 'mdo_agenda_moparman_vehicles_delete',);
            }

            // mdo_agenda_moparman_vehicles_single
            if (preg_match('#^/vehicles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_vehicles_single')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::showVehicleAction',));
            }

            // mdo_agenda_moparman_vehicles_edit
            if (0 === strpos($pathinfo, '/vehicles/edit') && preg_match('#^/vehicles/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_vehicles_edit')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehiclesController::editVehicleAction',));
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

        if (0 === strpos($pathinfo, '/vehicle-categories')) {
            // mdo_agenda_moparman_vehicle_categories
            if ($pathinfo === '/vehicle-categories') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehicleCategoriesController::indexAction',  '_route' => 'mdo_agenda_moparman_vehicle_categories',);
            }

            // mdo_agenda_moparman_vehicle_categories_add
            if ($pathinfo === '/vehicle-categories/add') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehicleCategoriesController::addCategoryAction',  '_route' => 'mdo_agenda_moparman_vehicle_categories_add',);
            }

            // mdo_agenda_moparman_vehicle_categories_edit
            if (0 === strpos($pathinfo, '/vehicle-categories/edit') && preg_match('#^/vehicle\\-categories/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdo_agenda_moparman_vehicle_categories_edit')), array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehicleCategoriesController::editCategoryAction',));
            }

            // mdo_agenda_moparman_vehicle_categories_delete
            if ($pathinfo === '/vehicle-categories/delete') {
                return array (  '_controller' => 'MDOAgendaMoparmanBundle\\Controller\\VehicleCategoriesController::deleteCategoriesAction',  '_route' => 'mdo_agenda_moparman_vehicle_categories_delete',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
