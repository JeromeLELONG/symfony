<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/admin/post/'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'admin_post_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/admin/post/'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'admin_post_new' => array(array('_locale'), array('_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/admin/post/new'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'admin_post_show' => array(array('_locale', 'id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'), array('id' => '\\d+', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('variable', '/', '\\d+', 'id'), array('text', '/admin/post'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'admin_post_edit' => array(array('_locale', 'id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'), array('id' => '\\d+', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/edit'), array('variable', '/', '\\d+', 'id'), array('text', '/admin/post'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'admin_post_delete' => array(array('_locale', 'id'), array('_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/post'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'blog_index' => array(array('_locale'), array('page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/blog/'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'blog_rss' => array(array('_locale'), array('page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/blog/rss.xml'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'blog_index_paginated' => array(array('_locale', 'page'), array('_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('page' => '[1-9]\\d*', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('variable', '/', '[1-9]\\d*', 'page'), array('text', '/blog/page'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'blog_post' => array(array('_locale', 'slug'), array('_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/blog/posts'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'comment_new' => array(array('_locale', 'postSlug'), array('_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/new'), array('variable', '/', '[^/]++', 'postSlug'), array('text', '/blog/comment'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'blog_search' => array(array('_locale'), array('_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/blog/searcharticle'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'security_login' => array(array('_locale'), array('_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/login'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        'security_logout' => array(array('_locale'), array('_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('text', '/logout'), array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'homepage' => array(array('_locale'), array('template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'), array('_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg'), array(array('variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg', '_locale')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
