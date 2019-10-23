<?php

namespace App\GraphQL\Mutations;

use App\Member;
use App\role_user;
use GraphQL\Type\Definition\ResolveInfo;
use DB;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Member_has_project
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
        DB::transaction(function () use($args){
            //dd(User::find(1)->email);
            $member = new Member;
            $member->id_project     = $args['id_project'];
            $member->id_contact     = $args['id_contact'];
            $member->hours_week     = $args['hours_week'];
            $member->hours_month    = $args['hours_month'];
            $member->state          = $args['state'];
            $member->save();
            $role_user = new role_user;
            $role_user->id_role     = $args['id_rol'];
            $role_user->id_members  = (int) Member::max('id_members');
            $role_user->save();
        }, 3);
        //$formulario->Visita_idVisita = (int) Visita::max('idVisita');
        return [
            'message' => 'Miembro agregado exitosamente'
        ];
    }
}
