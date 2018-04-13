<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;

class RuntimeException extends Exception
{
    const STATUS = Response::HTTP_INTERNAL_SERVER_ERROR;
    const CODE = 'INTERNAL_SERVER_ERROR';
    const MESSAGE = 'There was an unexpected error - you can try it again or contact the administrator.';
}
