<?php

namespace App\Models;

use App\Base\SluggableModel;

class Project extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('project', ['projectSlug' => $this->slug]);
    }

    /**
     * Retorna todos os registros da tabela "skills" como um array.
     *
     * @return array
     */
    public static function getAllProjectsAsArray(): array
    {
        $projects = self::all();
        $projectsArray = $projects->toArray();

        return $projectsArray;
    }
}
