<?php
namespace Funcionario;

use Application\Dao\SFuncionarioDao;
use Application\Dao\SPessoaDao;

return [
    'controllers' => [
        'factories' => [
            Controller\FuncionarioController::class => Controller\Factory\FuncionarioControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            'SPessoaDao' => function ($sm) {
                return new SPessoaDao($sm);
            },
            'SFuncionarioDao' => function ($sm) {
                return new SFuncionarioDao($sm);
            }
        ]
    ],
    'router' => [
        'routes' => [
            'funcionario' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/funcionario',
                    'defaults' => [
                        'controller'    => Controller\FuncionarioController::class,
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
            'funcionario' => __DIR__ . '/../view',
        ],
    ],
];
