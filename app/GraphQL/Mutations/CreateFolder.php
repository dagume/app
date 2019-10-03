<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Google_Service_Drive_FileList;
use Google_Service_Drive_Permission;
use Google_Http_MediaFileUpload;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;
use League\Flysystem\Util;

class CreateFolder
{

    public function __construct(Google_Service_Drive $service, $root = null, $options = [])
    {
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

        list ($pdirId, $name) = $this->splitPath('google_drive_folder_name');
        $folder = $this->createDirectory($name, $pdirId);
        if ($folder) {
            $itemId = $folder->getId();
            $this->cacheFileObjects[$name] = $folder; // for confirmation by getMetaData() oe has() while in this connection
            $this->cacheFileObjects[$itemId] = $folder;
            $this->cacheHasDirs[$itemId] = false;
            $path_parts = $this->splitFileExtension($name);
            $result = [
                'path' => Util::dirname('google_drive_folder_name') . '/' . $itemId,
                'filename' => $path_parts['filename'],
                'extension' => $path_parts['extension']
            ];
            return $result;
        }
        return false;
    }

}
