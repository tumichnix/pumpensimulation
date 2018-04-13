<?php

namespace App\Http\Resources;

class ProjectResource extends ApiResource
{
    public function toArray($request): array
    {
        return [
            'type' => 'project',
            'id' => $this->getKey(),
            'attributes'    => [
                'name' => $this->name,
                'param_a' => $this->param_a,
                'param_b' => $this->param_b,
                'param_c' => $this->param_c,
                'calc' => $this->calc,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'links' => [
                'self' => route('api.projects.show', ['project' => $this->getKey()]),
            ],
        ];
    }
}
