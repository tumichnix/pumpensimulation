<?php

namespace App\Http\Controllers\Api;

use App\Foundations\ApiController;
use Illuminate\Http\JsonResponse;

class MiscController extends ApiController
{
    public function getPing(): JsonResponse
    {
        return $this->json([
            'ping' => 'pong',
        ]);
    }
}
