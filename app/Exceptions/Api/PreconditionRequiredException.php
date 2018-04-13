<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;

class PreconditionRequiredException extends Exception
{
    const STATUS = Response::HTTP_PRECONDITION_REQUIRED;
    const MESSAGE = 'The origin server requires the request to be conditional.';
}
