<?php

namespace App\Http\Resources;

class UserResource extends ApiResource
{
    public function toArray($request): array
    {
        return [
            'type' => 'user',
            'id' => $this->getKey(),
            'attributes'    => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'links' => [
                'self' => route('api.users.show', ['user' => $this->getKey()]),
            ],
        ];
    }
}
