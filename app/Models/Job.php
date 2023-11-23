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
    public static function getAllJobsAsArray(): array
    {
        $jobs = self::all();
        $jobArray = $jobs->toArray();

        return $jobArray;
    }

    /**
     * Retorna todos os registros da tabela "jobs" com um determinado tipo como um array.
     *
     * @param  string  $type
     * @return array
     */
    public static function getAllJobsByTypeAsArray(string $type): array
    {
        $jobs = self::where('type', $type)->get();
        $jobArray = $jobs->toArray();

        return $jobArray;
    }
}
