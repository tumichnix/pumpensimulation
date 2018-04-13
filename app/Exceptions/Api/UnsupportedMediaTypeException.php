<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;

class UnsupportedMediaTypeException extends Exception
{
    const STATUS = Response::HTTP_UNSUPPORTED_MEDIA_TYPE;
    const MESSAGE = 'The request entity has a media type which the server or resource does not support.';
}
