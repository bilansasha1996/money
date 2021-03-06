<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
           'user' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/user',
                    'defaults' => array(
                        '__NAMESPACE__' => 'User\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                              ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'auth' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/auth',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'auth',
                            ),
                        ),
                    ),
                    'registration' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/registration',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'registration',
                            ),
                        ),
                    ),  
                    'input' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/input',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'input',
                            ),
                        ),
                    ), 
                    'history' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/history',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'history',
                            ),
                        ),
                    ),
                    'edit' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/edit',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'edit',
                            ),
                        ),
                    ),
                    'activation-link' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/activation-link',
                            'defaults' => array(
                                '__NAMESPACE__' => 'User\Controller',
                                 'controller'    => 'Index',
                                 'action'        => 'activation-link',
                            ),
                        ),
                    ),                                
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'User\Controller\Index' => 'User\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'user/index/index'        => __DIR__ . '/../view/user/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array('ViewJsonStrategy',),
    ),

    'view_helpers' => array(  
      'invokables'=> array( 
            'RenderUser' => 'User\View\Helper\RenderFormHelper'       
         )  
    ),

    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
