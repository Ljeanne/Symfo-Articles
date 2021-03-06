<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Resolver\AuthorResolver' shared autowired service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
include_once $this->targetDirs[3].'/src/Resolver/AuthorResolver.php';

return $this->services['App\Resolver\AuthorResolver'] = new \App\Resolver\AuthorResolver(($this->privates['App\Repository\AuthorRepository'] ?? $this->load('getAuthorRepositoryService.php')));
