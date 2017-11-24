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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ('/js/bootstrap.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_part_1_')) {
                    // _assetic_bootstrap_js_0
                    if ('/js/bootstrap_part_1_bootstrap_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ('/js/bootstrap_part_1_bootstrap.min_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ('/js/bootstrap_part_1_npm_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                }

                // _assetic_bootstrap_progressbar_js
                if ('/js/bootstrap-progressbar.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_progressbar_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_progressbar_js',);
                }

                // _assetic_bootstrap_progressbar_js_0
                if ('/js/bootstrap-progressbar_bootstrap-progressbar.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_progressbar_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_progressbar_js_0',);
                }

            }

            // _assetic_custom_js
            if ('/js/custom.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'custom_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_custom_js',);
            }

            // _assetic_custom_js_0
            if ('/js/custom_custom.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'custom_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_custom_js_0',);
            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ('/js/jquery.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ('/js/jquery_jquery.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

                // _assetic_jquery_1
                if ('/js/jquery_jquery.mCustomScrollbar.concat.min_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_jquery_1',);
                }

            }

            // _assetic_skycons
            if ('/js/skycons.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'skycons',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_skycons',);
            }

            // _assetic_skycons_0
            if ('/js/skycons_skycons_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'skycons',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_skycons_0',);
            }

            // _assetic_icheck
            if ('/js/icheck.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'icheck',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_icheck',);
            }

            // _assetic_icheck_0
            if ('/js/icheck_icheck.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'icheck',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_icheck_0',);
            }

            // _assetic_fastclick
            if ('/js/fastclick.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fastclick',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fastclick',);
            }

            // _assetic_fastclick_0
            if ('/js/fastclick_fastclick_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fastclick',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fastclick_0',);
            }

            // _assetic_gauge
            if ('/js/gauge.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'gauge',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_gauge',);
            }

            // _assetic_gauge_0
            if ('/js/gauge_gauge.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'gauge',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_gauge_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/bootstrap')) {
                // _assetic_bootstrap_css
                if ('/css/bootstrap.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                // _assetic_bootstrap_css_0
                if ('/css/bootstrap_bootstrap.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ('/css/bootstrap_bootstrap-theme.min_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

            // _assetic_custom_css
            if ('/css/custom.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'custom_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_custom_css',);
            }

            // _assetic_custom_css_0
            if ('/css/custom_custom.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'custom_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_custom_css_0',);
            }

            // _assetic_jquery_css
            if ('/css/jquery.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_jquery_css',);
            }

            // _assetic_jquery_css_0
            if ('/css/jquery_jquery.mCustomScrollbar.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_jquery_css_0',);
            }

            // _assetic_font_awesome_css
            if ('/css/font-awesome.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_font_awesome_css',);
            }

            // _assetic_font_awesome_css_0
            if ('/css/font-awesome_font-awesome.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_awesome_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_font_awesome_css_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/fonts')) {
            if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular.')) {
                // _assetic_bootstrap_glyphicons_ttf
                if ('/fonts/glyphicons-halflings-regular.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
                }

                // _assetic_bootstrap_glyphicons_eot
                if ('/fonts/glyphicons-halflings-regular.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
                }

                // _assetic_bootstrap_glyphicons_svg
                if ('/fonts/glyphicons-halflings-regular.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
                }

                // _assetic_bootstrap_glyphicons_woff
                if ('/fonts/glyphicons-halflings-regular.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
                }

            }

            elseif (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.')) {
                // _assetic_bootstrap_glyphicons_ttf_0
                if ('/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
                }

                // _assetic_bootstrap_glyphicons_eot_0
                if ('/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
                }

                // _assetic_bootstrap_glyphicons_svg_0
                if ('/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
                }

                // _assetic_bootstrap_glyphicons_woff_0
                if ('/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
                }

            }

            elseif (0 === strpos($pathinfo, '/fonts/fontawesome-webfont.')) {
                // _assetic_fontawesome_webfont_ttf
                if ('/fonts/fontawesome-webfont.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_fontawesome_webfont_ttf',);
                }

                // _assetic_fontawesome_webfont_eot
                if ('/fonts/fontawesome-webfont.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_fontawesome_webfont_eot',);
                }

                // _assetic_fontawesome_webfont_svg
                if ('/fonts/fontawesome-webfont.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_fontawesome_webfont_svg',);
                }

                if (0 === strpos($pathinfo, '/fonts/fontawesome-webfont.woff')) {
                    // _assetic_fontawesome_webfont_woff
                    if ('/fonts/fontawesome-webfont.woff' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfont_woff',);
                    }

                    // _assetic_fontawesome_webfont_woff2
                    if ('/fonts/fontawesome-webfont.woff2' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_fontawesome_webfont_woff2',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/fonts/fontawesome-webfont_fontawesome-webfont_1.')) {
                // _assetic_fontawesome_webfont_ttf_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_fontawesome_webfont_ttf_0',);
                }

                // _assetic_fontawesome_webfont_eot_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_fontawesome_webfont_eot_0',);
                }

                // _assetic_fontawesome_webfont_svg_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_fontawesome_webfont_svg_0',);
                }

                if (0 === strpos($pathinfo, '/fonts/fontawesome-webfont_fontawesome-webfont_1.woff')) {
                    // _assetic_fontawesome_webfont_woff_0
                    if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.woff' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfont_woff_0',);
                    }

                    // _assetic_fontawesome_webfont_woff2_0
                    if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.woff2' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_fontawesome_webfont_woff2_0',);
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_login_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'app_login_login',);
        }

        // app_modelo_modelo
        if ('/modelo' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ModeloController::modeloAction',  '_route' => 'app_modelo_modelo',);
        }

        // app_principal_principal
        if ('/principal' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PrincipalController::principalAction',  '_route' => 'app_principal_principal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
