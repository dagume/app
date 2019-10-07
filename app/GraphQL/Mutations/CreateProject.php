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
            //env('GOOGLE_DRIVE_CLIENT_ID'),
            //'clientSecret' => env('GOOGLE_DRIVE_CLIENT_SECRET'),
            //'refreshToken' => env('GOOGLE_DRIVE_REFRESH_TOKEN'),
            //'folderId' => env('GOOGLE_DRIVE_FOLDER_ID'),

    //Correo APP
    //protected $client;
    //protected $folder_id = '12WUUWP1sZfC3cxhhcBFwJS7qWhzqqbTG';
    //protected $service;
    //protected $ClientId     = '815409361627-0nn4phhc08r978e3j80vvpis26an2opc.apps.googleusercontent.com';
    //protected $ClientSecret = 'XaeEXxmiij5XkZpB1TEw6tZA';
    //protected $refreshToken = '1/6YwyEC1zT7ZNGAaMYCqrRGspGpdnNwEfYux15O4fAh1VBtqonxUBvD71c1AeZSAJ';
    ////protected $accesToken = 'ya29.Il-UBzPnwSyk6V69lrmqVai-WFngQi5iQz-dSY4trTMr8m2vqoTzEf0y8Gjd-MvHqsdUDWReVQmwzJRl53XZtL0oAZRuzJYaAfcLYnGTUO8uOAJJHSaX3PREANTI0Xkk8A';

    //Correo Guecha
    protected $client;
    protected $folder_id    = '1bMApYJYghY6pFbNctOCQ9eFoARq8m20u';
    protected $service;
    protected $ClientId     = '533105249509-k5do9epr4tsj5bglqp6b49ol1e7s0auv.apps.googleusercontent.com';
    protected $ClientSecret = 'muJfXiwMxzhPQjki_3icZq5q';
    protected $refreshToken = '1/Xw53oCgugcdZYm_U4EAlDgg1j_Bj3e0U_6aJ8UnwQUI';
    //protected $accesToken = 'ya29.Il-UBzPnwSyk6V69lrmqVai-WFngQi5iQz-dSY4trTMr8m2vqoTzEf0y8Gjd-MvHqsdUDWReVQmwzJRl53XZtL0oAZRuzJYaAfcLYnGTUO8uOAJJHSaX3PREANTI0Xkk8A';

    public function __construct()
    {
        dd(Storage::disk('google'));
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
            'name'     => 'project 2',
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
