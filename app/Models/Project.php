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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
