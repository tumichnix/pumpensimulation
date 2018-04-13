<?php

namespace App\Exceptions\Api;

use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;

class ValidationException extends Exception
{
    const STATUS = Response::HTTP_PRECONDITION_FAILED;

    protected $validator;

    public function __construct(Validator $validator = null, $message = '', $code = 0, Exception $previous = null)
    {
        $this->validator = $validator;
        parent::__construct($message, $code, $previous);
    }

    protected function getDetails()
    {
        return $this->validator->getMessageBag();
    }
}
