<?php

namespace App\Models;

use App\Base\SluggableModel;

class Certificate extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('certificate', ['certificateSlug' => $this->slug]);
    }
}
