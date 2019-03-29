<?php
namespace Overblog\GraphQLBundle\__DEFINITIONS__;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Overblog\GraphQLBundle\Definition\ConfigProcessor;
use Overblog\GraphQLBundle\Definition\GlobalVariables;
use Overblog\GraphQLBundle\Definition\LazyConfig;
use Overblog\GraphQLBundle\Definition\Type\GeneratedTypeInterface;

/**
 * THIS FILE WAS GENERATED AND SHOULD NOT BE MODIFIED!
 */
final class MutationType extends ObjectType implements GeneratedTypeInterface
{

    public function __construct(ConfigProcessor $configProcessor, GlobalVariables $globalVariables = null)
    {
        $configLoader = function(GlobalVariables $globalVariable) {
            return [
            'name' => 'Mutation',
            'description' => null,
            'fields' => function () use ($globalVariable) {
                return [
                'NewArticle' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('ArticleInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["NewArticle", [0 => $args["input"]["title"], 1 => $args["input"]["text"], 2 => $args["input"]["author_id"], 3 => $args["input"]["category_id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'UpdateArticle' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Article using its id.',
                        ],
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('ArticleInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["UpdateArticle", [0 => $args["id"], 1 => $args["input"]["title"], 2 => $args["input"]["text"], 3 => $args["input"]["author_id"], 4 => $args["input"]["category_id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'DeleteArticle' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Article using its id.',
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["DeleteArticle", [0 => $args["id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'NewAuthor' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('AuthorInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["NewAuthor", [0 => $args["input"]["username"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'UpdateAuthor' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Author using its id.',
                        ],
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('AuthorInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["UpdateAuthor", [0 => $args["id"], 1 => $args["input"]["username"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'DeleteAuthor' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Author using its id.',
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["DeleteAuthor", [0 => $args["id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'NewCategory' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('CategoryInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["NewCategory", [0 => $args["input"]["name"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'UpdateCategory' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Category using its id.',
                        ],
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('CategoryInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["UpdateCategory", [0 => $args["id"], 1 => $args["input"]["name"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'DeleteCategory' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Category using its id.',
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["DeleteCategory", [0 => $args["id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'NewComment' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('CommentInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["NewComment", [0 => $args["input"]["text"], 1 => $args["input"]["article_id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'UpdateComment' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Comment using its id.',
                        ],
                        [
                            'name' => 'input',
                            'type' => Type::nonNull($globalVariable->get('typeResolver')->resolve('CommentInput')),
                            'description' => null,
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["UpdateComment", [0 => $args["id"], 1 => $args["input"]["text"], 2 => $args["input"]["article_id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
                'DeleteComment' => [
                    'type' => $globalVariable->get('typeResolver')->resolve('MutationSuccess'),
                    'args' => [
                        [
                            'name' => 'id',
                            'type' => Type::nonNull(Type::int()),
                            'description' => 'Mutates Comment using its id.',
                        ],
                    ],
                    'resolve' => function ($value, $args, $context, ResolveInfo $info) use ($globalVariable) {
                        return $globalVariable->get('mutationResolver')->resolve(["DeleteComment", [0 => $args["id"]]]);
                    },
                    'description' => null,
                    'deprecationReason' => null,
                    'complexity' => null,
                    # public and access are custom options managed only by the bundle
                    'public' => null,
                    'access' => null,
                    'useStrictAccess' => true,
                ],
            ];
            },
            'interfaces' => function () use ($globalVariable) {
                return [];
            },
            'isTypeOf' => null,
            'resolveField' => null,
        ];
        };
        $config = $configProcessor->process(LazyConfig::create($configLoader, $globalVariables))->load();
        parent::__construct($config);
    }
}
