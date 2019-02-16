<?php
namespace Login;

use Application\Dao\SPessoaDao;
use Zend\Router\Http\Segment;

return [
    'controllers' => [
        'factories' => [
            Controller\LoginController::class => Controller\Factory\LoginControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            'SPessoaDao' => function ($sm) {
                return new SPessoaDao($sm);

            }
        ]
    ],
    'router' => [
        'routes' => [
            'login' => [
                'type'    => Segment::class,
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/login[/:action]',
                    'defaults' => [
                        'controller'    => Controller\LoginController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
