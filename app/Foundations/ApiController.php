<?php

namespace App\Foundations;

use App\Traits\ApiTrait;
use App\Http\Controllers\Controller;

abstract class ApiController extends Controller
{
    use ApiTrait;
}
