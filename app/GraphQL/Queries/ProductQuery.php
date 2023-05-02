<?php
namespace App\GraphQL\Queries;
use App\Models\Product;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class ProductQuery extends Query
{
    protected $attributes = [
        "name" => "product",
    ];
    public function type(): Type
    {
        return GraphQL::type("Product");
    }
    public function args(): array
    {
        // return [
            // "id" => [
            //     "name" => "id",
            //     // "type" => Type::int(),
            //     "type"  => Type::listOf(GraphQL::type("ProductArgs")),
            //     "rules" => ["required"],
            // ],
        // ];

        // return [
        //     'objects' => [
        //         'type' => Type::listOf(Type::object([
        //             'name' => 'ObjectInput',
        //             'fields' => [
        //                 'name' => [
        //                     'type' => Type::string(),
        //                 ],
        //                 'value' => [
        //                     'type' => Type::int(),
        //                 ],
        //             ],
        //         ])),
        //         'description' => 'An array of objects with name and value fields',
        //     ],
        // ];



        $objectType = new InputObjectType([
            'name' => 'ObjectInput',
            'fields' => [
                'key' => [
                    'type' => Type::string(),
                ],
                'value' => [
                    'type' => Type::int(),
                ],
            ],
        ]);
    
        return [
            'model' => [
                'type' => Type::string(),
                'description' => 'specify if filter is on Category or General ',
            ],
            'model_id' => [
                'type' => Type::int(),
                'description' => 'Category id  or any number in case of General ',
            ],
            'objects' => [
                'type' => Type::listOf($objectType),
                'description' => 'An array of objects with name and value fields',
            ],
        ];
    }
    public function resolve($root, $args)
    {
        // return $objects = $args['objects'];

        
        // Use $objects as an array of objects in your application logic
        $key='';
        foreach($args['objects'] as $object){
            
            if($object['key']=='tages'){
                $key.='tags --> '.$object['key'].',';
            }
        }

        return [
            // 'name'=>$args
            // 'name' => count($args['objects']),
            // 'key' => $args['objects'][0]['key'],
            'key' => $args['objects'][0]['key'],
            'model' => $key,
            'model_id' => $args['model_id'],
        ];
    }
}
