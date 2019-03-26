<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.config' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/DescriberInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/ExternalDocDescriber.php';

return $this->privates['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(['info' => ['title' => 'API Products', 'description' => 'CRUD Products', 'version' => '1.0.0'], 'securityDefinitions' => ['Bearer' => ['type' => 'apiKey', 'description' => 'Value: Bearer {jwt}', 'name' => 'Authorization', 'in' => 'header']], 'security' => [0 => ['Bearer' => []]]]);