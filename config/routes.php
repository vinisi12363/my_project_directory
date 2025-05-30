<?php

use App\Controller\ApiHelloController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('api_hello_show', '/api/hello')
        ->controller([ApiHelloController::class, 'show'])
        ->methods(['GET', 'HEAD'])
    ;
};
