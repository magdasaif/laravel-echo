<?php
namespace App\GraphQL\Types;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
class ProductType extends GraphQLType
{
    protected $attributes = [
        "name" => "Product",
        "description" => "Collection of products",
        "model" => Product::class,
    ];
    public function fields(): array
    {
        return [
            "model" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "model",
            ],
            "model_id" => [
                "type" => Type::nonNull(Type::int()),
                "description" => "model id",
            ],
            "key" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "The key of filter",
            ],
        ];
    
    }
}
