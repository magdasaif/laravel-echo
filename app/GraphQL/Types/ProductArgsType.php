<?php
namespace App\GraphQL\Types;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductArgsType extends GraphQLType
{
    protected $attributes = [
        "name" => "ProductArgs",
        "description" => "Collection of products",
    ];
    public function fields(): array
    {
        return [
            "ID" => [
                "type" => Type::nonNull(Type::int()),
                "description" => "Id of a particular movie",
                'nullable' => true, // Make sure the nullable property is set correctly
            ],
        ];
    }
}
