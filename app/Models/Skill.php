<?php

namespace App\Models;

use App\Base\SluggableModel;

class Skill extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('skill', ['skillSlug' => $this->slug]);
    }

    /**
     * Retorna todos os registros da tabela "skills" como um array.
     *
     * @return array
     */
    public static function getAllSkillsAsArray(): array
    {
        $skills = self::all();
        $skillsArray = $skills->toArray();

        return $skillsArray;
    }
}
