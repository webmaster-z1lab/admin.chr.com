<?php

namespace Modules\User\Http\Resources\v1;

use Illuminate\Http\Resources\Json\Resource;

/**
 * Class User
 *
 * @package Modules\User\Http\Resources\v1
 *
 * @property-read \Modules\User\Models\User $resource
 */
class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->resource->id,
            'type'       => 'users',
            'attributes' => [
                'type'       => $this->resource->type,
                'name'       => $this->resource->name,
                'email'      => $this->resource->email,
                'created_at' => $this->resource->created_at->toW3cString(),
                'updated_at' => $this->resource->updated_at->toW3cString(),
            ],
        ];
    }
}
