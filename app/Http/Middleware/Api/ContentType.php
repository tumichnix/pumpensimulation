<?php

namespace App\Http\Middleware\Api;

use App\Exceptions\Api\PreconditionRequiredException;
use App\Exceptions\Api\UnsupportedMediaTypeException;
use Closure;
use Illuminate\Http\Request;

class ContentType
{
    protected $header = 'Content-Type';

    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (!in_array($request->getMethod(),  [Request::METHOD_GET, Request::METHOD_DELETE])) {
            if (!$request->hasHeader($this->header)) {
                throw (new PreconditionRequiredException())->addDetail(null, 'The header "' . $this->header . '" is missing!');
            }
            if (strtolower($request->header($this->header)) != 'application/json') {
                throw (new UnsupportedMediaTypeException())->addDetail(null, 'The content-type "' . $request->header($this->header) . '" is not supported. Please use "application/json"!');
            }
        }

        return $next($request);
    }
}
