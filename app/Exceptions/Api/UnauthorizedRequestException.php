<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;

class UnauthorizedRequestException extends Exception
{
    const STATUS = Response::HTTP_UNAUTHORIZED;
    const MESSAGE = 'The request is not authorized by any correct credentials.';
}
