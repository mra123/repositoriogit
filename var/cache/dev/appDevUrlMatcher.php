<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // grupos
        if ($pathinfo === '/grupos') {
            return array (  '_controller' => 'AppBundle\\Controller\\AltaController::gruposAction',  '_route' => 'grupos',);
        }

        // consultardepartamento
        if (0 === strpos($pathinfo, '/consultardept') && preg_match('#^/consultardept/(?P<iddept>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultardepartamento')), array (  '_controller' => 'AppBundle\\Controller\\ConsultarController::consultarDept',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'homepage',);
        }

        // noauto
        if ($pathinfo === '/noauto') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::noautoAction',  '_route' => 'noauto',);
        }

        // baja
        if (0 === strpos($pathinfo, '/baja') && preg_match('#^/baja/(?P<idactividad>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'baja')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bajaAction',));
        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'AppBundle\\Controller\\InicioController::inicioAction',  '_route' => 'inicio',);
        }

        if (0 === strpos($pathinfo, '/alta')) {
            // alta
            if ($pathinfo === '/alta') {
                return array (  '_controller' => 'AppBundle\\Controller\\AltaController::altaAction',  '_route' => 'alta',);
            }

            // altaedicion
            if (0 === strpos($pathinfo, '/altaedicion') && preg_match('#^/altaedicion/(?P<idactividad>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'altaedicion')), array (  '_controller' => 'AppBundle\\Controller\\AltaController::altaedicionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // consulta_actividades
            if ($pathinfo === '/consulta_actividades') {
                return array (  '_controller' => 'AppBundle\\Controller\\AltaController::consulta_actividadesAction',  '_route' => 'consulta_actividades',);
            }

            // crear_actividades
            if (rtrim($pathinfo, '/') === '/crear_actividades') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'crear_actividades');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AltaController::crear_actividadesAction',  '_route' => 'crear_actividades',);
            }

        }

        // gestionar
        if (0 === strpos($pathinfo, '/gestionar') && preg_match('#^/gestionar/(?P<idactividad>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionar')), array (  '_controller' => 'AppBundle\\Controller\\GestionarController::gestionarAction',));
        }

        // consultar
        if ($pathinfo === '/consultar') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConsultarController::consultarAction',  '_route' => 'consultar',);
        }

        if (0 === strpos($pathinfo, '/pr')) {
            // prueba
            if ($pathinfo === '/prueba') {
                return array (  '_controller' => 'AppBundle\\Controller\\AltaController::pruebaAction',  '_route' => 'prueba',);
            }

            // profesores
            if (rtrim($pathinfo, '/') === '/profesores') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profesores');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AltaController::profesoresAction',  '_route' => 'profesores',);
            }

        }

        // agregarprofesor
        if (0 === strpos($pathinfo, '/agregarprofesor') && preg_match('#^/agregarprofesor/(?P<idusuario>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'agregarprofesor')), array (  '_controller' => 'AppBundle\\Controller\\AltaController::agregarprofesorAction',));
        }

        // consultaractividad
        if (0 === strpos($pathinfo, '/consultaractividad') && preg_match('#^/consultaractividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultaractividad')), array (  '_controller' => 'AppBundle\\Controller\\AltaController::consultaractividadAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
