<?php

namespace App\Models;

use App\Base\SluggableModel;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends SluggableModel
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Article::class)->published();
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @return string
     */
    public function getLinkAttribute(): string
    {
        return route('category', ['cSlug' => $this->slug]);
    }

    /**
     * Retorna todos os registros da tabela "categories" como um array.
     *
     * @return array
     */
    public static function getAllCategoriesAsArray(): array
    {
        $categories = self::all();
        $categoriesArray = $categories->toArray();

        return $categoriesArray;
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
