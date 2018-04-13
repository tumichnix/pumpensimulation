<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;

class NotFoundException extends Exception
{
    const STATUS = Response::HTTP_NOT_FOUND;
    const MESSAGE = 'There is no resource behind the URI';
}
