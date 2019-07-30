<?php

namespace App\GraphQL\Mutations;

use App\Project;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class CreateProject
{
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */
    public function resolve($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
    //    return Project::create([
    //        'name'          => $args['name'],
    //        'start_date'    => $args['start_date'],
    //        'closing_date'  => $args['closing_date'],
    //        'description'   => $args['description'],
    //        'budget'        => $args['budget'],
    //        'execution'     => $args['execution'],
    //        'advance'       => $args['advance'],
    //        'execution'     => $args['execution'],
    //        'category'      => $args['category'],
    //        'state'         => $args['state'],
    //    ]);
    }
}
