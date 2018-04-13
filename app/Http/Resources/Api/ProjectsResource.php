<?php

namespace App\Http\Resources;

class ProjectsResource extends ApiCollection
{
    public function toArray($request): array
    {
        return [
            'data' => ProjectResource::collection($this->collection),
            'links' => [
                'self' => route('api.projects.index'),
            ],
        ];
    }
}
