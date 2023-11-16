<?php

namespace App\Models;

use App\Base\SluggableModel;

class Fruit extends SluggableModel
{
    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('fruit', ['fruitSlug' => $this->slug]);
    }
}
