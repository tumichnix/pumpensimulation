<?php

namespace App\Http\Controllers\Api;

use App\Foundations\ApiController;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class UserController extends ApiController
{
    public function index(Request $request): UsersResource
    {
        return new UsersResource(User::paginate());
    }

    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function store(Request $request): UserResource
    {
        $this->validate($request, User::getRules());

        $user = new User($request->only(['first_name', 'last_name']));
        $user->save();

        return new UserResource($user);
    }

    public function update(Request $request, User $user): UserResource
    {
        $this->validate($request, User::getRules());
        
        $user->update($request->only(['first_name', 'last_name']));

        return new UserResource($user);
    }

    public function delete(User $user): JsonResponse
    {
        $user->delete();

        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
