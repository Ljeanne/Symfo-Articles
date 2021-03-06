<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\ProductController::deleteProductAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController::getProductAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController::getProductsAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController::postProductAction' => ['privates', '.service_locator.KIjqkQ.', 'get_ServiceLocator_KIjqkQ_Service.php', true],
    'App\\Controller\\ProductController::setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\ProductController::updateProductAction' => ['privates', '.service_locator.8VNxdUn', 'get_ServiceLocator_8VNxdUnService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\ProductController:deleteProductAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController:getProductAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController:getProductsAction' => ['privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true],
    'App\\Controller\\ProductController:postProductAction' => ['privates', '.service_locator.KIjqkQ.', 'get_ServiceLocator_KIjqkQ_Service.php', true],
    'App\\Controller\\ProductController:setViewHandler' => ['privates', '.service_locator.l2alLEu', 'get_ServiceLocator_L2alLEuService.php', true],
    'App\\Controller\\ProductController:updateProductAction' => ['privates', '.service_locator.8VNxdUn', 'get_ServiceLocator_8VNxdUnService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
