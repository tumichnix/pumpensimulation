<?php

namespace App\Http\Resources;

class UsersResource extends ApiCollection
{
    public function toArray($request): array
    {
        return [
            'data' => UserResource::collection($this->collection),
            'links' => [
                'self' => route('api.users.index'),
            ],
        ];
    }
}
