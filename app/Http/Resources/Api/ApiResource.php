<?php

namespace App\Http\Resources;

use App\Traits\ApiTrait;
use Illuminate\Http\Resources\Json\Resource;

class ApiResource extends Resource
{
    use ApiTrait;

    public function with($request): array
    {
        return [
            'meta' => [
                'environments' => $this->getEnvironments($request),
            ],
        ];
    }
}
