<?php

namespace App\Exceptions\Api;

use App\Traits\ApiTrait;
use Exception as BaseException;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class Exception extends BaseException
{
    use ApiTrait;

    const STATUS = Response::HTTP_INTERNAL_SERVER_ERROR;
    const CODE = null;
    const MESSAGE = null;

    protected $details = [];

    public function getStatusText(): string
    {
        if (! empty($this::CODE)) {
            return $this::CODE;
        }

        return strtoupper(str_slug(array_get(Response::$statusTexts, $this::STATUS), '_'));
    }

    protected function getDetails()
    {
        return [];
    }

    public function response(): JsonResponse
    {
        return $this->json(
            [],
            $this::STATUS,
            [
                'status' => $this::STATUS,
                'code' => $this->getStatusText(),
                'message' => $this::MESSAGE,
                'details' => $this->getDetails(),
            ]
        );
    }

    public function addDetail($key, $value)
    {
        if (is_null($key) || $key === false) {
            $this->details[] = $value;
        } else {
            $this->details[$key] = $value;
        }
        return $this;
    }
}
