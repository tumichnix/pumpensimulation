<?php

namespace App\Http\Resources;

use App\Traits\ApiTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ApiCollection extends ResourceCollection
{
    use ApiTrait;

    public function toArray($request): array
    {
        return [
            'data' => $this->collection,
        ];
    }

    public function with($request): array
    {
        return [
            'meta' => [
                'environments' => $this->getEnvironments($request),
            ],
        ];
    }
}
