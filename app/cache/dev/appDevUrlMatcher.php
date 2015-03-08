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

        if (0 === strpos($pathinfo, '/js/compiled/main')) {
            // _assetic_21fab8b
            if ($pathinfo === '/js/compiled/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_21fab8b',);
            }

            if (0 === strpos($pathinfo, '/js/compiled/main_')) {
                // _assetic_21fab8b_0
                if ($pathinfo === '/js/compiled/main_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_21fab8b_0',);
                }

                if (0 === strpos($pathinfo, '/js/compiled/main_part_2_')) {
                    if (0 === strpos($pathinfo, '/js/compiled/main_part_2_f')) {
                        // _assetic_21fab8b_1
                        if ($pathinfo === '/js/compiled/main_part_2_fastclick_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_21fab8b_1',);
                        }

                        // _assetic_21fab8b_2
                        if ($pathinfo === '/js/compiled/main_part_2_foundation.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_21fab8b_2',);
                        }

                    }

                    // _assetic_21fab8b_3
                    if ($pathinfo === '/js/compiled/main_part_2_jquery.cookie_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_21fab8b_3',);
                    }

                    // _assetic_21fab8b_4
                    if ($pathinfo === '/js/compiled/main_part_2_modernizr_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_21fab8b_4',);
                    }

                    // _assetic_21fab8b_5
                    if ($pathinfo === '/js/compiled/main_part_2_placeholder_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '21fab8b',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_21fab8b_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/df9bcde')) {
            // _assetic_df9bcde
            if ($pathinfo === '/css/df9bcde.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df9bcde',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_df9bcde',);
            }

            // _assetic_df9bcde_0
            if ($pathinfo === '/css/df9bcde_part_1_foundation.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df9bcde',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_df9bcde_0',);
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

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
