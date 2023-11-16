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
}
