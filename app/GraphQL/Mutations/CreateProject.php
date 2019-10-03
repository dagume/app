<?php

namespace App\GraphQL\Mutations;

use App\Project;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter;


class CreateProject
{
    protected $client;
    protected $folder_id = '1bMApYJYghY6pFbNctOCQ9eFoARq8m20u';
    protected $service;
    protected $ClientId     = '533105249509-k5do9epr4tsj5bglqp6b49ol1e7s0auv.apps.googleusercontent.com';
    protected $ClientSecret = 'muJfXiwMxzhPQjki_3icZq5q';
    protected $refreshToken = '1/eL0q7j1scpHxCfKWAvyaFAVaYFeRwEIvFgHV0Wx8b_l12dVvhpEJKnHt6YI16aGt';

    public function __construct()
    {
        $this->client = new \Google_Client();
        $this->client->setClientId($this->ClientId);
        $this->client->setClientSecret($this->ClientSecret);
        $this->client->refreshToken($this->refreshToken);
        $this->service = new \Google_Service_Drive($this->client);
    }
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
        $fileMetadata = new \Google_Service_Drive_DriveFile([
            'name'     => 'pueba1r',
            'mimeType' => 'application/vnd.google-apps.folder',
            'parents' => [$this->folder_id ],
        ]);

        $folder = $this->service->files->create($fileMetadata, ['fields' => 'id']);
        return [
            'folder' =>$folder->id
        ];
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
