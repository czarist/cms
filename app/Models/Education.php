<?php

namespace App\Models;

use App\Base\SluggableModel;

class Education extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('education', ['educationSlug' => $this->slug]);
    }

    /**
     * Retorna todos os registros da tabela "educations" como um array.
     *
     * @return array
     */
    public static function getAllEducationsAsArray(): array
    {
        $educations = self::all();
        $educationsArray = $educations->toArray();

        return $educationsArray;
    }
}
