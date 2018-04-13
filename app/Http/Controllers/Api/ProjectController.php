<?php

namespace App\Http\Controllers\Api;

use App\Foundations\ApiController;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectsResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class ProjectController extends ApiController
{
    public function index(Request $request): ProjectsResource
    {
        return new ProjectsResource(Project::paginate());
    }

    public function show(Project $project): ProjectResource
    {
        return new ProjectResource($project);
    }

    public function store(Request $request): ProjectResource
    {
        $this->validate($request, Project::getRules());

        $project = new Project($request->all());
        $project->save();

        return new ProjectResource($project);
    }

    public function update(Request $request, Project $project): ProjectResource
    {
        $this->validate($request, Project::getRules());

        $project->update($request->only(['name']));

        return new ProjectResource($project);
    }

    public function delete(Project $project): JsonResponse
    {
        $project->delete();

        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
