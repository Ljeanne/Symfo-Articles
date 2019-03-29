<?php
namespace Overblog\GraphQLBundle\__DEFINITIONS__;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use Overblog\GraphQLBundle\Definition\ConfigProcessor;
use Overblog\GraphQLBundle\Definition\GlobalVariables;
use Overblog\GraphQLBundle\Definition\LazyConfig;
use Overblog\GraphQLBundle\Definition\Type\GeneratedTypeInterface;

/**
 * THIS FILE WAS GENERATED AND SHOULD NOT BE MODIFIED!
 */
final class ArticleInputType extends InputObjectType implements GeneratedTypeInterface
{

    public function __construct(ConfigProcessor $configProcessor, GlobalVariables $globalVariables = null)
    {
        $configLoader = function(GlobalVariables $globalVariable) {
            return [
            'name' => 'ArticleInput',
            'description' => null,
            'fields' => function () use ($globalVariable) {
                return [
                'title' => [
                    'type' => Type::nonNull(Type::string()),
                    'description' => null,
                ],
                'text' => [
                    'type' => Type::nonNull(Type::string()),
                    'description' => null,
                ],
                'author_id' => [
                    'type' => Type::nonNull(Type::int()),
                    'description' => null,
                ],
                'category_id' => [
                    'type' => Type::nonNull(Type::int()),
                    'description' => null,
                ],
            ];
            },
        ];
        };
        $config = $configProcessor->process(LazyConfig::create($configLoader, $globalVariables))->load();
        parent::__construct($config);
    }
}
