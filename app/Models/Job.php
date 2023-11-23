<?php

namespace App\Models;

use App\Base\SluggableModel;

class Job extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('job', ['jobSlug' => $this->slug]);
    }

    /**
     * Retorna todos os registros da tabela "jobs" como um array.
     *
     * @return array
     */
    public static function getAlljobsAsArray(): array
    {
        $jobs = self::all();
        $jobArray = $jobs->toArray();

        return $jobArray;
    }
}
